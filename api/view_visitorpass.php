<?php
require 'connection.php';
$data=array();
$visitor_id=$_REQUEST['visitorid'];
$userid=$_REQUEST['userid'];
$sql="select * from visitor where id=$visitor_id";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0){
    $row=$result->fetch_assoc();
$data=array("status"=>true,
           "message"=>"visitor pass generated",
           "pass"=>($row['pass_file']=="")?"":"http://campus.sicsglobal.co.in/Project/Hostel/Wardan/pdf/".$row['pass_file']);
}
else{
	$data=array("status"=>false,
           "message"=>"Visitor pass not generated",
           "pass"=>"");
}
echo json_encode($data);

?>