<?php
require 'connection.php';
$data = array();
$user_id = $_REQUEST['user_id'];
$hostal_id = $_REQUEST['hostal_id'];
$payment_date = $_REQUEST['payment_date'];
$amount = $_REQUEST['amount'];

$sql = "INSERT INTO `payment`(`hostal_id`, `user_id`, `payment_date`, `amount`) VALUES ('$hostal_id', '$user_id', '$payment_date', '$amount')";
$result = $con->query($sql);
$count = $con->affected_rows;

if ($count > 0) {
    $data = array(
        "status" => true,
        "message" => "Payment sent"
    );
} else {
    $data = array(
        "status" => false,
        "message" => "Payment failed"
    );
}

echo json_encode($data); // Corrected this line
?>
