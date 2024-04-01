<?php
require 'connection.php';
session_start();
 $hostal_id=$_SESSION['id']; 
$user=$_GET['user'];
$room=$_GET['room'];
$sql="INSERT INTO `allocate`( `userid`, `hostal_id`, `room_id`) VALUES ('$user','$hostal_id','$room')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	$sq="update room set capacity=capacity-1 where id=$room";
	$res=$con->query($sq);
	$sq1="select * from room where id=$room";
	$res1=$con->query($sq1);

	$ro1=$res1->fetch_assoc();
	$capacity=$ro1['capacity'];
	if($capacity==0){
		$sq="update room set room_status='Occupied' where id=$room";
	$res=$con->query($sq);
	}
	header("location:view_request.php?status=success");

}
else{
	header("location:view_request.php?status=failed");
}
?>