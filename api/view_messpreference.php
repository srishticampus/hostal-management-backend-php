<?php
require 'connection.php';
$data=array();
$userid=$_REQUEST['userid'];
$sql="select * from user where id=$userid";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();

	$data=array("id"=>$row['id'],
               "mess_preference"=>$row['mess_preference']);
	$post=array("status"=>true,
               "message"=>"Listed",
               "details"=>$data);

}
else{
	$post=array("status"=>false,
               "message"=>"Not Found",
               "details"=>$data);

}
echo json_encode($post);

?>