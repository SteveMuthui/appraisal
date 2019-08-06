<?php
	include "conn.php"; // call connection code to db server
		// receive user details form the form
			$fullnames=$_POST['fullnames'];
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			//check if user name already exists
 				$checkusername = mysqli_query($myconn, "SELECT * FROM user_credentials WHERE username = '".$username."'");
			// if user name exist generate error message
				if(mysqli_num_rows($checkusername) == 1)
  					{
    				 	echo "<h1>Error</h1>";
    				 	echo "<p>Sorry, that username already exists. Please go back and choose another user name.</p>";
					  }
					  
  			 	else
					{
				// insert user details into the table user_credentials
						$registerquery = mysqli_query($myconn, "INSERT INTO user_credentials (fullnames, username, password)
												VALUES('$fullnames','$username','$password')");
						if($registerquery) //confirm the user details were inserted into table
							{
								echo "<h1>Success</h1>";
								echo "<p>Your User account was successfully created.
								Please <a href=\"loginform.html\">click here to login</a>.</p>";
								echo "</br>";
								echo "<a href=\"create_users.html\">New User</a>.</p>";
								echo "</br>";
								echo "<a href=\"users_view.php\">View Users</a>.</p>";
							}
						else
					{
						echo "<h1>Error</h1>";
						echo "<p>Sorry, your registration failed. Please go back and try again.</p>";
					}
				}
?>


