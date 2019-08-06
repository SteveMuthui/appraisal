<?php
include_once('header.html');
?>

<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

	<fieldset  align= "left"<fieldset style="width: 96%; position: absolute; height: 125%; padding:5px; margin-left:5px;margin-top:0px">

<?php

	require_once('conn.php');

		$empno=$_REQUEST['empno'];
		$result=mysqli_query($myconn,"SELECT * FROM work_shifts");
		$row=mysqli_fetch_array($result);
		if($row)
			{
						$empno=$row['empno'];
						$period=$row['coverage'];
						$empname=$row['empname'];
						$mon=$row['mon'];
						$tue=$row['tue'];
						$wed=$row['wed'];
						$thur=$row['thur'];
						$fri=$row['fri'];
						$sat=$row['sat'];
						$sun=$row['sun'];


			}
				?>

					<form name='schedules_details form' action='schedule_update.php' method='post'>
					<input type="hidden" name='empno' value="<?php echo $empno?>"><br>

					SCHEDULE PERIOD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='coverage' value="<?php echo $period?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					EMPLOYEE NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='empname' value="<?php echo $empname?>"> </br></br></br> 
					

								Monday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="mon">
															<option selected="selected"><?php echo $mon?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Tueday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="tue">
															<option selected="selected"><?php echo $tue?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>																						
								Wednesday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="wed">
															<option selected="selected"><?php echo $wed?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Thursday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="thur">
															<option selected="selected"><?php echo $thur?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fri">
															<option selected="selected"><?php echo $fri?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Saturday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sat">
															<option selected="selected"><?php echo $sat?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="sun">
															<option selected="selected"><?php echo $sun?></option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>	 
	
	
				<input type='submit' value='Send'>
				<input type='reset' value='Cancel'>

		</form>
	</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 
                                <a class="nav-item nav-link" align="right" href="shifts_retrieval.php">Back to Schedule</a>							    
								<a class="nav-item nav-link" align="right" href="graphs.html">Home</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>

</fieldset>