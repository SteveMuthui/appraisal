<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/shift.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare shift object
$shift = new Shift($db);
 
// get id of shift to be edited
$data = json_decode(file_get_contents("php://input"));
 
// set ID property of shift to be edited
$shift->id = $data->id;
 
// set shift property values
$shift->name = $data->name;
$shift->duration = $data->duration;
$shift->userId = $data->userId;
 
// update the shift
if($shift->update()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "Shift was updated."));
}
 
// if unable to update the shift, tell the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Unable to update shift."));
}
?>