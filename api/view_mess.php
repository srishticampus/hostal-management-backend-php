<?php
require 'connection.php';
$data = array();
$hostal_id = $_REQUEST['hostal_id'];
$sql = "SELECT * FROM mess WHERE wardan_id = $hostal_id";
$result = $con->query($sql);
$count = $result->num_rows;
if ($count > 0) {
    $row = $result->fetch_assoc();
        $data[] = array(
            "id" => $row['id'],
            "code" => $row['code'],
            "location" => $row['location'],
            "mess_capacity" => $row['mess_capacity'],
            "breakfast_availability" => $row['breakfast_availability'],
            "lunch_availability" => $row['lunch_availability'],
            "dinner_availability" => $row['dinner_availability'],
            "snacks_availability" => $row['snacks_availability'],
            "breakfast_timing"=>$row['breakfast_timing'],
            "lunch_timing"=>$row['lunch_timing'],
            "dinner_timing"=>$row['dinner_timing'],
            "snacks_timing"=>$row['snacks_timing'],
            "opening"=>$row['opening'],
            "closing"=>$row['closing'],
            "price"=>$row['price'],
            "hostal_id"=>$row['wardan_id']); // Fixed the error here
  
    $post = array(
        "status" => true,
        "message" => "Mess Details Listed",
        "roomDetails" => $data
    );
} else {
    $post = array(
        "status" => false,
        "message" => "No Mess Details Listed",
        "roomDetails" => $data
    );
}
echo json_encode($post);
?>
