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
    public partial class Donar_Profile : Form
    {
        public Donar_Profile()
        {
            InitializeComponent();
        }

        private void Donar_logout_button_Click(object sender, EventArgs e)
        {
            UserLogin ul2 = new UserLogin();
            this.Hide();
            ul2.Show();
        }

        private void Donar_Donate_button_Click(object sender, EventArgs e)
        {
            Receiver_List rl = new Receiver_List();
            this.Hide();
            rl.Show();
        }

        private void Donar_to_home_button_Click(object sender, EventArgs e)
        {
            Home h2 = new Home();
            this.Hide();
            h2.Show();
        }

        private void Donar_Profile_Load(object sender, EventArgs e)
        {
            Donar_id_textBox.Text = UserLogin.id;
            Donar_name_textbox2.Text = UserLogin.name;
            Donar_email_textbox2.Text = UserLogin.email;
            Donar_phn_num_textbox2.Text = UserLogin.phn_num;
            Donar_dob_textbox.Text = UserLogin.dob;
            Donar_age_textBox.Text = UserLogin.age;
            Donar_occupation_textBox2.Text = UserLogin.occupation;
            Donar_gender_textBox2.Text = UserLogin.gender;
            Donar_address_textBox2.Text = UserLogin.address;
            Donar_fake_name_textbox2.Text = UserLogin.fake_name;
            Donar_current_balance_textBox2.Text = UserLogin.current_balance;
            Donar_total_donated_amount_textBox2.Text = UserLogin.total_donated_amount;
        }
    }
}
