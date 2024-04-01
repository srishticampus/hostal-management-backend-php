<?php
require 'connection.php';
$data=array();
$hostal_id=$_REQUEST['hostal_id'];
$userid=$_REQUEST['userid'];
$sql="select * from message  where hostal_id=$hostal_id   order by date_m asc, time_m asc";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while ($row=$result->fetch_assoc()) {
		$user=$row['userid'];
		  $sq1="select * from wardan where id=$hostal_id";
            $res1=$con->query($sq1);
            $ro1=$res1->fetch_assoc();

		if($user==null){
			$user="";
			$name="";
		}
		else{
		$sq="select * from user where id=$user";
		$res=$con->query($sq);
		$ro=$res->fetch_assoc();
		$user=$ro['id'];
		$name=$ro['name'];
	}
		$data[]=array("id"=>$row['id'],
	                  "message"=>$row['message'],
	                  "date"=>$row['date_m'],
	                  "time"=>$row['time_m'],
	                  "name"=>($name=="")?$ro1['hostal_name']:$name,
	                  "userid"=>$user);

	}
	$post=array("status"=>true,
                "message"=>"Listed",
                "messageDetails"=>$data);
}
else{
	$post=array("status"=>false,
                "message"=>"Not Listed",
                "messageDetails"=>$data);
}
echo json_encode($post);
?>