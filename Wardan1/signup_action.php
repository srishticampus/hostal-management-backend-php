<?php
require 'connection.php';
 $upload_dir="uploads/";
$server_url = '/home/ubuntu/html/Project/Hostel/Wardan/';
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$aadhar=$_POST['aadhar'];
$contact=$_POST['contact'];
$qualification=$_POST['qualification'];
$hostal_2_type=$_POST['hostal_2_type'];

$hostal_name=$_POST['hostal_name'];
$hostal_address=$_POST['hostal_address'];
$hostal_type=$_POST['hostal_type'];
if($hostal_type=='College'){
$attendence='yes';
    $mess='yes';
    $fee='yes';
    $visitor='yes';
}
else{
    $attendence=$_POST['attendance'];
    $mess=$_POST['mess'];
    $fee=$_POST['fee'];
    $visitor=$_POST['visitor'];
}

$password=$_POST['password'];
$profile=$_FILES['profile']['name'];
$random_name = rand(1000,1000000)."-".$profile;
 $image_tmp_name = $_FILES["profile"]["tmp_name"];
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);
        $upload_name=$server_url."/".$upload_name;
        if(move_uploaded_file($image_tmp_name , $upload_name)){
           $photo=basename($upload_name); 
        }
        else{
            $photo="";
        }

        $hostal_image=$_FILES['hostal_image']['name'];
$random_name1 = rand(1000,1000000)."-".$hostal_image;
 $image_tmp_name1 = $_FILES["hostal_image"]["tmp_name"];
        $upload_name1 = $upload_dir.strtolower($random_name1);
        $upload_name1 = preg_replace('/\s+/', '-', $upload_name1);
        $upload_name=$server_url."/".$upload_name1;
        if(move_uploaded_file($image_tmp_name1 , $upload_name1)){
           $photo1=basename($upload_name1); 
        }
        else{
            $photo1="";
        }
        $random=rand(1000,9999);
        $sql="INSERT INTO `wardan`( `name`, `email`, `gender`, `aadhar`, `contact`, `qualification`, `profile`, `hostal_name`, `hostal_address`, `hostal_type`, `hostal_image`, `password`,`hostal_2_type`, `is_attendence`, `is_mess`, `is_fee`, `is_visitor`,`hostal_rand_id`) VALUES ('$name','$email','$gender','$aadhar','$contact','$qualification','$photo','$hostal_name','$hostal_address','$hostal_type','$photo1','$password','$hostal_2_type','$attendence','$mess','$fee','$visitor','$random')";
        $result=$con->query($sql);
        $count=$con->affected_rows;
        if($count>0){
        	header("location:index.php?status=success");
        }
        else{
        	header("location:signup.php?status=failed");
            //echo $sql;
        }
?>