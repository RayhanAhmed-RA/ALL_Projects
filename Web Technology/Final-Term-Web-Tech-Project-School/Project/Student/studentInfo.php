<?php 
session_start();

include "../includes/db_connect.inc.php";
$student_id="";
if(isset($_COOKIE['userid']))
{
$conn=mysqli_connect('localhost','root','','school');
$sql="SELECT Uid,UName,Father_Name,Mother_Name,User_Type,Email,Gender,Contact_No,Date_Of_Birth,Admission_Date,Class,Roll,Address FROM `UserInformation` WHERE UId='{$_COOKIE['userid']}'";
  $result=mysqli_query($conn,$sql);
  $user=mysqli_fetch_assoc($result);
 
    if(count($user)>0)
    {
?>
<!DOCTYPE html>
<html>
  <head>
   <title>Student Profile</title>
   <link rel="stylesheet" type="text/css" href="../CSS/menubar.css">

  </head>
  <body>
    <header>
     <div class="head">
    <h1>
      
        <a href="studentHome.php">
      <img src="xyz.jpg" height="50px" width="100px" align="center"></a>RTS School
      </a>
        
           <a class="notification" href="notification.php">Notification</a>
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
      <div>
        <center><h1>Student Profile</h1></center>

  <center>
    <table border="1" width="30%" bgcolor="#ABB2B9" style="text-align: left;" >
     
      <tr>
        <th>Name : <i> <?=$user['UName']?></i></th>
      </tr>
      <tr>
        <th>Father Name : <i> <?=$user["Father_Name"]?></i></th>
      </tr>
      <tr>
        <th>Mother Name : <i> <?=$user["Father_Name"]?></i></th>
      </tr>
      <tr>
        <th>Email : <i> <?=$user['Email']?></i></th>
      </tr>
      <tr>
        <th>Contact Number : <i> <?=$user['Contact_No']?></i></th>
      </tr>
      <tr>
        <th>Gender : <i> <?=$user['Gender']?></i></th>
      </tr>
      <tr>
        <th>User Type : <i> <?=$user['User_Type']?></i></th>
      </tr>
      <tr>
        <th>DOB : <i> <?=$user['Date_Of_Birth']?></i></th>
      </tr>
      <tr>
        <th>Admission Date : <i> <?=$user['Admission_Date']?></i></th>
      </tr>
      <tr>
        <th>Address : <i> <?=$user['Address']?></i></th>
      </tr>
      <tr>
        <th>Class : <i> <?=$user['Class']?></i></th>
      </tr>
      <tr>
        <th>Roll : <i> <?=$user['Roll']?></i></th>
      </tr>
     </table>
     </center>
        </div>

    
  </body>
</html>
<?php

    }
    else
    {
     echo"No data found";
    }
}
else
{
  header('location: ../Login/Login.html');
}
?>