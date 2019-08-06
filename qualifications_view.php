<?php
include_once('header.html');
?>

<link rel="stylesheet" type="text/css" href="externalformatting.css">
<body bgcolor= "#AAD8E6">


<?php
require_once('conn.php');//call connet code
//Retrieving records from the database and display in results web page
	$result=mysqli_query($myconn,"SELECT * FROM qualifications");

			echo "<table border=1>";
			echo "<tr>";
			//echo "<th>No</th>";
			echo "<th>Employee ID</th>";
			echo "<th>Academic Level</th>";
			echo "<th>Course Name</th>";
			echo "<th>Certification</th>";
			echo"<th>Drop</th>";
			echo"<th>Update</th>";
			echo "</tr>";

			//fetch and loop the records
			while($row=mysqli_fetch_array($result))
			{
				$no=$row['no'];//specify the primary key
				echo "<tr>";
				//echo "<td>".$row['no']."</td>";
				echo "<td>".$row['employee_id']."</td>";
				echo "<td>".$row['academic_level']."</td>";
				echo "<td>".$row['course_name']."</td>";
				echo "<td>".$row['certification']."</td>";
			echo"<td><a href='qualifications_delete.php?no=$no'>Drop</a></td>";//create link to delete.php file
			echo"<td><a href='qualifications_update.php?no=$no'>Update</a></td>"; //create link to emp_details_update.php file
 			}
			echo "</tr>";
			echo "</table>";
?>

</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav"> 							    
								<a class="nav-item nav-link" align="right" href="qualifications_view.php">Back</a>
								<a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
								<a class="nav-item nav-link" align="right" href="#">Next</a>
 						     </div>
 						 </div>
						</nav>
				</br>
</body>