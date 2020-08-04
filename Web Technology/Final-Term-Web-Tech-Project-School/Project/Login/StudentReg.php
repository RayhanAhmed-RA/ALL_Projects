<!DOCTYPE html> 
<html>
<head>
	<title>SignUp</title>

	<script type="text/javascript" src="/Js/JSValidation.js"></script>
</head>
<body>



<fieldset style="background-color: pink"  >
<h2>StudentRegistration</h2>
<table>
<form name="SRegForm" method="POST" action="" onsubmit="return StudentRegCheck()">
		<p>Student Id:<input type="text" name="Sid"></p>
		<hr>
        <p>Student Name:<input type="text" name="Sname"></p>
		<hr>
        <p>Father's Name<input type="text" name="SFname"></p>
        <hr>
        <p>Mother's Name:<input type="text" name="SMname"></p>
        <hr>
        <p>password:<input type="password" name="Spass"></p>
        <hr>
        <p>Confirm password:<input type="password" name="SCpass"></p>
	    <hr>
		<p>Email:<input type="Email" name="Semail"></p>
		<hr>
        <p>Gardians Contact No:<input type="text" name="SContact"></p>
        <hr>
		<p>User Type:
			          <input type="radio" name="Stype" value="Admin">Admin
			          <input type="radio" name="Stype" value="Teacher">Teacher
			          <input type="radio" name="Stype" value="Student" checked>Student
		</p>
		<hr>

		<p>Gender:
			          <input type="radio" name="Sgender" value="Male" checked>Male
			          <input type="radio" name="Sgender" value="semale">Female
		</p>
		<hr>

		<p>Date Of Birth:<input type="Date" name="Sdob"></p>
	    <hr>
		<p>Addmission Date:<input type="Date" name="SAdob"></p>
	    <hr>
		<p>Address:<textarea name="SAddress"></textarea></p>
		<hr>

		<p>Class:
			<select name="Sclass">
				<option></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4:</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</p>
		<hr>

		<p>Section:
			<select name="Ssec">
				<option></option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
		</p>
		<hr>

		<p>Roll:<input type="text" name="Sroll"></p>	

		<input type="submit" name="submit"> <input type="button" name="Rbutton" value="Reset">
		<a href="Login.html">Login</a> 
	</div>
	</form>
	</table>
</fieldset>
</center>
</body>
</html>

<?php
	  if(isset($_POST['submit']))
	  {
	  	$sid=$_POST['Sid'];
	  	$sname=$_POST['Sname'];
	  	$sfname=$_POST['SFname'];
	  	$smname=$_POST['SMname'];
	  	$spass=$_POST['Spass'];
	  	$scpass=$_POST['SCpass'];
	  	$semail=$_POST['Semail'];
	  	$scontact=$_POST['SContact'];
	    $stype=$_POST['Stype'];
	   	$sgender=$_POST['Sgender'];
	  	$sdob=$_POST['Sdob'];
	  	$sadob=$_POST['SAdob'];
	  	$saddress=$_POST['SAddress'];
	  	$ssec=$_POST['Ssec'];
	  	$sclass=$_POST['Sclass'];
	  	$sroll=$_POST['Sroll'];
        if(empty($sid)==true || empty($sname)==true || empty($sfname)==true || empty($smname)==true || empty($spass)==true || empty($scpass)==true || empty($semail)==true || empty($scontact)==true || empty($stype)==true || empty($sdob)==true || empty($saddress)==true || empty($sadob)==true || empty($ssec)==true || empty($sclass)==true || empty($sroll)==true)
        {
        	echo "fill up this section!";
        }
        else
        {
        	if($spass==$scpass)
           {
              $conn=mysqli_connect('localhost','root','','school');
              $sql="INSERT INTO `userinformation` (`UId`, `UName`, `Father_Name`, `Mother_Name`, `Password`, `Email`, `Contact_No`, `Gender`, `Date_Of_Birth`, `User_Type`, `Joining_Date`, `Admission_Date`, `Address`, `Department`, `Class`, `Section`, `Roll`) VALUES ('{$sid}', '{$sname}', '{$sfname}', '{$smname}', '{$spass}', '{$semail}', '{$scontact}', '{$sgender}', '{$sdob}', '{$stype}', NULL, '{$sadob}', '{$saddress}', NULL, '{$sclass}', '{$ssec}', '{$sroll}')";
              if(mysqli_query($conn, $sql))
               {
			     echo"Successul";
		       }
		         else
		          {
			       echo"Something went wrong";
		          }
	        }
	        else
	        {
	        	echo "Please confirm password.";
	        }
	    }
	  }
?>