<?php  
 include 'phpqrcode/qrlib.php';
 require 'connection.php';  
 $uid=$_GET['uid'];
 // Create QRcode object   
 $qc = new QRCODE();   
 // create text QR code  
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 $sql="update user set unique_id_is='$randomString' where id=$uid";
 $result=$con->query($sql);


 QRcode::png($randomString,false,'L',12,2);; 

  
 ?>