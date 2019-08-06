<?php
 	require_once('conn.php');
		$no=$_REQUEST['no'];  //receive the ID of the record to delete through the link
			if($no!=null)
				{
					$del=mysqli_query($myconn,"DELETE FROM employee_details WHERE no='$no'");
					if($del)
						{
							echo"Record Successfully Deleted";
						}
					else
						{
							echo "Ooops! Record Not Deleted";
						}
				}
					echo "<a href='emp_retrieval.php'> Go back to records list</a>";
?>
