<?php
require 'connection.php';
$phone=$_REQUEST['phone'];
$password=$_REQUEST['password'];
$device_token=$_REQUEST['device_token'];
$data=array();
$post=array();

$sql="select * from user where contact_number='$phone' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $row=$result->fetch_assoc();
    $sq="update user set device_token='$device_token' where contact_number='$phone' and password='$password'";
    $res=$con->query($sq);
    $data[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "contact_number" => $row['contact_number'],
            "email" => $row['email'],
            "address" => $row['address'],
            "batch_name" => $row['batch'],
            "mess_preference" => $row['mess_preference'],
            "room_preference" => $row['room_preference'],
            "hostal_type" => $row['hostal_type'],
            "password" => $row['password'],
            "unique_id_is"=>$row['unique_id_is'],
            "hostal_id"=>$row['hostal_id']
        );
    $post=array("status"=>true,
               "message"=>"Login Successfull",
               "userData"=>$data);
}
else{
    $post=array("status"=>false,
               "message"=>"Login Failed",
               "userData"=>$data);
}
echo json_encode($post);
?>
