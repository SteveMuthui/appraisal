<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/leave.php';
 
// instantiate database and leave object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$leave = new Leave($db);
 
// query leaves
$stmt = $leave->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $leavesArr=array();
    $leavesArr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $leaveItem=array(
            "id" => $id,
            "reason" => $reason,
            "startDate" => html_entity_decode($startDate),
            "endDate" => html_entity_decode($endDate),
            "userId" => $userId,
            "username" => $username
        );
 
        array_push($leavesArr["records"], $leaveItem);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show leaves data in json format
    echo json_encode($leavesArr);
}else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no leavess found
    echo json_encode(
        array("message" => "No leaves found.")
    );
}