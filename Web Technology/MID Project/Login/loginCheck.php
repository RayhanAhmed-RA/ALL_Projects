<?php
session_start();
if(isset($_POST['submit']))
{
  $uid=$_POST['uid'];
  $upass=$_POST['upass'];
  if(empty($uid)==true || empty($upass)==true)
  {
    echo "Null Submission";
  }
  else 
  {
    $fileread=fopen("log.txt", "r");
    $userpass=explode("*", fgets($fileread));
    fclose($fileread);
    $userpasssize= count($userpass);
    for($i=0; $i<$userpasssize; $i++)
    {
      $useraccess=explode("|", $userpass[$i]);
      $useraccesssize=count($useraccess);
      for($j=0; $j<$useraccesssize; $j++)
      {
              if(($useraccess[0]==$uid) && ($useraccess[2]==$upass) && ($useraccess[3]=="Admin"))
              {
                $_SESSION['sessionName'] = $uid;

                 setcookie("userid",$useraccess[0],time()+3600,"/");
                 setcookie("username",$useraccess[1],time()+3600,"/");
                 header("location: ../Admin/AdminHome.php");
              }
               elseif(($useraccess[0]==$uid) && ($useraccess[2]==$upass) && ($useraccess[3]=="Student"))
              {
                $_SESSION['sessionName'] = $uid;
                
                 setcookie("userid",$useraccess[0],time()+3600,"/");
                 setcookie("username",$useraccess[1],time()+3600,"/");
                 header("location:../Student/studentHome.php");
              }
              else
              {
              echo "Invalid username or password!";
              }
      }

    }

  }
}
else
{
      header("location: ../Login/login.html");
}

?>