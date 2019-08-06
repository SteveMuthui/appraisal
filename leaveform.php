<?php
include_once('header.html');
?>

<HTML>
<link rel="stylesheet" type="text/css" href="externalformatting.css">

				<fieldset  align="left">
					<body bgcolor= "#AAD8E6">

						<h1 align="left"><u>EMPLOYEE LEAVE FORM</u> </h1>
						<p><i><b>LEAVE REQUIREMENT: This document is to be used for all forms of leave application and all sections must be dully filled, and approved. All leave applications must be accompanied with handover notes indicating current assignments, and those whom they have been assigned to</i></b>.</p>
						
						<form name='leaveform' action="leave.php" method='post'>

								<h3>Personal Information</h3>
								</br></br>
								
									Employee Names:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='60' name='name'></br></br>	
									Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' size='60' name='title'><br></br>
									Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='60' name='dept'><br></br>
									Staff Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='staff_number'><br><br>
									Reason for leave: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="60" rows="3" name="reason"></textarea></br></br>
									Contact Tel 1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='tel1'>
									        Tel 2:  <input type='number' size='30' name='tel2'><br><br>
									
									Days Applied for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='period'><br><br>
									Leave Start Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' size='50' name='start_date'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									Leave End Date:<input type='date' size='50' name='end_date'><br><br>																	  
									National ID/PP No:&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='national_id'><br><br>	
									Application Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='date' size='30' name='application_date'><br><br>
									Handover Notes:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' name='handover_notes'><br><br>
																					
							</fieldset>
						<fieldset  align="left">
								<h3>Department Section: Approvals</h3></br>							  								
								 <h4 align="left">1<sup>st</sup> Line Sup/Mgr</h4>								  
									Mgr Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='60' name='svr_name'>&nbsp;&nbsp;&nbsp;&nbsp;	
									Approval Status: <select name="approval">
																	<option>Choose one</option>
																	<option>Approved</option>
																	<option>Not Approved </option>
														    </select><tr><br><br> 
								Comment on Work Status: </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <textarea cols="60" rows="3" name="mgr1_comments"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Approval Date:    <input type='date' size='30' name='approval1_date'></br></br>
								
								
								<h4 align="left">2<sup>nd</sup> Line Sup/Mgr</h4>
								
									Mgr Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='60' name='mgr_name'>&nbsp;&nbsp;&nbsp;&nbsp;	
									Approval Status:		<select name="approval1">
																	<option>Choose one</option>
																	<option>Approved</option>
																	<option>Not Approved </option>
														</select><tr><br><br> 
								Overall Comment: </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="60" rows="3" name="overall_comments"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;
								Approval Date:    <input type='date' size='30' name='approval2_date'></br></br>
																	   	

								</br>								
								<input type='submit' value='Send'>
								<input type='reset' value='Cancel'> 
						</fieldset>
					</form>
					</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav">
 							    <a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
								<a class="nav-item nav-link" align="right" href="graphs.html"> Back </a>
 						     </div>
						</nav>
				</br></br>
			<h5 align="center"> Powered by Wastex</h5>
		</body>
	<fieldset>
</HTML>
