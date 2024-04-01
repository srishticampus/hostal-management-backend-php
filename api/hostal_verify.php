<?php
require 'connection.php';
$random_id=$_REQUEST['random_id'];
$data=array();
$sql="select * from wardan where hostal_rand_id='$random_id'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$hostal_id=$row['id'];
	$hostal_type=$row['hostal_type'];
	$data=array("status"=>true,
               "message"=>"Hostel Verified",
               "hostelType"=>$hostal_type,
               "hostelId"=>$hostal_id);
}
else{
	$data=array("status"=>false,
               "message"=>"Hostel Not Verified",
               "hostelType"=>"",
               "hostelId"=>"");
}
echo json_encode($data);
?>