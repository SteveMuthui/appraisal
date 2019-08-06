<link rel="stylesheet" type="text/css" href="externalformatting.css">
	<body bgcolor= "#AAD8E6">
		<?php
		include_once('header.html');
		require_once('conn.php');
			$no=$_REQUEST['no'];  //receive the ID of the record to delete through the link
				if($no!=null)
					{
						$del=mysqli_query($myconn,"DELETE FROM user_credentials WHERE no='$no'");
							if($del)
								{
									echo"User Deleted Successfully!!";
								}
							else
								{
									echo "User Not Deleted!!";
								}
					}
						echo "<a href='users_view.php'> Go back to user records list</a>";
		?>
