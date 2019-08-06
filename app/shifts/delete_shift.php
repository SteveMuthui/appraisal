<link rel="stylesheet" type="text/css" href="externalformatting.css">
	<body bgcolor= "#AAD8E6">
		<?php
		require_once('conn.php');
			$empno=$_REQUEST['empno'];  //receive the ID of the record to delete through the link
				if($empno!=null)
					{
						$del=mysqli_query($myconn,"DELETE FROM work_shifts WHERE empno='$empno'");
							if($del)
								{
									echo"User Shifts Deleted Successfully!!";
								}
							else
								{
									echo "User shifts not deleted!!";
								}
					}
						echo "<a href='shifts_retrieval.php'> Go back to schedule</a>";
		?>
