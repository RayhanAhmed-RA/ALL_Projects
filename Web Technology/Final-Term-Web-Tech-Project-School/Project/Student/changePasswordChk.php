<?php 
  //echo "Okay<br>"; 
  session_start();
  $conn = mysqli_connect('localhost', 'root', '', 'school');
 
  $text = $_POST['data'];
  $data = json_decode($text);



  $sql1 = "update userinformation set Password='{$data->newPassword}' where UId='{$_COOKIE['userid']}'";


  
 // $sql2 = "update regteacher set password='{$data->newPassword}' where username='{$_COOKIE['userid']}'";
    if(mysqli_query($conn, $sql1)){
      echo "Password change Success";
    }else{
      echo "Password change fails!";
    }


?>