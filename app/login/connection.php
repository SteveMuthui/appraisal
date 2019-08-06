<?php
$host= "localhost";
$dataB= "resDb";
$user= "root";
$pass= "";
$connection= mysqli_connect($host, $user, $pass,$dataB); 

if (mysqli_connect_errno())
  {
  echo "Failed to connect to DB: " . mysqli_connect_error();
  } 

  
?>