<html>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
		<body>
			<h2>Schedules Update</h2>
				<?php
					require_once('conn.php');
					//receive data from form
						$empno=$_POST['empno'];
						$period=$_POST['period'];
						$empname=$_POST['empname'];
						$mon=$_POST['mon'];
						$tue=$_POST['tue'];
						$wed=$_POST['wed'];
						$thur=$_POST['thur'];
						$fri=$_POST['fri'];
						$sat=$_POST['sat'];
						$sun=$_POST['sun'];
					//UPDATE schedule data into the table
						$update="UPDATE work_shifts SET period='$period',empname='$empname',mon='$mon',tue='$tue',wed='$wed',thur='$thur',fri='$fri',sat='$sat',sun='$sun' WHERE empno='$empno'";
					//$update="UPDATE user_credentials SET fullnames='$fullnames',username='$username' WHERE no='$no'";
						if(mysqli_query($myconn,$update))
						{
							echo "Shift Details Updated Successfully";
						}
						else
							echo "Shifts Update Failed. Try again<br>";
						echo "<br>";
						echo "<br><a href='shifts_retrieval.php'> Go back to Shifts</a>";
						echo "<br>";
						echo "<br><a href='logout.php'>Logout</a>";
				?>
		</body>
</html>