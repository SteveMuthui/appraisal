<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/core.php';
include_once '../config/database.php';
include_once '../objects/shift.php';
 
// instantiate database and shift object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$shift = new Shift($db);
 
// get keywords
$keywords=isset($_GET["s"]) ? $_GET["s"] : "";
 
// query shifts
$stmt = $shift->search($keywords);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // shifts array
    $shifts_arr=array();
    $shifts_arr["records"]=array();
 
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
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show shifts data
    echo json_encode($shifts_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no shifts found
    echo json_encode(
        array("message" => "No shifts found.")
    );
}
?>