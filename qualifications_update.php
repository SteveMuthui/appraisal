<?php
include_once('header.html');
?>
<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

	<fieldset  align= "left"<fieldset style="width: 96%; position: absolute; height: 125%; padding:5px; margin-left:5px;margin-top:0px">

<?php

	require_once('conn.php');

		$no=$_REQUEST['no'];
		$result=mysqli_query($myconn,"SELECT * FROM qualifications where no='$no'");
		$row=mysqli_fetch_array($result);
		if($row)
			{
						$no=$row['no'];
						$employee_id=$row['employee_id'];
						$academic_level=$row['academic_level'];
						$course_name=$row['course_name'];
						$certification=$row['certification'];
						

			}
				?>

					<form name='qualifications form' action='qual_update.php' method='post'>
					<input type="hidden" name='no' value="<?php echo $no?>"><br>

					EMPLOYEE ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='employee_id' value="<?php echo $employee_id?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					EMPLOYMENT STATUS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name='employment'>
													<option selected="selected"><?php echo $selected_val?></option>
															<option>Fulltime</option>
															<option>Contract</option>
															<option>Intern</option>
															<option>Terminated</option>
															<option>Retired</option>
											</select><br><br>

                    Academic Level:</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
                                    <input type="checkbox" name="option1" value="Masters">Masters<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="option1" value="Bachelors">Bachelors<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="option1" value="Diploma">Diploma<br><br><br>

                    Course Name:</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             
                                <input type="checkbox" name="option3" value="BScIT">Bachelor of Science in Infomation Technology<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option3" value="Bsc Comp Science">Bachelors in Computer Science<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option3" value="BBIT">Bachelor of Business & Infomation Technology<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option3" value="DIT">Diploma in Infomation Technology<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option3" value="DBIT">Diploma of Business & Infomation Technology<br><br>

                    Certification: </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="checkbox" name="option4" value="CEH">Certified Ethical Hacker<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option4" value="CCNA">Cisco Certified Network Associate <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option4" value="CISM">Certified Information Security Manager <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option4" value="CCSP">Certified Cloud Security Professional <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="option4" value="CISA">Certified Information Systems Auditor<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="option4" value="0">None<br><br><br>
                        </br>


					
	
				<input type='submit' value='Send'>
				<input type='reset' value='Cancel'>

		</form>
	</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
							    <a class="nav-item nav-link" align="right" href="graphs.html">Back</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>

</fieldset>