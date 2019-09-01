<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/leave.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare leave object
$leave = new Leave($db);
 
// get id of leave to be edited
$data = json_decode(file_get_contents("php://input"));
 
// set ID property of leave to be edited
$leave->id = $data->id;
 
// set leave property values
$leave->reason = $data->reason;
$leave->startDate = $data->startDate;
$leave->endDate = $data->endDate;
$leave->userId = $data->userId;
 
// update the leave
if($leave->update()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "leave was updated."));
}
 
// if unable to update the leave, tell the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Unable to update leave."));
}
?>