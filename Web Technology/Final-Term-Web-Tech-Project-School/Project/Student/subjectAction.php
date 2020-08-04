<?php 
	session_start();
	$count = 1;
	$conn = mysqli_connect('localhost', 'root', '', 'school');
	$sql1 = "select * from student where studentid='{$_COOKIE['userid']}'";
	$result1 = mysqli_query($conn, $sql1);
	?><table border="1px" width="100%" bgcolor="#ABB2B9">
		<tr>
			<th>Student ID</th>
			<th>Teacher Name</th>
			<th>Subject</th>
		</tr><?php
	while($user1 = mysqli_fetch_assoc($result1)){
		$sql2 = "select * from subject where subject='{$user1["subject"]}'";
		$result2 = mysqli_query($conn, $sql2);
		$user2 = mysqli_fetch_assoc($result2);
		?>
			<tr>
				<td><?php echo $count++ ?></td>
				<td><?php echo $user2['teachername']; ?></td>
				<td><?php echo $user2['subject']; ?></td>
			</tr>
		<?php
		//echo $user1['subject'];

	}
	?></table><?php

	/*

	while($user1 = mysqli_fetch_assoc($result1)){
		?>
		<tr>
			<td><?php echo $user1["subjectname"]; ?></td>
			<td><?php echo $user1["comments"]; ?></td>
			
		</tr>
		<?php

	}
	*/

?>