<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/shift.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare shift object
$shift = new Shift($db);
 
// set ID property of record to read
$shift->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of shift to be edited
$shift->readOne();
 
if($shift->name!=null){
    // create array
    $shiftArr = array(
        "id" =>  $shift->id,
        "name" => $shift->name,
        "duration" => $shift->duration,
        "userId" => $shift->userId,
        "username" => $shift->username
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($shiftArr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user shift does not exist
    echo json_encode(array("message" => "shift does not exist."));
}
?>