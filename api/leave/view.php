<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/leave.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare leave object
$leave = new Leave($db);
 
// set ID property of record to read
$leave->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of leave to be edited
$leave->readOne();
 
if($leave->name!=null){
    // create array
    $leaveArr = array(
        "id" =>  $leave->id,
        "reason" => $leave->reason,
        "startDate" => $leave->startDate,
        "endDate" => $leave->endDate,
        "userId" => $leave->userId,
        "username" => $leave->username
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($leaveArr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user leave does not exist
    echo json_encode(array("message" => "leave does not exist."));
}
?>