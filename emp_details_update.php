<?php
include_once('header.html');
?>

<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

	<fieldset  align= "left"<fieldset style="width: 96%; position: absolute; height: 125%; padding:5px; margin-left:5px;margin-top:0px">

<?php

	require_once('conn.php');

		$no=$_REQUEST['no'];
		$result=mysqli_query($myconn,"SELECT * FROM employee_details where no='$no'");
		$row=mysqli_fetch_array($result);
		if($row)
			{
						$no=$row['no'];
						$firstname=$row['firstname'];
						$surname=$row['surname'];
						$lastname=$row['lastname'];
						$staff_number=$row['employeeid'];
						$national_id=$row['nationalid'];
						$nationality=$row['nationality'];
						$gender=$row['gender'];
						$dob=$row['dob'];
						$nssf_no=$row['nssfno'];
						$nhif_no=$row['nhifno'];
						$workphone=$row['workphone'];
						$homephone=$row['homephone'];
    					$mobilephone=$row["mobilephone"];
    					$email=$row['email'];
    					$hiredate=$row['hiredate'];
						$selected_val = $row["status"];
   					 	$job_title=$row['jobtitle'];
    					


			}
				?>

					<form name='employee_details form' action='emp_update.php' method='post'>
					<input type="hidden" name='no' value="<?php echo $no?>"><br>

					FIRST NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='firstname' value="<?php echo $firstname?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					SURNAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='surname' value="<?php echo $surname?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					LAST NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='lastname' value="<?php echo $lastname?>"><br><br>
					STAFF NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='10' name='staff_number' value="<?php echo $staff_number?>"><br><br>
					NATIONAL ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='10' name='national_id' value="<?php echo $national_id?>"><br><br>
					NATIONALITY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='6' name='nationality' value="<?php echo $nationality?>"><br><br>
					GENDER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<input type="radio" name="type" value="Male" <?php if ($gender == 'Male') echo 'checked="checked"'; ?>" /> Male
								<input type="radio" name="type" value="Female" <?php if ($gender == 'Female') echo 'checked="checked"'; ?>" /> Female<br/><br/>


					DATE OF BIRTH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='date' size='30' name='dob' value="<?php echo $dob?>" ><br><br>					
					NSSF No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='nssf_no' value="<?php echo $nssf_no?>"><br><br>
					NHIF No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='nhif_no' value="<?php echo $nhif_no?>"><br><br>
	 

					WORK PHONE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='20' name='workphone' value="<?php echo $workphone?>"><br><br>
					HOME PHONE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='20' name='homephone' value="<?php echo $homephone?>"><br><br>
					MOBILE PHONE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='20' name='mobilephone' value="<?php echo $mobilephone?>"><br><br>
					EMAIL ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='email' size='30' name='email' value="<?php echo $email?>"><br><br>
					DATE OF HIRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='date' size='30' name='hire_date' value="<?php echo $hiredate?>"><br><br>
					EMPLOYMENT STATUS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name='employment'>
													<option selected="selected"><?php echo $selected_val?></option>
															<option>Fulltime</option>
															<option>Contract</option>
															<option>Intern</option>
															<option>Terminated</option>
															<option>Retired</option>
											</select><br><br>

					JOB TITLE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type='text' size='40' name='job_title' value="<?php echo $job_title?>"><br><br>
					
	
	
				<input type='submit' value='Send'>
				<input type='reset' value='Cancel'>

		</form>
	</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
							    <a class="nav-item nav-link" align="right" href="employeedetails.php">Back</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>

</fieldset>