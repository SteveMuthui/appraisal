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
	$result=mysqli_query($myconn,"SELECT * FROM work_shifts");

			echo "<table border=1>";
			echo "<tr>";
			//echo "<th>No</th>";
			echo "<th>Shifts Period</th>";
			echo "<th>EmpName</th>";
			echo "<th>Monday</th>";
			echo "<th>Tuesday</th>";
			echo "<th>Wednesday</th>";
			echo "<th>Thursday</th>";
			echo "<th>Friday</th>";
			echo "<th>Saturday</th>";
			echo "<th>Sunday</th>";
			echo"<th>Drop</th>";
			echo"<th>Update</th>";
			echo "</tr>";

			//fetch and loop the records
			while($row=mysqli_fetch_array($result))
			{
				$empno=$row['empno'];//specify the primary key
				echo "<tr>";
				//echo "<td>".$row['#']."</td>";
				echo "<td>".$row['period']."</td>";
				echo "<td>".$row['empname']."</td>";
				echo "<td>".$row['mon']."</td>";
				echo "<td>".$row['tue']."</td>";
				echo "<td>".$row['wed']."</td>";
				echo "<td>".$row['thur']."</td>";
				echo "<td>".$row['fri']."</td>";
				echo "<td>".$row['sat']."</td>";
				echo "<td>".$row['sun']."</td>";
	
			echo"<td><a href='delete_shift.php?empno=$empno'>Drop</a></td>";//create link to delete.php file
			echo"<td><a href='update_schedule.php?empno=$empno'>Update</a></td>"; 
 			}
			echo "</tr>";
			echo "</table>";
?>

</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
								<a class="nav-item nav-link" align="right" href="home.html">Back to home</a>
								<a class="nav-item nav-link" align="right" href="shifts_retrieval.php">Back to schedule</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>