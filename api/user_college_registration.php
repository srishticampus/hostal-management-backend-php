<?php
require 'connection.php';

// Fetching user registration data from request parameters
$name = $_REQUEST['name'];
$contact_number = $_REQUEST['phone_number'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$address = $_REQUEST['address'];
$batch_name = $_REQUEST['batch_name'];
$mess_preference = $_REQUEST['mess_preference'];
$room_preference = $_REQUEST['room_preference'];


$hostal_id=$_REQUEST['hostal_id'];

$data = array();
$post = array();

// Checking if user with provided contact number already exists
$sql = "SELECT * FROM user WHERE contact_number='$contact_number'";
$result = $con->query($sql);
$count = $result->num_rows;

if ($count > 0) {
    // User already exists, return user data
    $row = $result->fetch_assoc();
    $data[] = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "contact_number" => $row['contact_number'],
        "email" => $row['email'],
        "address" => $row['address'],
        "batch_name" => $row['batch'],
        "mess_preference" => $row['mess_preference'],
        "room_preference" => $row['room_preference'],
        "hostal_type" => $row['hostal_type'],
        "password" => $row['password'],
            "unique_id_is"=>$row['unique_id_is']
    );

    $post = array(
        "status" => false,
        "message" => "User already exists",
        "userData" => $data
    );
} else {
    // User does not exist, insert new user data
    $sql = "INSERT INTO `user`(`name`, `email`, `address`, `contact_number`, `batch`, `mess_preference`, `room_preference`, `password`,`hostal_type`,`hostal_id`) 
            VALUES ('$name', '$email', '$address', '$contact_number', '$batch_name', '$mess_preference', '$room_preference', '$password','College','$hostal_id')";
    $result = $con->query($sql);

    if ($result) {
        // Registration successful, fetch inserted user data
        $last_id = $con->insert_id;
        $sql = "SELECT * FROM user WHERE id=$last_id";
        $res = $con->query($sql);
        $row = $res->fetch_assoc();

        $data[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "contact_number" => $row['contact_number'],
            "email" => $row['email'],
            "address" => $row['address'],
            "batch_name" => $row['batch'],
            "mess_preference" => $row['mess_preference'],
            "room_preference" => $row['room_preference'],
            "hostal_type" => $row['hostal_type'],
            "password" => $row['password'],
            "unique_id_is"=>$row['unique_id_is']
        );

        $post = array(
            "status" => true,
            "message" => "Registration successful",
            "userData" => $data
        );
    } else {
        // Registration failed
        $post = array(
            "status" => false,
            "message" => "Registration failed",
            "userData" => $data
        );
    }
}

echo json_encode($post);
?>
