<?php
require 'connection.php';
$data=array();
$post=array();
$visitor_id=$_REQUEST['visitor_id'];
$userid=$_REQUEST['userid'];
$sql="select * from visitor where userid=$userid";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0){
    while($row=$result->fetch_assoc()){
        $post[]=array("id"=>$row['id'],
                    "visitor_name"=>$row['visitor_name'],
                     "userid"=>$row['userid'],
                     "relation"=>$row['relation'],
                     "pass_date"=>$row['date_visit'],
                     "pass_time"=>$row['time_visit'],
                     "visitor_status"=>$row['visitor_status'],
                     "pass_file"=>($row['pass_file']=="")?"":"http://campus.sicsglobal.co.in/Project/Hostel/Wardan/pdf/".$row['pass_file']);

    }
$data=array("status"=>true,
           "message"=>"pass listed",
           "pass"=>$post);
}
else{
	$data=array("status"=>false,
           "message"=>"pass not generated",
           "pass"=>$post);
}
echo json_encode($data);

?>