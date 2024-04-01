<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="UPDATE `outpass` SET `outpass_status`=1 WHERE id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_outpass.php?status=failed");
}
else{
	header("location:view_outpass.php?status=success");
}
?>