<?php
require 'connection.php';

$userid = $_REQUEST['userid'];
$name = $_REQUEST['name'];
$contact_number = $_REQUEST['phone_number'];
$email = $_REQUEST['email'];
// $password = $_REQUEST['password'];
// $address = $_REQUEST['address'];
// $batch_name = $_REQUEST['batch_name'];
// $mess_preference = $_REQUEST['mess_preference'];
// $room_preference = $_REQUEST['room_preference'];

$data = array();



$sql = "UPDATE `user` SET `name`='$name',`email`='$email',`contact_number`='$contact_number' WHERE id=$userid";

$result = $con->query($sql);

if (!$result) {
    //echo $sql;
  $data = array("status" => false, "message" => "Update failed");
} else {
    $data = array("status" => true, "message" => "Update successful");
}

echo json_encode($data);
?>
