<?php
require 'connection.php';
session_start();
$hostal_id=$_SESSION['id'];
$food_type=$_POST['food_type'];
$sql="select * from user inner join allocate on user.id=allocate.userid inner join room on room.id=allocate.room_id where user.mess_preference='$food_type' and user.hostal_id=$hostal_id ";
$result=$con->query($sql);
$count=$result->num_rows;
$i=1;
if($count>0){
	while ($row=$result->fetch_assoc()) {
		echo'<tr><td>'.$i++.'</td>
		<td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['contact_number'].'</td><td>'.$row['room_number'].'</td></tr>';
	}

}
?>