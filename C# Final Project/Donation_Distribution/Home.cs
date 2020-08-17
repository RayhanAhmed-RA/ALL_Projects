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
    public partial class Home : Form
    {
        public Home()
        {
            InitializeComponent();
        }

        

        private void Label1_Click(object sender, EventArgs e)
        {
            //this.Hide();
            UserLogin ul = new UserLogin();
            ul.Show();
        }
    }
}
