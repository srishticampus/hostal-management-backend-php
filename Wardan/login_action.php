<?php
require 'connection.php';
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from wardan where email='$email' and password='$pass' and approve_status=1";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['id']=$row['id'];
	header("location:index.php?status=success");
}
else{
	header("location:login.php?status=failed");
}

?>