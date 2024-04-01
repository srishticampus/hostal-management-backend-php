<?php
require 'connection.php';
$data=array();
$post=array();
$details=array();
$hostal_id=$_REQUEST['hostal_id']; // Add a semicolon at the end of this line
$sql="select * from wardan where approve_status=1 and hostal_rand_id='$hostal_id' ";
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

 

$sq1="select * from mess where hostal_id=$id";
        $res1=$con->query($sq1);
        $co1=$res1->num_rows;
        if($co1>0){
            while($ro1=$res1->fetch_assoc()){
                $details1[] = array(
    "id" => ($ro1['id'] == null ? "" : $ro1['id']),
    "code" => ($ro1['code'] == null ? "" : $ro1['code']),
    "location" => ($ro1['location'] == null ? "" : $ro1['location']),
    "mess_capacity" => ($ro1['mess_capacity'] == null ? "" : $ro1['mess_capacity']),
    "breakfast_availability" => ($ro1['breakfast_availability'] == null ? "" : $ro1['breakfast_availability']),
    "lunch_availability" => ($ro1['lunch_availability'] == null ? "" : $ro1['lunch_availability']),
    "dinner_availability" => ($ro1['dinner_availability'] == null ? "" : $ro1['dinner_availability']),
    "snacks_availability" => ($ro1['snacks_availability'] == null ? "" : $ro1['snacks_availability']),
    "breakfast_timing" => ($ro1['breakfast_timing'] == null ? "" : $ro1['breakfast_timing']),
    "lunch_timing" => ($ro1['lunch_timing'] == null ? "" : $ro1['lunch_timing']),
    "dinner_timing" => ($ro1['dinner_timing'] == null ? "" : $ro1['dinner_timing']),
    "snacks_timing" => ($ro1['snacks_timing'] == null ? "" : $ro1['snacks_timing']),
    "opening" => ($ro1['opening'] == null ? "" : $ro1['opening']),
    "closing" => ($ro1['closing'] == null ? "" : $ro1['closing']),
    "price" => ($ro1['price'] == null ? "" : $ro1['price']),
    "hostal_id" => ($ro1['hostal_id'] == null ? "" : $ro1['hostal_id'])
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
    "roomDetails"=>$details,
    "hostalDetails"=>$details1
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
