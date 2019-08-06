<?php
     include "conn.php";
      echo "<h1>Login Page</h1>";
          if(!empty($_POST['username']) && !empty($_POST['password']))// check if username and password is empty
       {
         $username = $_POST['username'];
         $password = md5($_POST['password']);
         $checklogin = mysqli_query($myconn,"SELECT * FROM user_credentials WHERE username ='".$username."' AND password = '".$password."'");
             if(mysqli_num_rows($checklogin) == 1) //check if username is user exists
               {
               $row = mysqli_fetch_array($checklogin); // retrieve the user from the table
                    echo "Welcome ". $_POST['username'] ;
                    
               }
               else
               {
                    echo "<h1>Error</h1>";
                    echo "<p>Sorry, your username or password is invalid. Please <a href=\"loginform.html\">click here to try again</a>.</p>";
               }
               }
              else
                    echo "Please enter the username and password to continue..";
?>