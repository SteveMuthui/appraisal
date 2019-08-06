<?php
include_once('header.html');
?>


<HTML>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
				
					<body bgcolor= "#AAD8E6">
						
						</br>

                        <fieldset  align= "left"<fieldset style="width: 96%; position: center; height: 120%; padding:15px; margin-left:10px;margin-top:03px">

						<h3>Qualifications Form</h3></br></br>					
						
						<form name='qualificationsform' action="qualifications.php" method='post'>
									
									Staff Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='staff_number'><br><br>
						
					     
								<br>
								<h3>Qualifications Information</h3><br>
					
														 														 
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
						      
						  
								<input type='submit' value='Submit'>
								<input type='reset' value='Cancel'> 
						
					</form>
					</fieldset>
					</br>
					<nav class="navbar navbar-inverse bg-inverse">
							<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                   <div class="navbar-nav">
							 <a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
							 <a class="nav-item nav-link" align="right" href="graphs.html">Home</a>
 						</div>
						</nav>
						
				</br></br>

			<h5 align="center"> Powered by Wastex</h5>
		</body>
</HTML>
