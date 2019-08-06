<html>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
		<body bgcolor= "#AAD8E6">
			<h1>Work Schedules</h1>
				<?php
					require_once('conn.php');
					//receive data from form
						$period=$_POST['period'];
						$empname=$_POST['empname'];
						$monday = $_POST["shift1"];
						$tuesday = $_POST["shift2"];	
						$wednesday = $_POST["shift3"];
    					$thursday=$_POST['shift4'];
    					$friday=$_POST['shift5'];
						$saturday = $_POST["shift6"];
						$sunday = $_POST["shift7"];

						//Display Shifts Details							
							echo "Schedule Period :" .$period."<br>"."<br>";
							echo "Employee Name :" .$empname."<br>"."<br>";
							echo "Monday :" .$monday."<br>"."<br>";
							echo "Tuesday :" .$tuesday."<br>"."<br>";
							echo "Wednesday :" .$wednesday."<br>"."<br>";
							echo "Thursday :" .$thursday."<br>"."<br>";
							echo "Friday :" .$friday."<br>"."<br>";
							echo "Saturday :" .$saturday."<br>"."<br>";
							echo "Sunday :" .$sunday."<br>"."<br>";

					$insert="INSERT INTO work_shifts(period,empname,mon,tue,wed,thur,fri,sat,sun)
									VALUES('$period','$empname','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday')";

				if(mysqli_query($myconn,$insert))
					{
						echo "Record added successfully<br>";
					}
				else
						echo "Failed. Try again<br>";
					 {
  					    echo"<a href='shifts_retrieval.php?'> View Shifts </a><br>";
   					    echo "<br>";
   					    echo"<a href='schedule.html?'> New Shifts </a><br>";
   					    echo "<br>";
   				 echo "<br><a href='logout.php'>Logout</a>";
					 }
				?>
			<hr>
		</body>
</html>