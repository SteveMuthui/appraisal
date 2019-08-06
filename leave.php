<html>
	<link rel="stylesheet" type="text/css" href="style2.css">
		<body>
			<h1 align="left">Leave Details</h1>
				<?php
					require_once('conn.php');
					//receive data from form
						$emp_name=$_POST['name'];
						$staff_number=$_POST['staff_number'];
						$title=$_POST['title'];
						$reason=$_POST['reason'];
						$tel1=$_POST['tel1'];
						$tel2=$_POST['tel2'];
						$period=$_POST['period'];
						$start_date=$_POST['start_date'];
						$end_date=$_POST['end_date'];
						$national_id=$_POST['national_id'];
						$application_date=$_POST['application_date'];
						//$handover_notes=$_POST['handover_notes'];
    					$supervisor=$_POST['svr_name'];
    					$sup_approval=$_POST['approval'];
						$approval1_date = $_POST["approval1_date"];
   					 	$manager=$_POST['mgr_name'];
    					$mgr_approval=$_POST['approval1'];
    					$overall_comments=$_POST['overall_comments'];
    					$approval2_date = $_POST["approval2_date"];
						

						//Display Leave Details
						
							echo "Employee Name :" .$emp_name."<br>"."<br>";
							echo "Staff Number :" .$staff_number."<br>"."<br>";
							echo "Employee Title :" .$title."<br>"."<br>";							
							echo "Leave Reason :" .$reason."<br>"."<br>";
							echo "Telephone 1 :" .$tel1."<br>"."<br>";
							echo "Telephone 2 :" .$tel2."<br>"."<br>";
							echo "Leave Period :" .$period."<br>"."<br>";
							echo "Start Date :" .$start_date."<br>"."<br>";
							echo "End Date :" .$end_date."<br>"."<br>";
							echo "National ID :" .$national_id."<br>"."<br>";
							echo "Application Date :" .$application_date."<br>"."<br>";
							//echo "Handover Notes :" .$handover_notes."<br>"."<br>";
							echo "Supervisor Name :" .$supervisor."<br>"."<br>";
							echo "Supervisor Approval :" .$sup_approval."<br>"."<br>"."<br>";
							echo "Supervisor Approval Date :" .$approval1_date."<br>"."<br>"."<br>";
							echo "Manager Name :" .$manager."<br>"."<br>";
							echo "Manager Approval :" .$mgr_approval."<br>"."<br>";
							echo "Overall Comments :" .$overall_comments."<br>"."<br>";
							echo "Final Approval Date :" .$approval2_date."<br>"."<br>";
    

					$insert="INSERT INTO leave_details(employee_name,title,employee_id,reason,contact1,contact2,days_applied,startdate,end_date,national_id,app_date,supervisor_name,sup_approval_status,sup_approval_date,manager_name,mgr_approval_status,overall_comment,final_approval_date)
									VALUES('$emp_name','$title','$staff_number','$reason','$tel1','$tel2','$period','$start_date','$end_date','$national_id','$application_date','$supervisor','$sup_approval','$approval1_date','$manager','$mgr_approval','$overall_comments','$approval2_date')";

				if(mysqli_query($myconn,$insert))
					{
						echo "Record added successfully<br>";
					}
				else
						echo "Failed. Try again<br>";
					 {
  					    echo"<a href='leave.html?'> Enter Leave Details </a><br>";
   					    echo "<br>";
   				 echo "<br><a href='logout.php'>Logout</a>";
					 }
				?>
			<hr>
		</body>
</html>