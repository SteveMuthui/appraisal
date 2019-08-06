<?php
include_once('header.html');
?>

<body>
 
<?php
require_once('header.html');
require_once('conn.php');//call connet code
//Retrieving records from the database and display in results web page
$result=mysqli_query($myconn,"SELECT * FROM user_credentials");

			echo "<table border=1>";
			echo "<tr>";
			echo "<th>Fullnames</th>";
			echo "<th>Username</th>";
			echo"<th>Delete</th>";
			echo"<th>Edit</th>";
			echo "</tr>";


				//fetch and loop the records
					while($row=mysqli_fetch_array($result))
						{
							$id=$row['no'];//specify the primary key
							echo "<tr>";
							echo "<td>".$row['fullnames']."</td>";
							echo "<td>".$row['username']."</td>";
							echo"<td><a href='delete_users.php?no=$id'>Delete</a></td>";//create link to delete.php file 
							echo"<td><a href='user_update_form.php?no=$id'>Edit</a></td>";
 						}				
 										
							echo "</tr>";
			echo "</table>";
			echo "<br><a href='create_users.html'>New User</a>";
			echo "</br>";
			echo "</br>";
			echo "<br><a href='graphs.html'>Home</a>";
			echo "</br>";
			echo "</br>";
			echo "<br><a href='shifts_retrieval.php'>Next</a>";
			echo "</br>";
			echo "</br>";
			echo "<br><a href='logout.php'>Logout</a>";



?>
</body>