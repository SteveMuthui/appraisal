<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../shared/utilities.php';
include_once '../config/database.php';
include_once '../objects/feedback.php';
 
// utilities
$utilities = new Utilities();
 
// instantiate database and feedback object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$feedback = new Feedback($db);
 
// query feedbacks
$stmt = $feedback->readPaging($from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // feedbacks array
    $feedbacks_arr=array();
    $feedbacks_arr["records"]=array();
    $feedbacks_arr["paging"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $feedback_item=array(
            "id" => $id,
            "period" => $period,
            "rating" => html_entity_decode($rating),
            "clients" => html_entity_decode($clients),
            "comments" => html_entity_decode($comments),
            "userId" => $userId,
            "username" => $username
        );
 
        array_push($feedbacks_arr["records"], $feedback_item);
    }
 
 
    // include paging
    $total_rows=$feedback->count();
    $page_url="{$home_url}feedback/read_paging.php?";
    $paging=$utilities->getPaging($page, $total_rows, $records_per_page, $page_url);
    $feedbacks_arr["paging"]=$paging;
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($feedbacks_arr);
}
 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user feedbacks does not exist
    echo json_encode(
        array("message" => "No feedbacks found.")
    );
}
?>