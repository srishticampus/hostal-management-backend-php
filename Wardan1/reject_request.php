<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update request set request_status=2 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_request.php?status=failed");
}
else{
	header("location:view_request.php?status=success");
}
?>