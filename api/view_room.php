<?php
require 'connection.php';
$data = array();
$hostal_id = $_REQUEST['hostal_id'];
$sql = "SELECT * FROM room WHERE hostal_id = $hostal_id";
$result = $con->query($sql);
$count = $result->num_rows;
if ($count > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "id" => $row['id'],
            "room_number" => $row['room_number'],
            "room_type" => $row['room_type'],
            "capacity" => $row['capacity'],
            "room_status" => $row['room_status'],
            "price" => $row['price'],
            "image" => "http://campus.sicsglobal.co.in/Project/Hostal/Wardan/uploads/" . $row['image'],
            "hostal_id" => $row['hostal_id'] // Fixed the error here
        );
    }
    $post = array(
        "status" => true,
        "message" => "Room Listed",
        "roomDetails" => $data
    );
} else {
    $post = array(
        "status" => false,
        "message" => "No Room Listed",
        "roomDetails" => $data
    );
}
echo json_encode($post);
?>
