<?php
require 'connection.php';
session_start();
$wardan_id = $_SESSION['id'];
$upload_dir = "uploads/";
$server_url = '/home/ubuntu/html/Project/Hostel/Wardan/';
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$aadhar = $_POST['aadhar'];
$contact = $_POST['contact'];
$qualification = $_POST['qualification'];
$hostal_2_type = $_POST['hostal_2_type'];
$attendance=$_POST['attendance'];
$mess=$_POST['mess'];
$fee=$_POST['fee'];
$visitor=$_POST['visitor'];
$hostal_name = $_POST['hostal_name'];
$hostal_address = $_POST['hostal_address'];
$hostal_type = $_POST['hostal_type'];

$password = $_POST['password'];
$profile = $_FILES['profile']['name'];
$hostal_image = $_FILES['hostal_image']['name'];

$s = "SELECT * FROM wardan WHERE id=$wardan_id";
$res = $con->query($s);
$ro = $res->fetch_assoc();

if ($profile == "") {
    $photo = $ro['profile'];
} else {
    $random_name = rand(1000, 1000000) . "-" . $profile;
    $image_tmp_name = $_FILES["profile"]["tmp_name"];
    $upload_name = $upload_dir . strtolower($random_name);
    $upload_name = preg_replace('/\s+/', '-', $upload_name);
    $upload_name = $server_url . "/" . $upload_name;

    if (move_uploaded_file($image_tmp_name, $upload_name)) {
        $photo = basename($upload_name);
    } else {
        $photo = "";
    }
}

if ($hostal_image == "") {
    $photo1 = $ro['hostal_image'];
} else {
    $random_name1 = rand(1000, 1000000) . "-" . $hostal_image;
    $image_tmp_name1 = $_FILES["hostal_image"]["tmp_name"];
    $upload_name1 = $upload_dir . strtolower($random_name1);
    $upload_name1 = preg_replace('/\s+/', '-', $upload_name1);
    $upload_name1 = $server_url . "/" . $upload_name1;

    if (move_uploaded_file($image_tmp_name1, $upload_name1)) {
        $photo1 = basename($upload_name1);
    } else {
        $photo1 = "";
    }
}

$sql = "UPDATE `wardan` SET `name`='$name', `email`='$email', `gender`='$gender', `aadhar`='$aadhar', `contact`='$contact', `qualification`='$qualification', `profile`='$photo', `hostal_name`='$hostal_name', `hostal_address`='$hostal_address', `hostal_type`='$hostal_type', `hostal_image`='$photo1', `password`='$password', `hostal_2_type`='$hostal_2_type',`is_attendence`='$attendance',`is_mess`='$mess',`is_fee`='$fee',`is_visitor`='$visitor' WHERE id=$wardan_id";
$result = $con->query($sql);

if (!$result) {
    header("location: profile.php?status=failed");
  
} else {
    header("location: profile.php?status=success");
      //echo $sql;die();
}
?>
