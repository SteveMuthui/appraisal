<?php
	include "conn.php"; // call connection code to db server
		// receive user details form the form
			$fullnames=$_POST['fullnames'];
			$username = $_POST['username'];
			$user_id = $_POST['user_id'];
			$password = sha1($_POST['password']);

			//check if user name already exists
 			//$checkusername = mysqli_query("SELECT * FROM user_credentials WHERE username = '".$username."'");
			// if user name exist generate error message
			// if(mysqli_num_rows($checkusername) == 1)
  				//{
    			// echo "<h1>Error</h1>";
    			 //echo "<p>Sorry, that username already exists. Please go back and choose another user name.</p>";
  				// }
  			 //else
				{
				// insert user details into the table users
				$INSERT= "INSERT INTO user_credentials (fullnames, username, userid, password)
												VALUES('$fullnames','$username','$user_id','$password')";
					
				}
?>


