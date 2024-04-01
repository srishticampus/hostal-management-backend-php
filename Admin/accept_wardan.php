<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update wardan set approve_status=1 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_wardan.php?status=failed");
}
else{
	header("location:view_wardan.php?status=success");
}

?>