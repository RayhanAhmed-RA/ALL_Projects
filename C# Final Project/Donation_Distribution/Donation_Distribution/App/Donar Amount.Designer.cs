namespace Donation_Distribution
{
    partial class Donar_Amount
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.Donar_amountConfirm_ok_button = new System.Windows.Forms.Button();
            this.Enter_amount_textBox = new System.Windows.Forms.TextBox();
            this.Enter_Amount_label = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // Donar_amountConfirm_ok_button
            // 
            this.Donar_amountConfirm_ok_button.Location = new System.Drawing.Point(174, 131);
            this.Donar_amountConfirm_ok_button.Margin = new System.Windows.Forms.Padding(2);
            this.Donar_amountConfirm_ok_button.Name = "Donar_amountConfirm_ok_button";
            this.Donar_amountConfirm_ok_button.Size = new System.Drawing.Size(80, 28);
            this.Donar_amountConfirm_ok_button.TabIndex = 5;
            this.Donar_amountConfirm_ok_button.Text = "OK";
            this.Donar_amountConfirm_ok_button.UseVisualStyleBackColor = true;
            this.Donar_amountConfirm_ok_button.Click += new System.EventHandler(this.Donar_amountConfirm_ok_button_Click);
            // 
            // Enter_amount_textBox
            // 
            this.Enter_amount_textBox.Location = new System.Drawing.Point(187, 74);
            this.Enter_amount_textBox.Margin = new System.Windows.Forms.Padding(2);
            this.Enter_amount_textBox.Name = "Enter_amount_textBox";
            this.Enter_amount_textBox.Size = new System.Drawing.Size(153, 22);
            this.Enter_amount_textBox.TabIndex = 4;
            // 
            // Enter_Amount_label
            // 
            this.Enter_Amount_label.AutoSize = true;
            this.Enter_Amount_label.Location = new System.Drawing.Point(62, 77);
            this.Enter_Amount_label.Margin = new System.Windows.Forms.Padding(2, 0, 2, 0);
            this.Enter_Amount_label.Name = "Enter_Amount_label";
            this.Enter_Amount_label.Size = new System.Drawing.Size(106, 17);
            this.Enter_Amount_label.TabIndex = 3;
            this.Enter_Amount_label.Text = "Enter Amount : ";
            // 
            // Donar_Amount
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(400, 232);
            this.Controls.Add(this.Donar_amountConfirm_ok_button);
            this.Controls.Add(this.Enter_amount_textBox);
            this.Controls.Add(this.Enter_Amount_label);
            this.Margin = new System.Windows.Forms.Padding(2);
            this.Name = "Donar_Amount";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Donar_Amount";
            this.Load += new System.EventHandler(this.Donar_Amount_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button Donar_amountConfirm_ok_button;
        private System.Windows.Forms.TextBox Enter_amount_textBox;
        private System.Windows.Forms.Label Enter_Amount_label;
    }
}