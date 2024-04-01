<?php
require 'connection.php';
session_start();
$wardan_id = $_SESSION['id'];
$code=$_POST['code'];
$location=$_POST['location'];
$mess_capacity=$_POST['mess_capacity'];
$breakfast_availability=$_POST['breakfast_availability'];
$lunch_availability=$_POST['lunch_availability'];
$dinner_availability=$_POST['dinner_availability'];
$snacks_availability=$_POST['snacks_availability'];
$breakfast_timing=$_POST['breakfast_timing'];
$lunch_timing=$_POST['lunch_timing'];
$dinner_timing=$_POST['dinner_timing'];
$snacks_timing=$_POST['snacks_timing'];
$opening=$_POST['opening'];
$closing=$_POST['closing'];
$price=$_POST['price'];
$sql="select * from mess where hostal_id=$wardan_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$id=$row['id'];
	$sql1="UPDATE `mess` SET `code`='$code',`location`='$location',`mess_capacity`='$mess_capacity',`breakfast_availability`='$breakfast_availability',`lunch_availability`='$lunch_availability',`dinner_availability`='$dinner_availability',`snacks_availability`='$snacks_availability',`breakfast_timing`='$breakfast_timing',`lunch_timing`='$lunch_timing',`dinner_timing`='$dinner_timing',`snacks_timing`='$snacks_timing',`opening`='$opening',`closing`='$closing',`price`='$price' WHERE id=$id and hostal_id=$wardan_id";
	$result1=$con->query($sql1);
	header("location:mess.php?status=success");
}
else{
	$sql="INSERT INTO `mess`( `code`, `location`, `mess_capacity`, `breakfast_availability`, `lunch_availability`, `dinner_availability`, `snacks_availability`, `breakfast_timing`, `lunch_timing`, `dinner_timing`, `snacks_timing`, `opening`, `closing`, `price`, `hostal_id`) VALUES ('$code','$location','$mess_capacity','$breakfast_availability','$lunch_availability','$dinner_availability','$snacks_availability','$breakfast_timing','$lunch_timing','$dinner_timing','$snacks_timing','$opening','$closing','$price',$wardan_id)";
	$result=$con->query($sql);
	$count=$con->affected_rows;
	if($count>0){
		header("location:mess.php?status=success");
	}
	else{
		header("location:mess.php?status=failed");
	}
}
?>