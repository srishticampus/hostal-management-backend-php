<?php
require 'connection.php';
$data=array();
$post=array();
$details=array();
$sql="select * from wardan where approve_status=1";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while($row=$result->fetch_assoc()){


$id=$row['id'];
		$sq="select * from room where hostal_id=$id";
		$res=$con->query($sq);
		$co=$res->num_rows;
		if($co>0){
			while($ro=$res->fetch_assoc()){
				$details[] = array(
    "id" => ($ro['id'] == null ? "" : $ro['id']),
    "room_number" => ($ro['room_number'] == null ? "" : $ro['room_number']),
    "room_type" => ($ro['room_type'] == null ? "" : $ro['room_type']),
    "capacity" => ($ro['capacity'] == null ? "" : $ro['capacity']),
    "room_status" => ($ro['room_status'] == null ? "" : $ro['room_status']),
    "price" => ($ro['price'] == null ? "" : $ro['price']),
    "image" => ($ro['image'] == null ? "" : "http://campus.sicsglobal.co.in/Project/Hostal/Wardan/uploads/" . $ro['image']),
    "hostal_id" => ($ro['hostal_id'] == null ? "" : $ro['hostal_id'])
);


			}
		}




		$data[] = array(
    "id" => ($row['id'] == null ? "" : $row['id']),
    "name" => ($row['name'] == null ? "" : $row['name']),
    "email" => ($row['email'] == null ? "" : $row['email']),
    "gender" => ($row['gender'] == null ? "" : $row['gender']),
    "aadhar" => ($row['aadhar'] == null ? "" : $row['aadhar']),
    "contact" => ($row['contact'] == null ? "" : $row['contact']),
    "qualification" => ($row['qualification'] == null ? "" : $row['qualification']),
    "profile" => ($row['profile'] == null ? "" : "http://campus.sicsglobal.co.in/Project/Hostal/Wardan/uploads/".$row['profile']),
    "hostal_name" => ($row['hostal_name'] == null ? "" : $row['hostal_name']),
    "hostal_address" => ($row['hostal_address'] == null ? "" : $row['hostal_address']),
    "hostal_type" => ($row['hostal_type'] == null ? "" : $row['hostal_type']),
    "hostal_image" => ($row['hostal_image'] == null ? "" : "http://campus.sicsglobal.co.in/Project/Hostal/Wardan/uploads/".$row['hostal_image']),
    "password" => ($row['password'] == null ? "" : $row['password']),
    "approve_status" => ($row['approve_status'] == null ? "" : $row['approve_status']),
    "roomDetails"=>$details
);
		

	}
	$post=array("status"=>true,
               "message"=>"Hostal Details Listed",
               "hostalData"=>$data);
}
else{
	$post=array("status"=>false,
               "message"=>"No Hostal Details Found",
               "hostalData"=>$data);
}
echo json_encode($post);
?>