<?php
session_start();
if(isset($_COOKIE['userid']))
{
?>
<!DOCTYPE html>
<html>
  <head>
   <title>Change Password</title>
   <link rel="stylesheet" type="text/css" href="../CSS/menubar.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <style type="text/css">
    table{
            margin-top: 50;
            border: 1px solid;
            background-color: #eee;
    		    height:300px
    		    margin-left: 440px
    }
    td{
        border: 0px;
        padding: 10px;
    }
    th{
        border-bottom: 1px solid;
        background-color: #ddd;
    }
</style>
  </head>
  <body>
    <header>
     <div class="head">
    <h1>
      
        <a href="studentHome.php">
      <img src="xyz.jpg" height="50px" width="100px" align="center"></a>RTS School
      </a>
        
           <a class="notification"href="notification.php">Notification</a>
         <a class="logout"href="logout.php">Logout</a>
        
       
      
      
    </h1>

      
    
  </div>

  <div class="nav">
    <ul class="main-menu">
      <li>Academics
        <ul class="sub-menu">
                <li><a href="../Student/OnlineExam/index.php">Online Exam</a></li>
                <li><a href="subject.php">Subject</a></li>
                <li><a href="courseResult.php">Result</a></li>
                <li><a href="teacher.php">Teacher</a></li>
                <li><a href="classRoutine.php">Class Routine</a></li>
                <li><a href="classAttendance.php">Class Attendance</a></li>
        </ul>

            </li>

      <li>Grade Reports

              <ul class="sub-menu">
                <li><a href="allResult.php">ALL Course Result</a></li>
              </ul>

      </li>
      <li>Libary
        <ul class="sub-menu">
                <li><a href="bookDetails.php">Book Details</a></li>
        <li><a href="borrowBooks.php">Borrow Book</a></li>
              </ul>
      <li>Others
        <ul class="sub-menu">
                <li><a href="downloadForms.php">Download Forms</a></li>
                <li><a href="teacherNote.php">Teacher Notes</a></li>
                <li><a href="article.php">Article</a></li>
              </ul>

      </li>

      <li>Personal Information
        <ul class="sub-menu">
                <li><a href="studentInfo.php">Student Profile</a></li>
                <li><a href="changePassword.php">Password Change</a></li>
              </ul>
    </ul>
  </div>
    </header>
<section id="showcase"> 
      <div class="container"><br>
   <form>
    <table border="1px">
      <tr>
        <td colspan="3" align="center"><b>Update Info</b></td>
      </tr>
      <tr>
        <td><b>Current Password:</b></td>
        <td><input type="Password" name="currentPassword" id="currentPassword"></td>
        <td><b style="color: red">*</b><b id="currentPasswordError"></b></td>
      </tr>

      <tr>
        <td><b>New Password:</b></td>
        <td><input type="Password" name="newPassword" id="newPassword"></td>
        <td><b style="color: red">*</b><b id="newPasswordError"></b></td>
      </tr>

      <tr>
        <td><b>Confirm New Password:</b></td>
        <td><input type="Password" name="confirmPassword" id="confirmPassword"></td>
        <td><b style="color: red">*</b><b id="confirmPasswordError"></b></td>
      </tr>

      <tr>
        <td><input type="button" name="submit" value="submit" onclick="validation()"></td>
      </tr>
    </table>
  </form>
  </fieldset>
  <script type="text/javascript">
  function validation() {   

    var count = 0;
    var currentPassword = document.getElementById('currentPassword').value;
    var newPassword = document.getElementById('newPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if(currentPassword == ""){
      document.getElementById("currentPasswordError").innerHTML = "Can't be empty";
    }
    else{
      document.getElementById("currentPasswordError").innerHTML = "";
      count++;
    }
    if(newPassword == ""){
      document.getElementById("newPasswordError").innerHTML = "Can't be empty";
    }
    else{
      document.getElementById("newPasswordError").innerHTML = "";
      count++;
    }
    if(confirmPassword == ""){
      document.getElementById("confirmPasswordError").innerHTML = "Can't be empty";
    }
    else{
      document.getElementById("confirmPasswordError").innerHTML = "";
      count++;
      //alert(count);
    } 
    if(count == 3){
      var toSend = {
        currentPassword: currentPassword,
        newPassword: newPassword,
        confirmPassword: confirmPassword 
      };
      var jsonString = JSON.stringify(toSend);
      //alert(jsonString);
      
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "changePasswordChk.php", true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      //1.3-string send to php
      xhttp.send("data="+jsonString);

      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
          //document.getElementById('data').innerHTML = this.responseText;
        }
      };  
    }

  }
  </script>
		</div>

    
  </body>
</html>
<?php
}
else
{
  header('location: ../Login/Login.html');
}
?>
