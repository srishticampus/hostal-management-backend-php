<?php
require 'connection.php';
$data = array();
$user_id = $_REQUEST['user_id'];
$sql = "SELECT user.id, room.price AS rprice, user.name,user.hostal_id,user.mess_preference FROM user INNER JOIN allocate ON allocate.userid = user.id INNER JOIN room ON room.id = allocate.room_id WHERE user.id = $user_id";
$result = $con->query($sql);
$count = $result->num_rows;

if ($count > 0) {
    $row = $result->fetch_assoc();
    $mess_preference = $row['mess_preference'];
    $hostal_id = $row['hostal_id'];
    $mess_amount = "";
    
    if ($mess_preference != 'no food') {
        $sq = "SELECT * FROM mess WHERE hostal_id = $hostal_id";
        $res = $con->query($sq);
        $co = $res->num_rows;
        $ro = $res->fetch_assoc();
        $mess_amount = $ro['price'];
    }
    
    $data[] = array(
        "userid" => $row['id'],
        "username" => $row['name'],
        "room_rent" => $row['rprice'],
        "mess_amount" => $mess_amount,
        "total_amount" => $row['rprice'] + $mess_amount
    );
    
    $post = array(
        "status" => true,
        "message" => "Payment Details",
        "paymentDetails" => $data
    );
} else {
    $post = array(
        "status" => false,
        "message" => "No Payment Details",
        "paymentDetails" => $data
    );
}

echo json_encode($post); // Corrected this line
?>
