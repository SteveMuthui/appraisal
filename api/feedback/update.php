<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/feedback.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare feedback object
$feedback = new Feedback($db);
 
// get id of feedback to be edited
$data = json_decode(file_get_contents("php://input"));
 
// set ID property of feedback to be edited
$feedback->id = $data->id;
 
// set feedback property values
$feedback->period = $data->period;
$feedback->rating = $data->rating;
$feedback->comments = $data->comments;
$feedback->clients = $data->clients;
$feedback->userId = $data->userId;
 
// update the feedback
if($feedback->update()){
 
    // set response code - 200 ok
    http_response_code(200);
 
    // tell the user
    echo json_encode(array("message" => "feedback was updated."));
}
 
// if unable to update the feedback, tell the user
else{
 
    // set response code - 503 service unavailable
    http_response_code(503);
 
    // tell the user
    echo json_encode(array("message" => "Unable to update feedback."));
}
?>