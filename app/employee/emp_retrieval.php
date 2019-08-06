<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

	<nav class="navbar navbar-inverse bg-primary">
  							<!-- Navbar content -->
						</nav>
						<nav class="navbar navbar-light" style="background-color: blue;">
 							 <!-- Navbar content -->
						
						<nav align="left" class="navbar navbar-toggleable-md navbar-light bg-faded">
                                                          
                                 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                   <div class="navbar-nav">
                                       <a class="nav-item nav-link " href="graphs.html">Home</a>
                                       <a class="nav-item nav-link" href="graphs.html">Dashboards</a>
                                       <a class="nav-item nav-link" href="employeedetails.html">Employees</a>
                                       <a class="nav-item nav-link" href="qualifications.html">Qualifications</a>
                                       <a class="nav-item nav-link" href="schedule.html">Schedule</a>
                                       <a class="nav-item nav-link" href="performance.html">Performance</a>
                                       <a class="nav-item nav-link" href="leave.html">Leave Manangement</a>
                                       <a class="nav-item nav-link" href="users_view.php">Users</a>
                                       
                                   </div>
                                 </div>
                           </nav>
                         </nav>
                        </br>

<?php
require_once('conn.php');//call connet code
//Retrieving records from the database and display in results web page
	$result=mysqli_query($myconn,"SELECT * FROM employee_details");

			echo "<table border=1>";
			echo "<tr>";
			echo "<th>No</th>";
			echo "<th>First Name</th>";
			echo "<th>Surname</th>";
			echo "<th>Last Name</th>";
			echo "<th>Staff Number</th>";
			echo "<th>National ID</th>";
			echo "<th>Nationality</th>";
			echo "<th>Gender</th>";
			echo "<th>Date of Birth</th>";
			echo "<th>NSSF No:</th>";
			echo "<th>NHIF No:</th>";
			echo "<th>Work Phone</th>";
			echo "<th>Home Phone</th>";
			echo "<th>Mobile Phone</th>";
			echo "<th>Email Addr</th>";
			echo "<th>Hire Date</th>";
			echo "<th>Employment</th>";
			echo "<th>Job Title</th>";
			echo "<th>Other Details</th>";
			echo"<th>Delete record</th>";
			echo"<th>Update record</th>";
			echo "</tr>";

			//fetch and loop the records
			while($row=mysqli_fetch_array($result))
			{
				$no=$row['no'];//specify the primary key
				echo "<tr>";
				echo "<td>".$row['no']."</td>";
				echo "<td>".$row['firstname']."</td>";
				echo "<td>".$row['surname']."</td>";
				echo "<td>".$row['lastname']."</td>";
				echo "<td>".$row['employeeid']."</td>";
				echo "<td>".$row['nationalid']."</td>";
				echo "<td>".$row['nationality']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['dob']."</td>";
				echo "<td>".$row['nssfno']."</td>";
				echo "<td>".$row['nhifno']."</td>";
				echo "<td>".$row['homephone']."</td>";
				echo "<td>".$row['workphone']."</td>";
				echo "<td>".$row['mobilephone']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['status']."</td>";
				echo "<td>".$row['hiredate']."</td>";
				echo "<td>".$row['jobtitle']."</td>";
				echo "<td>".$row['others']."</td>";
			echo"<td><a href='delete.php?no=$no'>Drop</a></td>";//create link to delete.php file
			echo"<td><a href='emp_details_update.php?no=$no'>Update</a></td>"; 
 			}
			echo "</tr>";
			echo "</table>";
?>

</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
								<a class="nav-item nav-link" align="right" href="employee.html">Back</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
								<a class="nav-item nav-link" align="right" href="users_view.php">Next</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>