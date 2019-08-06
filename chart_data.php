<?php

require_once('conn.php');//call connet code
//Retrieving records from the database and display in results web page
	$result=mysqli_query($myconn,"SELECT * FROM employee_details");


$jsonArray =array();
if ($result->num_rows>0)
{
while($row=$result->fetch_assoc()){
    $jsonArrayItem= array();
    $jsonArrayItem['label']=$row['firstname'];
    $jsonArrayItem['value']=$row['nhifno'];

    array_push($jsonArray, $jsonArrayItem);
}

}
//Closing the connection to DB
$myconn->close();
//set the response content type as JSON
header('Content-type: application/json');
//output the return value of json encode using the echo function.
echo json_encode($jsonArray);

?>