<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../config/database.php';
include_once '../objects/feedback.php';
 
// instantiate database and feedback object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$feedback = new Feedback($db);
 
// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";
 
// query feedbacks
$stmt = $feedback->search($keywords);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // feedbacks array
    $feedbacks_arr=array();
    $feedbacks_arr["records"]=array();
 
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
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show feedbacks data
    echo json_encode($feedbacks_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no feedbacks found
    echo json_encode(
        array("message" => "No feedbacks found.")
    );
}
?>