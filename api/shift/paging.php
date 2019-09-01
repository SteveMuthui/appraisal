<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../shared/utilities.php';
include_once '../config/database.php';
include_once '../objects/shift.php';
 
// utilities
$utilities = new Utilities();
 
// instantiate database and shift object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$shift = new Shift($db);
 
// query shifts
$stmt = $shift->readPaging($from_record_num, $records_per_page);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // shifts array
    $shifts_arr=array();
    $shifts_arr["records"]=array();
    $shifts_arr["paging"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $shift_item=array(
            "id" => $id,
            "name" => $name,
            "duration" => html_entity_decode($duration),
            "userId" => $userId,
            "username" => $username
        );
 
        array_push($shifts_arr["records"], $shift_item);
    }
 
 
    // include paging
    $total_rows=$shift->count();
    $page_url="{$home_url}shift/read_paging.php?";
    $paging=$utilities->getPaging($page, $total_rows, $records_per_page, $page_url);
    $shifts_arr["paging"]=$paging;
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($shifts_arr);
}
 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user shifts does not exist
    echo json_encode(
        array("message" => "No shifts found.")
    );
}
?>