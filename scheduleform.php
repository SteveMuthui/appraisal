<?php
include_once('header.html');
?>

<HTML>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
				<fieldset  align="left">
					<body bgcolor= "#AAD8E6">
						<h1><u>Work Shifts Scheduling</u></h1>
						<form name='scheduledetailsform' action="schedule.php" method='post'>
			
							Employee Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='empname'><br><br>
							Schedule Period:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='coverage'><br><br>	
										      											 
				</fieldset>
					<fieldset  align="left">
								<h3>Shifts</h3>
							</br>
							</br>

								Monday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="shift1">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Tueday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift2">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>																						
								Wednesday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift3">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Thursday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift4">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Friday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift5">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Saturday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift6">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>											
								Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="shift7">
															<option>Choose one</option>
															<option>Morning</option>
															<option>Afternoon</option>
															<option>Night Shift</option>
															<option>Off Duty</option>
															<option>Leave</option>
											</select><tr><br><br>	 
									
								<input type='submit' value='Submit'>
								<input type='reset' value='Cancel'> 
						</fieldset>
					</form>
				</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav">
 							    <a class="nav-item nav-link" align="right" href="shifts_retrieval.php">view Schedule</a>
								<a class="nav-item nav-link" align="right" href="leaveform.php"> Next </a>
								<a class="nav-item nav-link" align="right" href="graphs.html">Home</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
 						     </div>
						</nav>
			<h5 align="center"> Powered by Wastex</h5>
		</body>
	<fieldset>
</HTML>
