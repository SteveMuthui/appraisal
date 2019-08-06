<html>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
		<body bgcolor= "#AAD8E6">
			<h1>Employee Details</h1>
				<?php
					require_once('conn.php');
					//receive data from form
						$firstname=$_POST['firstname'];
						$surname = $_POST["surname"];
						$lastname = $_POST["lastname"];	
						$staff_number = $_POST["staff_number"];
    					$national_id=$_POST['national_id'];
    					$nationality=$_POST['nationality'];
						$gender = $_POST["gender"];
						$dob = $_POST["dob"];	
						$nssf_no = $_POST["nssf_no"];
    					$nhif_no=$_POST['nhif_no'];
    					$homephone=$_POST['homephone'];
						$workphone = $_POST["workphone"];
						$mobilephone = $_POST["mobilephone"];	
						$email = $_POST["email"];
						$selected_val=$_POST['employment'];
						$hiredate = $_POST["hire_date"];
						$job_title = $_POST["job_title"];	
						$otherdetails = $_POST["otherdetails"];

						//Display Employee Details
	

							echo "First Name :" .$firstname."<br>"."<br>";
							echo "Surname :" .$surname."<br>"."<br>";
							echo "Lastname :" .$lastname."<br>"."<br>";
							echo "Staff Number :" .$staff_number."<br>"."<br>";
							echo "National ID :" .$national_id."<br>"."<br>";
							echo "Nationality :" .$nationality."<br>"."<br>";
							echo "Gender :" .$gender."<br>"."<br>";
							echo "Date of Birth :" .$dob."<br>"."<br>";
							echo "NSSF No :" .$nssf_no."<br>"."<br>";
							echo "NHIF No :" .$nhif_no."<br>"."<br>";
							echo "Home Phone :" .$homephone."<br>"."<br>";
							echo "Work Phone :" .$workphone."<br>"."<br>";
							echo "Mobile Phone :" .$mobilephone."<br>"."<br>";
							echo "Email Address :" .$email."<br>"."<br>";
							echo "Employment Status :" .$selected_val."<br>"."<br>";
							echo "Date of Hire :" .$hiredate."<br>"."<br>";
							echo "Job Title :" .$job_title."<br>"."<br>";
							echo "Additional Information:" .$otherdetails."<br>"."<br>";

					$insert="INSERT INTO employee_details(firstname,surname,lastname,employeeid,nationalid,nationality,gender,dob,nssfno,nhifno,homephone,workphone,mobilephone,email,status,hiredate,jobtitle,others)
									VALUES('$firstname','$surname','$lastname','$staff_number','$national_id','$nationality','$gender','$dob','$nssf_no','$nhif_no','$homephone','$workphone','$mobilephone','$email','$selected_val','$hiredate','$job_title','$otherdetails')";

				if(mysqli_query($myconn,$insert))
					{
						echo "Record added successfully<br>";
					}
				else
						echo "Failed. Try again<br>";
					 {
  					    echo"<a href='employeedetails.html?'> Enter New Employee Details </a><br>";
   					    echo "<br>";
   				 echo "<br><a href='logout.php'>Logout</a>";
					 }
				?>
			<hr>
		</body>
</html>