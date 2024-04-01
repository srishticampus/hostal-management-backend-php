<?php
require 'connection.php';
$userid=$_REQUEST['userid'];
$hostal_id=$_REQUEST['hostal_id'];
$room_id=$_REQUEST['room_id'];
$join_date=$_REQUEST['join_date'];
$data=array();
$sql="INSERT INTO `request`( `userid`, `hostal_id`, `room_id`,`join_date`) VALUES ('$userid','$hostal_id','$room_id','$join_date')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	$data=array("status"=>true,
               "message"=>"Request Send");
}
else{
	$data=array("status"=>fase,
               "message"=>"No Request Send");
}
echo json_encode($data);
?>