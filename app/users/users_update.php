<html>
	<link rel="stylesheet" type="text/css" href="externalformatting.css">
		<body>
			<h2>User Update Details</h2>
				<?php
					require_once('conn.php');
					//receive data from form
						$no=$_POST['no'];
						$fullnames=$_POST['fullnames'];
						$username=$_POST['username'];
						$password=$_POST['password'];
					//UPDATE user data into the table
						$update="UPDATE user_credentials SET fullnames='$fullnames',username='$username',password='$password' WHERE no='$no'";
					//$update="UPDATE user_credentials SET fullnames='$fullnames',username='$username' WHERE no='$no'";
						if(mysqli_query($myconn,$update))
						{
							echo "User Details Updated Successfully";
						}
						else
							echo "User Update Failed. Try again<br>";
						echo "<br>";
						echo "<br><a href='users_view.php'> Go back to Users list</a>";
						echo "<br>";
						echo "<br><a href='logout.php'>Logout</a>";
				?>
		</body>
</html>