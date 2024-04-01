<?php
require 'connection.php';
session_start();
 $upload_dir="uploads/";
 $id=$_SESSION['id'];
$server_url = '/home/ubuntu/html/Project/Hostel/Wardan/'; 
$password=$_REQUEST['password'];
 $image=$_FILES['img']['name'];

$random_name = rand(1000,1000000)."-".$_FILES['img']['name'];
 $image_tmp_name = $_FILES["img"]["tmp_name"];
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);
        $upload_name=$server_url."/".$upload_name;

        if(move_uploaded_file($image_tmp_name , $upload_name)){
           $photo=basename($upload_name); 
        }
        else{
            $photo="";
        }

        $room_number=$_POST['room_number'];
        $room_type=$_POST['room_type'];
        $capacity=$_POST['capacity'];
        $price=$_POST['price'];
        $status=$_POST['status'];
        $sql="INSERT INTO `room`( `room_number`, `room_type`, `capacity`, `room_status`, `price`, `image`,`hostal_id`) VALUES ('$room_number','$room_type','$capacity','$status','$price','$photo','$id')";
        $result=$con->query($sql);
        $count=$con->affected_rows;
        if($count>0){
        	header("location:room.php?status=success");
 
        }
        else{
        	header("location:room.php?status=failed");
           
        }
?>