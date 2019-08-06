<html>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
		<body>
			<h1>Qualifications Details</h1>
				<?php
					require_once('conn.php');
					//receive data from form
						$staff_number=$_POST['staff_number'];
						$selected_val_1 = $_POST["option1"];	
						$selected_val_3 = $_POST["option3"];
						$selected_val_4 = $_POST["option4"];
    					

						//Display Qualifications Details
	

							echo "Employee ID :" .$staff_number."<br>"."<br>";
						
							if(isset($_POST['submit'])){$selected_val_1 = $_POST["option1"]; 
    													} // Storing Selected Value In Variable
							echo "Academic Level :" .$selected_val_1."<br>"."<br>";
							{
							if(isset($_POST['submit'])){$selected_val_3 = $_POST["option3"]; 
    													} // Storing Selected Value In Variable
							echo "Course Name :" .$selected_val_3."<br>"."<br>";
							}
							{
							if(isset($_POST['submit'])){$selected_val_4 = $_POST["option4"]; 
    													} // Storing Selected Value In Variable
							echo "Certification(s) :" .$selected_val_4."<br>"."<br>";
							}


					$insert="INSERT INTO qualifications(employee_id,academic_level,course_name,certification)
									VALUES('$staff_number','$selected_val_1','$selected_val_3','$selected_val_4')";

				if(mysqli_query($myconn,$insert))

				

					{
						echo "Record added successfully<br>";
					}
				else
						echo "Failed. Try again<br>";

						{
							echo "<br>";
							echo "<br>";
						}

					 {
  					    echo"<a href='qualifications.html?'> Enter New Details </a><br>";
   					    echo "<br>";
   				 echo "<br><a href='logout.php'>Logout</a>";
					 }

					 echo "<br>";
					 echo "<br>";
					 echo "<br>";
					 echo "<br>";
				?>
			<hr>
		</body>
</html>