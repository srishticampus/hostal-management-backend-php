<?php
require 'connection.php';
$data=array();
$post=array();
$outpass_id=$_REQUEST['outpassid'];
$userid=$_REQUEST['userid'];
$sql="select * from outpass where user_id=$userid";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0){
    while($row=$result->fetch_assoc()){
        $post[]=array("id"=>$row['id'],
                    
                     "userid"=>$row['user_id'],
                     "purpose"=>$row['purpose'],
                     "pass_date"=>$row['pass_date'],
                     "pass_time"=>$row['pass_time'],
                     "return_time"=>$row['return_time'],
                     "outpass_status"=>$row['outpass_status'],
                     "pass_file"=>($row['pass_file']=="")?"":"http://campus.sicsglobal.co.in/Project/Hostel/Wardan/pdf/".$row['pass_file']);

    }
$data=array("status"=>true,
           "message"=>"pass generated",
           "pass"=>$post);
}
else{
	$data=array("status"=>false,
           "message"=>"pass not generated",
           "pass"=>$post);
}
echo json_encode($data);

?>