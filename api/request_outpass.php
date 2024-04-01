<?php
require 'connection.php';

$data = array();
$post = array(); // Added missing "$" sign

$user_id = $_REQUEST['user_id'];
$passdate = $_REQUEST['date'];
$passtime = $_REQUEST['time'];
$purpose = $_REQUEST['purpose'];
$return_time = $_REQUEST['return_time'];

$sql = "INSERT INTO `outpass` (`user_id`, `pass_date`, `pass_time`, `purpose`, `return_time`) VALUES ('$user_id', '$passdate', '$passtime', '$purpose', '$return_time')";
$result = $con->query($sql);
$count = $con->affected_rows;

if ($count > 0) {
    $last_id = $con->insert_id;
    $sql = "SELECT * FROM outpass WHERE id=$last_id";
    $res = $con->query($sql);
    $row = $res->fetch_assoc();

    // Corrected variable names
    $post[] = array(
        "outpass_id" => $row['id'],
        "userid" => $row['user_id'],
        "date" => $row['pass_date'], // Corrected column name
        "time" => $row['pass_time'], // Corrected column name
        "purpose" => $row['purpose'],
        "return_time" => $row['return_time']
    );
    $data = array(
        "status" => true,
        "message" => "Request Send For Outpass",
        "outpassDetails" => $post
    );
} else {
    $data = array(
        "status" => false,
        "message" => "Request Send Failed",
        "outpassDetails" => $post
    );
}

echo json_encode($data);
?>
