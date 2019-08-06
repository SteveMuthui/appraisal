<Html>

<fieldset  bgcolor="cyan" <fieldset style="width: 70%; position: center; height: 110%; padding:10px; margin-left:320px;margin-top:70px;  border-style:solid;"> 

<img src="appraisal.jpg" alt="system logo" width="350" height="120" align="center">
<body bgcolor= "#AAD8E6">
<link rel="stylesheet" type="text/css" href="externalformatting.css">
	</br>
  <?php
		include "conn.php";


		echo "<br>";
            echo "<br>";
			
				if(!empty($_POST['username']) && !empty($_POST['password']))// check if username and password is empty
					{
						$username = $_POST['username'];
						$password = sha1($_POST['password']);
						$checklogin = mysqli_query($myconn,"SELECT * FROM user_credentials WHERE username ='".$username."' AND password = '".$password."'");
                          if(mysqli_num_rows($checklogin) == 1) //check if username user exists
                            {
                              $row = mysqli_fetch_array($checklogin); // retrieve the user from the table
                                echo "Welcome  ".$_POST['username'] ;
                                echo "<br>";
                                echo "<br>";
                                echo "<br>";
                               
                               $checklogin = mysqli_query($myconn,"SELECT * FROM user_credentials WHERE no ='5' AND password = '".$password."'");
                                if(mysqli_num_rows($checklogin) == 1)
                                   {
                                    
                                      echo " <strong><u>About System</u> </strong><br><br><br>";

                                    }
                                else

                                     echo"<strong><u>About System</u></strong></br></br></br>";


                                   echo "<strong> <i> <align= justify>This Employee appraisal system was built to help managers evaluate employee job performance and develop a fair system of pay increases and promotions. Appraisals can help staff members improve performance, and assist the company in devising or reorganizing job functions to better fit the position or the employee. This is an Effective employee appraisal system that incorporates goals to help improve the employer as well as the employee, through the application of appropriate and timely feedback that is crucial during decision making.</strong></i></br></br></br>";

                                   echo " This System consists of the following modules: </br>";

                                   echo "<ul>";
                                        echo " <ul> 1. Dashboards Module</ul></br>";
                                        echo "<ul>  2. Employees Module</ul></br>";
                                        echo "<ul>  3. Qualifications Module </ul></br>";
                                        echo "<ul>  4. Schedules Module </ul></br>";
                                        echo "<ul>  5. Performance Module </ul></br>";
                                        echo "<ul>  6. Users Module</ul></br>";
                                   echo "</ul>";
                                          echo "<br>";
                                          echo "<br>";
                                   echo "<br><a href='graphs.html'>Proceed</a>";
                                         echo "<br>";
                                         echo "<br>";
                                   echo "<br><a href='logout.php'>Logout</a>";
                                         echo "<br>";
                                         echo "<br>";

                            }
                                         else
                                             {
                                               echo "<h1>Error</h1>";
                                               echo "<p>Sorry, your username or password is invalid. Please <a href=\"loginform.html\">click here to try again</a> or contact system administrator.</p>";
                                             }
                                                  }
                                                  else
                                                  {
                                                    echo "Invalid Credentials";
                                                    echo "<br>";
                                                    echo "Please enter correct username and password to continue or contact system administrator for assistance";
                                                    echo "<br>";
                                                    echo "<br>";
                                                   }  
                                                      

       ?>
       </fieldset
  </html>

