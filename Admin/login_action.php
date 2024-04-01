<?php
session_start();
require 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM `admin` WHERE username='$email' and password='$password' ";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$status=$row['status'];
	if($status==0){
	$_SESSION['admin']=true;}
	else if($status==1){
		$_SESSION['faculty']=true;
	}
	header("location:dashboard.php?status=success");
}
else{
	header("location:index.php?status=failed");

}
?>