<?php
require 'connection.php';
session_start();
date_default_timezone_set("Asia/Calcutta");
define('API_ACCESS_KEY', 'AAAArVlRpUI:APA91bFiexhkxSkze8rXBW6aYU6vJekC_kWAccoNeQwQ-S5cyT8U4dHdYDoY3r_97faB8-3DOMzsScdWHu-xDsxLaJ7svI2aJonXB539YHRXCLEG7O9DJlQvA_giYaPSuriZeoyIVbrP');
$message=$_POST['message'];
$hostal_id = $_SESSION['id'];

$date=date('Y-m-d');
$time=date('h:i:s');
$sq1="select * from user where hostal_id=$hostal_id";
    $res1=$con->query($sq1);

    $registrationIds = array(); // Array to store device tokens
$co1=$res1->num_rows;
if($co1>0){
    $i=1;
   while($ro1=$res1->fetch_assoc()){
   $device_token=$ro1['device_token'];
   $userid=$ro1['id'];
        if ($device_token) {
            $registrationIds = $device_token; // Store device token in the array
        }
$i=$i++;
}
$sql="INSERT INTO `message`(  `hostal_id`, `message`, `date_m`, `time_m`, `status`) VALUES ('$hostal_id','$message','$date','$time','Sender')";
$result=$con->query($sql);
$count=$con->affected_rows;
$i++;
if($count>0){
    $last_id = $con->insert_id;
   
    

    if (!empty($registrationIds)) {
        $msg = array('message' => 'You Have New Message');
        $fields = array(
            'registration_ids' => $registrationIds,
            'data' => $msg
        );
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
    }
    
    $post = array("payload" => $msg);
}
    header("location:message.php?status=success");
}
 else {
    header("location:message.php?status=failed");
}
?>
