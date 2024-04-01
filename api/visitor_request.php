<?php
require 'connection.php';

$data = array();
$post = array(); // Added missing semicolon
$user_id = $_REQUEST['user_id'];
$passdate = $_REQUEST['date'];
$passtime = $_REQUEST['time'];
$relation = $_REQUEST['relation'];
$visitor_name = $_REQUEST['visitor_name'];

$sql = "INSERT INTO `visitor`( `visitor_name`, `userid`, `relation`, `date_visit`, `time_visit`) VALUES ('$visitor_name','$user_id','$relation','$passdate','$passtime')";
$result = $con->query($sql);
$count = $con->affected_rows;

if ($count > 0) {
    $last_id = $con->insert_id;
    $sql = "SELECT * FROM visitor WHERE id=$last_id"; // Modified to select from the 'visitor' table
    $res = $con->query($sql);
    $row = $res->fetch_assoc();
    $post[] = array(
        "visitor_id" => $row['id'], // Changed 'outpass_id' to 'visitor_id'
        "userid" => $row['userid'], 
        "date" => $row['date_visit'], 
        "time" => $row['time_visit'], 
        "relation" => $row['relation'], 
        "visitor_name" => $row['visitor_name']
    );
    $data = array(
        "status" => true,
        "message" => "Request Sent For Visitor Pass", // Changed message for clarity
        "visitorpassDetails" => $post
    );
} else {
    $data = array(
        "status" => false,
        "message" => "Request Failed to Send",
        "visitorpassDetails" => $post
    );
}

echo json_encode($data);
?>
