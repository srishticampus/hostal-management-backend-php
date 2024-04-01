
<?php
require 'connection.php';
 @session_start();

$flag=false;

if(isset($_SESSION['id'])){
   $id=$_SESSION['id'];
 $flag=true;
  $sql1="select * from wardan where id=$id";
 $result1=$con->query($sql1);
 $row1=$result1->fetch_assoc();
 $is_attendence=$row1['is_attendence'];
 $is_mess=$row1['is_mess'];
 $is_fee=$row1['is_fee'];
 $is_visitor=$row1['is_visitor'];
 $approve_status=$row1['approve_status'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hostelier</title>

  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/magnefic-popup/magnific-popup.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- ================ header section start ================= -->  
  <header class="header_area">
    <div class="header-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <div id="logo">
            <a href="index.php" style="text-decoration: none;color: black;font-family: 'Playfair Display', serif;"><h4>HOSTELIER</h4></a>
          </div>
          <input type="hidden" name="approve" id="approve" value="<?php echo $row1['approve_status'];?>">
        <!--   <?php
        if($flag==true){?>

          <div class="ml-auto d-none d-md-block d-md-flex" >
            <div class="media header-top-info" style="text-align: right;">
              <span class="header-top-info__icon"><i class="fas fa-phone-volume"></i></span>
              <div class="media-body">
                
                <p ><a href="tel:+12 365 5233"><?php echo $row1['contact'];?></a></p>
              </div>
            </div>
            <div class="media header-top-info" style="text-align: right;">
              <span class="header-top-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
               
                <p><a href="tel:+12 365 5233"><?php echo $row1['email'];?></a></p>
              </div>
            </div>
          </div>
          <?php
        }
          ?> -->
        </div>
      </div>
    </div>


    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
              <li class="nav-item"><a class="nav-link" href="room.php">Rooms</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li> -->
       <?php
        if($flag==true){
if($is_mess=='yes'){
    ?>
               <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Mess</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="mess.php">Mess</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_messusers.php">Users</a></li>
                 
                </ul>
              </li>
              <?php
}
              ?>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Facility</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="view_request.php">User</a></li>
                                                       <?php
if($is_attendence=='yes'&&$is_fee=='yes'&&$is_visitor=='yes'){
    ?>

<li class="nav-item"><a class="nav-link" href="view_attendence.php">Attendence</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_payment.php">Payment</a></li>
                   <li class="nav-item"><a class="nav-link" href="visitor_request.php">Visitor</a></li>
    <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee=='yes'&&$is_visitor=='yes'){
    ?>
   
                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_payment.php">Payment</a></li>
                   <li class="nav-item"><a class="nav-link" href="visitor_request.php">Visitor</a></li>             

                   <?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee==''&&$is_visitor=='yes'){
    ?>
    <li class="nav-item"><a class="nav-link" href="view_attendence.php">Attendence</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                 
                   <li class="nav-item"><a class="nav-link" href="visitor_request.php">Visitor</a></li>

<?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee=='yes'&&$is_visitor==''){
    ?>

    <li class="nav-item"><a class="nav-link" href="view_attendence.php">Attendence</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_payment.php">Payment</a></li>
                  
                      <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee==''&&$is_visitor=='yes'){
    ?>



                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
            
                   <li class="nav-item"><a class="nav-link" href="visitor_request.php">Visitor</a></li>
     <?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee==''&&$is_visitor==''){

?>
<li class="nav-item"><a class="nav-link" href="view_attendence.php">Attendence</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                  

  <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee=='yes'&&$is_visitor==''){
    ?>

                  <li class="nav-item"><a class="nav-link" href="view_outpass.php">Outpass</a></li>
                  <li class="nav-item"><a class="nav-link" href="view_payment.php">Payment</a></li>
                    <?php

}
                                        ?>

                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
              <li class="nav-item"><a class="nav-link" href="message.php">Message</a></li>
              <?php
}
              ?>
            </ul>
          </div>
<?php
if($flag==true){

?>
          <ul class=" ml-auto" >
             <li class="nav-item" ><h6><a class="nav-link" href="logout.php" style="color:black;"><i class="fas fa-users"></i>&nbsp;&nbsp;Logout</a></h6></li>
            
            
          </ul>
          <?php

          }else{?>
          <li class="nav-item" ><h6><a class="nav-link" href="login.php" style="color:black;"><i class="fas fa-users"></i>&nbsp;&nbsp;Login</a></h6></li>

          <?php
          }

          ?>
        </div>
      </nav>
      
      <!-- <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div> -->
    </div>
  </header>
  <script type="text/javascript">
    

$(document).ready(function(){

setInterval(function () {
        //$('ul').load('ul');
   var status=$("#approve").val();
  if(status==2){
    window.location.href ="login.php";
  }
         $("#approve").load(window.location.href + " #approve");
    }, 1000);

});
  </script>