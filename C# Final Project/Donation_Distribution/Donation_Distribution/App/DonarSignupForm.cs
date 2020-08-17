using DatabaseProject;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Configuration;
using System.Windows.Forms;
using System.Data.SqlClient;
//using MySql.Data.MySqlClient;

namespace Donation_Distribution
{
    public partial class DonarSignupForm : Form
    {
        
        public DonarSignupForm()
        {
            InitializeComponent();
        }

        
        private void Back_to_signup_type_button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            Form1 f2 = new Form1();
            f2.Show();
        }

        private void Donar_signup_confirm_button_Click(object sender, EventArgs e)
        {

            DBAccess objDBAccess = new DBAccess();
            string donar_userName = Donar_name_textbox.Text;
            string donar_userEmail = Donar_email_textbox.Text;
            string donar_Phone_number = Donar_phn_num_textbox.Text;
            string donar_Password = Donar_password_textbox.Text;
            string donar_dob = Donar_dateTimePicker.Text;
            string donar_address = Donar_address_textBox.Text;
            string donar_occupation = Donar_occupation_textBox.Text;
            string donar_fakename = Donar_fake_name_textbox.Text;
            string donar_gender = Gender();
            int donar_age = CalculateAge();
            double donar_current_balance=0.00 ;
            double donar_total_donated_amount=0.00 ;
            
            

            if (donar_userName.Equals(""))
            {
                MessageBox.Show("please enter your Name.");
            }
            else if (donar_userEmail.Equals(""))
            {
                MessageBox.Show("please enter your Email.");
            }
            else if (donar_Phone_number.Equals(""))
            {
                MessageBox.Show("please enter your Phone number.");
            }
            else if (donar_Password.Equals(""))
            {
                MessageBox.Show("please enter your Password.");
            }
            else if (donar_dob.Equals(""))
            {
                MessageBox.Show("please enter your Date of Birth.");
            }
            else if (donar_address.Equals(""))
            {
                MessageBox.Show("please enter your address.");
            }
            else if (donar_occupation.Equals(""))
            {
                MessageBox.Show("please enter your occupation.");
            }
            else if (donar_fakename.Equals(""))
            {
                MessageBox.Show("please enter a fake name for you.");
            }
            else
            {
                SqlCommand insertcommand = new SqlCommand("insert into Donars(Name,Email,Phone_number,Password,Date_of_Birthday,Age,Address,Occupation,Fake_name,Gender,Current_Balance,Total_donated_amount) values(@donar_userName,@donar_userEmail,@donar_Phone_number,@donar_Password,@donar_dob,@donar_age,@donar_address,@donar_occupation,@donar_fakename,@donar_gender,@donar_current_balance,@donar_total_donated_amount)");

                insertcommand.Parameters.AddWithValue("@donar_userName", donar_userName);
                insertcommand.Parameters.AddWithValue("@donar_userEmail", donar_userEmail);
                insertcommand.Parameters.AddWithValue("@donar_Phone_number", donar_Phone_number);
                insertcommand.Parameters.AddWithValue("@donar_Password", donar_Password);
                insertcommand.Parameters.AddWithValue("@donar_dob", donar_dob);
                insertcommand.Parameters.AddWithValue("@donar_age", donar_age);
                insertcommand.Parameters.AddWithValue("@donar_address", donar_address);
                insertcommand.Parameters.AddWithValue("@donar_occupation", donar_occupation);
                insertcommand.Parameters.AddWithValue("@donar_fakename", donar_fakename);
                insertcommand.Parameters.AddWithValue("@donar_gender", donar_gender);
                insertcommand.Parameters.AddWithValue("@donar_current_balance", donar_current_balance);
                insertcommand.Parameters.AddWithValue("@donar_total_donated_amount", donar_total_donated_amount);

                int row = objDBAccess.executeQuery(insertcommand);

                if (row == 1)
                {
                    MessageBox.Show("Account created Successfully");
                    UserLogin hf = new UserLogin();
                    this.Hide();
                    hf.Show();
                }
                else
                {
                    MessageBox.Show("Error occured. try again.");
                }
            }

            string Gender()
            {
                if (Donar_male_radioButton.Checked)
                {
                    return "Male";
                }
                else if (Donar_female_radioButton.Checked)
                {
                    return "Female";
                }
                else if (Donar_other_radioButton.Checked)
                { return "Others"; }
                else
                {
                    return "Please select a gender";
                }
            }
            int CalculateAge()
            {
                int years = DateTime.Now.Year - Donar_dateTimePicker.Value.Year;

                if (Donar_dateTimePicker.Value.AddYears(years) > DateTime.Now)
                {
                    years--;
                }


                return years;
            }
            


        }

        private void Donar_dateTimePicker_ValueChanged(object sender, EventArgs e)
        {
            int years = DateTime.Now.Year - Donar_dateTimePicker.Value.Year;

            if (years <= 0)
            {
                MessageBox.Show("Please enter a valid Date of Birth");
            }
        }

        private void DonarSignupForm_Load(object sender, EventArgs e)
        {

        }
    }
}
