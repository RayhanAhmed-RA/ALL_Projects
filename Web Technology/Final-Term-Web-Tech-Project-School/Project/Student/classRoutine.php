<?php 
session_start();
if(isset($_COOKIE['userid']))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Class Routine</title>
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
       <h1>Class Routine</h1>
	
		<table border="1" width="100%" bgcolor="#ABB2B9">
      <tr>
          <th>Subject</th>
          <th>Teacher</th>
          <th>Time</th>
          <th>Room</th>
        </tr>
        <?php
      $conn = mysqli_connect('localhost', 'root', '', 'school');
      $sql1 = "select * from student where studentid='{$_COOKIE['userid']}'";
      $result1 = mysqli_query($conn, $sql1);

      while($user1 = mysqli_fetch_assoc($result1)){
        $sql2 = "select * from subject where subject='{$user1['subject']}'";
        $result2 = mysqli_query($conn, $sql2);
        $user2 = mysqli_fetch_assoc($result2);


        ?>

        <tr>        
          <td><?php echo $user2["subject"]; ?></td>
          <td><?php echo $user2["teachername"]; ?></td>
          <td><?php echo $user2['time']; ?></td>
          <td><?php echo $user2["room"]; ?></td>
          
        </tr>
        <?php

        }

      ?>
			
		</table>

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
