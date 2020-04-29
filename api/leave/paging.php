<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../shared/utilities.php';
include_once '../config/database.php';
include_once '../objects/leave.php';
 
// utilities
$utilities = new Utilities();
 
// instantiate database and leave object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$leave = new Leave($db);
 
// query leaves
$stmt = $leave->readPaging($from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // leaves array
    $leaves_arr=array();
    $leaves_arr["records"]=array();
    $leaves_arr["paging"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $leave_item=array(
            "id" => $id,
            "reason" => $reason,
            "startDate" => html_entity_decode($startDate),
            "endDate" => html_entity_decode($endDate),
            "userId" => $userId,
            "username" => $username
        );
 
        array_push($leaves_arr["records"], $leave_item);
    }
 
 
    // include paging
    $total_rows=$leave->count();
    $page_url="{$home_url}leave/read_paging.php?";
    $paging=$utilities->getPaging($page, $total_rows, $records_per_page, $page_url);
    $leaves_arr["paging"]=$paging;
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($leaves_arr);
}
 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user leaves does not exist
    echo json_encode(
        array("message" => "No leaves found.")
    );
}
?>