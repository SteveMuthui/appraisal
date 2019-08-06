<?php
include_once('header.html');
?>

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
						$homephone=$_POST['homephone'];
						$workphone=$_POST['workphone'];
    					$mobilephone=$_POST["mobilephone"];
						$email=$_POST['email'];
						$selected_val = $_POST["employment"];
    					$hiredate=$_POST['hire_date'];
   					 	$job_title=$_POST['job_title'];

 
	//UPDATE data into table
	$update="UPDATE employee_details SET firstname='$firstname',surname='$surname',lastname='$lastname',employeeid='$staff_number',nationalid='$national_id',nationality='$nationality',gender='$gender',dob='$dob',nssfno='$nssf_no',nhifno='$nhif_no',homephone='$homephone',workphone='$workphone',mobilephone='$mobilephone',email='$email',status='$selected_val',hiredate='$hiredate',jobtitle='$job_title' WHERE no='$no'";
	

	if(mysqli_query($myconn,$update))
	{
		echo "Record updated successfully";
	}
else
	echo "Update Failed. Try again<br>";
	echo "<br>";
	echo "<br>";
	echo "<br><a href='emp_retrieval.php'> Go back to records list</a>";
?>
</body>
