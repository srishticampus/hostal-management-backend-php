<?php
require 'connection.php';
date_default_timezone_set("Asia/Calcutta");
$data = array();
$user_id = $_REQUEST['user_id'];
$unique_id = $_REQUEST['unique_id'];
$current_date = date('Y-m-d');
$current_time = date('H:i:s');
$hostal_id = "";
$sq = "SELECT * FROM user WHERE id = $user_id AND unique_id_is = '$unique_id'";
$res = $con->query($sq);
$co = $res->num_rows;


    $ro = $res->fetch_assoc();
    $hostal_id = $ro['hostal_id'];
$sql="select * from attendence where  user_id='$user_id' ";
$result=$con->query($sql);
$count=$result->num_rows;
//echo $count;
if($count>0){
    $data = array("status" => false, "message" => "Attendance Already Marked");
}
else{

    $sql = "INSERT INTO `attendence`(`user_id`, `hostal_id`, `user_current_date`, `user_current_time`) VALUES ('$user_id','$hostal_id','$current_date','$current_time')";
    $result = $con->query($sql);
    $count = $con->affected_rows;

   if($count>0){
        $data = array("status" => true, "message" => "Attendance Marked Successfully");
   }
    
 else {
    $data = array("status" => false, "message" => "Attendance Marked Failed");
}
}


echo json_encode($data);
?>
