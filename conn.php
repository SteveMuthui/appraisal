<?php
		$host="localhost";
		$user="root";
		$pwd="";
		$db="appraisal";

			$myconn=mysqli_connect($host,$user,$pwd);
			//if(!$myconn)
				//{
				//	echo "Connection to the database server failed";
			//	}
			//else
				//	echo "Connection to the database server established<br>";

			//select the database
					$mydb=mysqli_select_db($myconn,$db);
					//	if(!$mydb)
						//	{
							//	echo "Database not selected<br>";
						//	}
					//	else
					//			echo "Database selected<br>";
?>