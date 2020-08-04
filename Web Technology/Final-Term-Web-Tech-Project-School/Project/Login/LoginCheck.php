<?php 
session_start();
if(isset($_POST['submit']))
{
  $uid=$_POST['uid'];
  $uname=$_POST['uname'];
  $upass=$_POST['upass'];
  if( empty($uid)==true || empty($upass)==true || empty($uname)==true )
  {
  	echo "Null Submission";
  }
  else
  {
  	$conn=mysqli_connect('localhost','root','','school');
    $sql= "SELECT * FROM `UserInformation` WHERE UId='{$uid}' and UName='{$uname}' and Password='{$upass}'";
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_assoc($result);

            	if(count($user)>0 && $user['User_Type']=='Admin')
  	          {
                 setcookie("userid",$uid,time()+3600,"/");
                 setcookie("username",$uname,time()+3600,"/");
                 setcookie("userpass",$upass,time()+3600,"/");
  		           header("location: ../Admin/AdminHome.php");
  	          }
  	           elseif(count($user)>0 && $user['User_Type']=='Teacher')
  	          {
                 setcookie("userid",$uid,time()+3600,"/");
  		           setcookie("username",$uname,time()+3600,"/");
                 setcookie("userpass",$upass,time()+3600,"/");
  		           header("location: ../Teacher/TeacherHome.php");
              }
               elseif(count($user)>0 && $user['User_Type']=='Student')
              {
                 setcookie("userid",$uid,time()+3600,"/");
                 setcookie("username",$uname,time()+3600,"/");
                 setcookie("userpass",$upass,time()+3600,"/");
                 header("location: ../Student/studentHome.php");
              }
  	          else
  	          {
  		        echo "Invalid username or password!";
  	          }
  		}

}
else
{
      header("location: Login.html");
}

?>