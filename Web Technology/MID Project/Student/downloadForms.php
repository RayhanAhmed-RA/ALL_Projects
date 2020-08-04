<?php 
session_start();
if(isset($_COOKIE['username']))
{
?>
<!DOCTYPE html>
<html>
  <head>
   <title>Download Form</title>
    <style>
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: gray;
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
        
           <a class="notification" href="notification.php">Notification</a>
         <a class="logout"href="logout.php">Logout</a>
        
       
      
      
    </h1>

      
    
  </div>

  <div class="nav">
    <ul class="main-menu">
      <li>Academics
        <ul class="sub-menu">
                <li><a href="curriculam.php">My Curriculam</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="offerCourse.php">Offer Course</a></li>
                <li><a href="courseResult.php">Course Result</a></li>
                <li><a href="financial.php">Financials</a></li>
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
              </ul>

      </li>

      <li>Personal Information
        <ul class="sub-menu">
                <li><a href="studentInfo.php">Student Profile</a></li>
                <li><a href="changePassword.php">Password Change</a></li>
              </ul>
    </ul>
  </div>


  <style type="text/css">
   body{
    background:#ccc;
   }
      *{
        padding: 1px;
        margin: 1px;

      }

      
     .head{
      background: white;
      color: RGB(225,66,0);
      padding: 0px 0px;
      font-family: sans-serif;
      font-size: 30px;
      border-top:10px solid #37f; 
     }
     

     
     
     .logout{

      float:right;
      display:inline;
      padding: 15px 25px 0 10px;
      font-family: sans-serif;
      font-size: 25px;
     
     }
     .notification{

      float:right;
      display:inline;
      padding: 15px 25px 0 10px;
      font-family: sans-serif;
      font-size: 25px;
     
     }


      .nav{
        padding: 10px 0px;
        background: #37f;
        text-align: center;
      }

         .main-menu>li{
          display: inline-block;
          width: 200px;
          padding: 10px 0px;
          margin-left: 10px;
          text-align: center;
          color: white;
          font-size: 20px;
          border-left: 1px solid white;
          transition: .4s;
          cursor: pointer;
          box-sizing: border-box;
         }
         
         .main-menu li:hover .sub-menu{
              display: block;
         }
 
         .sub-menu{
          display: none;
          position: absolute;
          padding: 0px;
          margin-top: 30px;
          margin-left: -10px; 
          float: left;
          width: 230px; 
          text-align: left;
          box-sizing: border-box;
          border: 5px solid white;
          box-shadow: 1px 1px 1px grey;

          
       
         }
         a{  
          text-decoration: none; 
         }

         .sub-menu:before{
                 content:"";
                 width: 0px;
                 height:0px;
                 border-left:20px solid transparent;
                 border-right:20px solid transparent;
                 border-bottom:30px solid white;
                 position: absolute;
                 margin:-30px 0px 0px 60px;
               
}

         .sub-menu >li{
          list-style-type: none;
          padding: 10px;
          font-size: 20px;
          background: #37f;
          width: 200px;

         }
     .main-menu>li:hover, .sub-menu>li:hover{
          background: #35c;
         }
 
  </style>

    </header>

    <section id="showcase">
      <div class="container">
        <h1>Download File</h1>
  
    <table >
      <tr height="100px">
        <th></th>
        <th></th>
      </tr>
      <tr height="100px">
        <td></td>
        <td></td>
      </tr>
      <tr height="100px">
        <td></td>
        <td></td>
      <tr height="100px">
        <td></td>
        <td></td>
      </tr>
      <tr height="100px">
        <td></td>
        <td></td>
      </tr>
    </table>

        </div>
    </section>

    
  </body>
</html>
<?php
}
else
{
  header('location: ../Login/Login.html');
}
?>