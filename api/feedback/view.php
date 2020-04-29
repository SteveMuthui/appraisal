<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/feedback.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare feedback object
$feedback = new Feedback($db);
 
// set ID property of record to read
$feedback->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of feedback to be edited
$feedback->readOne();
 
if($feedback->name!=null){
    // create array
    $feedbackArr = array(
        "id" => $id,
        "period" => $period,
        "rating" => html_entity_decode($rating),
        "clients" => html_entity_decode($clients),
        "comments" => html_entity_decode($comments),
        "userId" => $userId,
        "username" => $username
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($feedbackArr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user feedback does not exist
    echo json_encode(array("message" => "feedback does not exist."));
}
?>