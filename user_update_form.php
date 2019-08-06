<?php
include_once('header.html');
?>

<body bgcolor="#AAD8E6">
	<fieldset  bgcolor="cyan" align= "center"<fieldset style="width: 50%; position: center; height: 50%; padding:10px; margin-left:320px;margin-top:70px;  border-style: "> 
		<?php
			require_once('conn.php');
				$no=$_REQUEST['no'];
				$result=mysqli_query($myconn,"SELECT * FROM user_credentials where no='$no'");
				$row=mysqli_fetch_array($result);
			if($row)
				{
				//copy the record values to variable
					$no=$row['no'];
					$fullnames=$row['fullnames'];
					$username=$row['username'];
					$password=$row['password'];
				}
		?>
		<body>
			<link rel="stylesheet" type="text/css" href="externalformatting.css">
			<h2 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update User Details</h2>
			<form name='userupdateform' action='users_update.php' method='post'>
				<input type="hidden" name='no' value="<?php echo $no?>"><br><br>
				Full Names: <input type='text' name='fullnames' value="<?php echo $fullnames?>" readonly><br><br>
				Username  : <input type='text' name='username' value="<?php echo $username?>"><br><br>
				Password  : <input type='password' name='password' value="<?php echo $password?>"><br><br>
				<input type='submit' value='update'>
				</br>
				</br>
				<a href="logout.php">Logout</a>
				<a href="users_view.php">Back</a>
			</form>
	</fieldset>
</body>
