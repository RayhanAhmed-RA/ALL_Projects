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
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            
        }

        

        

        private void Donar_User_Click(object sender, EventArgs e)
        {
            this.Hide();
            DonarSignupForm dd = new DonarSignupForm();
            dd.Show();
        }

        private void Receiver_user_Click(object sender, EventArgs e)
        {
            this.Hide();
            ReceiverSignupForm rr = new ReceiverSignupForm();
            rr.Show();
       
        }

        private void Back_to_login_button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            UserLogin ul2 = new UserLogin();
            ul2.Show();
            
        }
    }
}
