<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

	<h2>Employee Details</h2>
	<?php
	require_once('conn.php');
	//receive data from form
						$no=$_POST['no'];
						$firstname=$_POST['firstname'];
						$surname=$_POST['surname'];
						$lastname=$_POST['lastname'];	
						$staff_number=$_POST['staff_number'];
						$national_id=$_POST['national_id'];
						$nationality=$_POST['nationality'];
						$gender=$_POST['type'];
						$dob=$_POST['dob'];
						$nssf_no=$_POST['nssf_no'];
						$nhif_no=$_POST['nhif_no'];
						$workphone=$_POST['workphone'];
						$homephone=$_POST['homephone'];
    					$mobilephone=$_POST["mobilephone"];
    					//$selected_val = $_POST["notification"];
    					$email=$_POST['email'];
    					$hiredate=$_POST['hire_date'];
						$selected_val = $_POST["employment"];
   					 	$job_title=$_POST['job_title'];
    					$otherdetails=$_POST['otherdetails'];

 
	//UPDATE data into table
	$update="UPDATE employee_details SET firstname='$firstname',surname='$surname',lastname='$lastname',employeeid='$staff_number',nationalid='$national_id',nationality='$nationality',gender='$gender',dob='$dob',nssfno='$nssf_no',nhif='$nhif_no',workphone='$workphone',homephone='$homephone',mobilephone='$mobilephone,email='$email',hiredate='$hiredate',jobtitle='$job_title',others='$otherdetails'' WHERE no='$no'";
	

	if(mysqli_query($myconn,$update))
	{
		echo "Record updated successfully";
	}
else
	echo "Update Failed. Try again<br>";
	echo "<br><a href='emp_retrieval.php'> Go back to records list</a>";
?>
</body>
