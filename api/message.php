<?php
require 'connection.php';

// Initialize an empty array to store response data
$response = array();

// Set the default timezone
date_default_timezone_set("Asia/Calcutta");

// Get data from the request
$userid = $_REQUEST['userid'];
$message = $_REQUEST['message'];
$hostal_id = $_REQUEST['hostal_id'];
$date = date('Y-m-d');
$time = date('h:i:s a');

// Prepare and execute the SQL query to insert the message into the database
$sql = "INSERT INTO `message` (`userid`, `hostal_id`, `message`, `date_m`, `time_m`, `status`) VALUES ('$userid', '$hostal_id', '$message', '$date', '$time', 'User')";
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    $response["status"] = true;
    $response["message"] = "Message sent successfully";
} else {
    $response["status"] = false;
    $response["message"] = "Failed to send message";
}

// Encode the response data as JSON and output it
echo json_encode($response);
?>
