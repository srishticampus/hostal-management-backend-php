<?php
require 'connection.php';
$id=$_REQUEST['id'];
$data=array();
$post=array();
$sql="select * from user where id=$id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $row=$result->fetch_assoc();
    
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
               "message"=>"User Details",
               "userData"=>$data);

}
else{
    $post=array("status"=>false,
               "message"=>"Not Found User Details",
               "userData"=>$data);
}
echo json_encode($post);
?>
