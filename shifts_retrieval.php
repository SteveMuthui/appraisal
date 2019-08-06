<?php
include_once('header.html');
?>

<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">

<?php
require_once('conn.php');//call connet code
//Retrieving records from the database and display in results web page
	$result=mysqli_query($myconn,"SELECT * FROM work_shifts");

			echo "<table border=1>";
			echo "<tr>";
			//echo "<th>No</th>";
			echo "<th>Timestamp</th>";
			echo "<th>Employee Name</th>";
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
				//echo "<td>".$row['no']."</td>";
				echo "<td>".$row['coverage']."</td>";
				echo "<td>".$row['empname']."</td>";
				echo "<td>".$row['mon']."</td>";
				echo "<td>".$row['tue']."</td>";
				echo "<td>".$row['wed']."</td>";
				echo "<td>".$row['thur']."</td>";
				echo "<td>".$row['fri']."</td>";
				echo "<td>".$row['sat']."</td>";
				echo "<td>".$row['sun']."</td>";
			echo"<td><a href='delete_shift.php?empno=$empno'>Drop</a></td>";//create link to delete.php file
			echo"<td><a href='update_schedule.php?empno=$empno'>Update</a></td>"; //create link to emp_details_update.php file
 			}
			echo "</tr>";
			echo "</table>";
?>

</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
								<a class="nav-item nav-link" align="right" href="graphs.html">Back</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
								<a class="nav-item nav-link" align="right" href="users_view.php">Next</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>