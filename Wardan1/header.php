
<?php
 require 'connection.php';
 @session_start();
 $id=$_SESSION['id'];

if(!isset($_SESSION['id'])){
  echo "please login";
 echo '<a href="index.php">Click Here...</a>';
  exit();
}

  
 $sql1="select * from wardan where id=$id";
 $result1=$con->query($sql1);
 $row1=$result1->fetch_assoc();
 $is_attendence=$row1['is_attendence'];
 $is_mess=$row1['is_mess'];
 $is_fee=$row1['is_fee'];
 $is_visitor=$row1['is_visitor'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
       
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="home.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0"><?php echo $row1['email']; ?></p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0"><?php echo $row1['contact']; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="home.php" class="nav-item nav-link">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                               
                                <a href="room.php" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="view_request.php" class="dropdown-item">Users</a>
                                        <?php
if($is_attendence=='yes'&&$is_fee=='yes'&&$is_visitor=='yes'){
    ?>
    <a href="view_attendence.php" class="dropdown-item">Attendence</a>
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                        <a href="view_payment.php" class="dropdown-item">Payment</a>
                                        <a href="visitor_request.php" class="dropdown-item">Visitor Request</a>
    <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee=='yes'&&$is_visitor=='yes'){
    ?>
   
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                         <a href="view_payment.php" class="dropdown-item">Payment</a>
                                        <a href="visitor_request.php" class="dropdown-item">Visitor Request</a>
    <?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee==''&&$is_visitor=='yes'){
    ?>
    <a href="view_attendence.php" class="dropdown-item">Attendence</a>
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                        <a href="visitor_request.php" class="dropdown-item">Visitor Request</a>
    <?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee=='yes'&&$is_visitor==''){
    ?>
    <a href="view_attendence.php" class="dropdown-item">Attendence</a>
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                         <a href="view_payment.php" class="dropdown-item">Payment</a>
                                       
    <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee==''&&$is_visitor=='yes'){
    ?>
   
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                        <a href="visitor_request.php" class="dropdown-item">Visitor Request</a>
    <?php

}
                                        ?>
                                         <?php
if($is_attendence=='yes'&&$is_fee==''&&$is_visitor==''){
    ?>
    <a href="view_attendence.php" class="dropdown-item">Attendence</a>
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                       
    <?php

}
                                        ?>
                                         <?php
if($is_attendence==''&&$is_fee=='yes'&&$is_visitor==''){
    ?>
   
                                        <a href="view_outpass.php" class="dropdown-item">Outpass Request</a>
                                         <a href="view_payment.php" class="dropdown-item">Payment</a>
                                     
    <?php

}
                                        ?>

                                        
                                       <!--  <a href="team.php" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
                                    </div>
                                </div>
                                                                    <?php
if($is_mess=='yes'){
    ?>
      <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mess</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="mess.php" class="dropdown-item">Mess</a>
                                        
                                        <a href="view_messusers.php" class="dropdown-item">Users</a>
                                       
                                      
                                    </div>
                                </div>
    <?php
}
    ?>
                               
                               
                                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
                                <a href="profile.php" class="nav-item nav-link">Profile</a>
                                 <a href="message.php" class="nav-item nav-link">Message</a>
                                 <a href="logout.php" class="nav-item nav-link">Logout</a>
                            </div>
                            <!-- <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        
        <!-- Page Header End -->


        <!-- Booking Start -->
       