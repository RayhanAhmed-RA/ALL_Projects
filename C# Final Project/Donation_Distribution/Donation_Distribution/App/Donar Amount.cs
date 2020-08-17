using DatabaseProject;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Donation_Distribution
{
    public partial class Donar_Amount : Form
    {
        public static double donar_total_donated_amount = Double.Parse(UserLogin.total_donated_amount);
        DataTable dtUsers = new DataTable();

        private void Donar_Amount_Load(object sender, EventArgs e)
        {
            
        }

        DBAccess objDBAccess = new DBAccess();
        public Donar_Amount()
        {
            InitializeComponent();
        }

        private void Donar_amountConfirm_ok_button_Click(object sender, EventArgs e)
        {
            MessageBox.Show("You select "+Receiver_List.receiver_name+ " for donation.");
            double donated_amount = Double.Parse(Enter_amount_textBox.Text);

            if (Double.Parse(Receiver_List.need_amounts) == 0)
            {
                MessageBox.Show("This person's request has been full fill. Don't need more money");
                Receiver_List.cs_amount = Double.Parse(Receiver_List.current_stored_amount) + donated_amount;
                Receiver_List.tr_donation = Double.Parse(Receiver_List.total_received_donation) + donated_amount;
                Receiver_List.donarUser_c_balance = Double.Parse(UserLogin.current_balance) + donated_amount;
                donar_total_donated_amount = Double.Parse(UserLogin.total_donated_amount) + donated_amount;
            }
            else if (Double.Parse(Receiver_List.need_amounts) >= donated_amount)
            {
                Receiver_List.g_amount = Double.Parse(Receiver_List.got_amounts) + donated_amount;
                Receiver_List.n_amount = (Double.Parse(Receiver_List.need_amounts) - donated_amount);

                Receiver_List.tr_donation = Double.Parse(Receiver_List.total_received_donation) + donated_amount;
                Receiver_List.td_donation = Double.Parse(Receiver_List.total_delivered_donation) + donated_amount;

                donar_total_donated_amount = Double.Parse(UserLogin.total_donated_amount) + donated_amount;
            }
            else
            {
                Receiver_List.g_amount = Double.Parse(Receiver_List.got_amounts) + Double.Parse(Receiver_List.need_amounts);
                

                Receiver_List.donarUser_c_balance = Double.Parse(UserLogin.current_balance) + ( donated_amount - Double.Parse(Receiver_List.need_amounts));
                donar_total_donated_amount = Double.Parse(UserLogin.total_donated_amount) + donated_amount;
                
                Receiver_List.cs_amount = Double.Parse(Receiver_List.current_stored_amount) +(donated_amount - Double.Parse(Receiver_List.need_amounts));
                Receiver_List.td_donation = Double.Parse(Receiver_List.total_delivered_donation) + Double.Parse(Receiver_List.need_amounts);
                Receiver_List.tr_donation = Double.Parse(Receiver_List.total_received_donation) + donated_amount;

                Receiver_List.n_amount = 0.00;
            }

            string query21 = "UPDATE Receiver_requests SET Amount_need = '" + Receiver_List.n_amount + "', Amount_got = '" + Receiver_List.g_amount + "' WHERE rid = '" + Receiver_List.receiver_id + "' ";
            objDBAccess.readDatathroughAdapter(query21, dtUsers);

            string query22 = "UPDATE System_account SET Total_received_donation = '"+ Receiver_List.tr_donation + "' , Total_delivered_donation = '" + Receiver_List.td_donation + "', Current_stored_amount = '" + Receiver_List.cs_amount + "' WHERE Account_name = 'SYSTEM'; ";
            objDBAccess.readDatathroughAdapter(query22, dtUsers);

            string query23 = "UPDATE Donars SET Total_donated_amount = '"+donar_total_donated_amount+"',Current_Balance = '" + Receiver_List.donarUser_c_balance + "' WHERE ID = '" + UserLogin.id + "'; ";
            objDBAccess.readDatathroughAdapter(query23, dtUsers);

            MessageBox.Show("Thanks for your donation, your donation transfer successfully.");


            Donar_Profile dp = new Donar_Profile();
            this.Hide();
            dp.Refresh();
            UserLogin l = new UserLogin();
            l.Show();
            //dp.Show();
            

        }

        
    }
}
