<?php
require 'connection.php';
$data=array();
$userid=$_REQUEST['userid'];
$messpreference=$_REQUEST['messpreference'];
$sql="UPDATE `user` SET `mess_preference`='$messpreference' WHERE id=$userid";
$result=$con->query($sql);
if(!$result){
	$data=array("status"=>false,
              "message"=>"Mess Preference Changed Failed");

}
else{
	$data=array("status"=>true,
               "message"=>"Mess Preference Changed Success");
}
echo json_encode($data);
?>