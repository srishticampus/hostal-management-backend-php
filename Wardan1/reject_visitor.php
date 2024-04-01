<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="UPDATE `visitor` SET `visitor_status`=2 WHERE id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:visitor_request.php?status=failed");
}
else{
	header("location:visitor_request.php?status=success");
}
?>