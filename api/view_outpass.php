<?php
require 'connection.php';
$data=array();
$outpass_id=$_REQUEST['outpassid'];
$userid=$_REQUEST['userid'];
$sql="select * from outpass where id=$outpass_id";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0){
    $row=$result->fetch_assoc();
$data=array("status"=>true,
           "message"=>"pass generated",
           "pass"=>($row['pass_file']=="")?"":"http://campus.sicsglobal.co.in/Project/Hostel/Wardan/pdf/".$row['pass_file']);
}
else{
	$data=array("status"=>false,
           "message"=>"pass not generated",
           "pass"=>"");
}
echo json_encode($data);

?>