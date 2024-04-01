<?php
require 'connection.php';
session_start();
$hostal_id=$_SESSION['id'];
// $id=$_SESSION['id'];

if(!isset($_SESSION['id'])){
  echo "please login";
 echo '<a href="index.php">Click Here...</a>';
  exit();
}

  
 $sql1="select * from wardan where id=$hostal_id";
 $result1=$con->query($sql1);
 $row1=$result1->fetch_assoc();
 $is_attendence=$row1['is_attendence'];
 $is_mess=$row1['is_mess'];
 $is_fee=$row1['is_fee'];
 $is_visitor=$row1['is_visitor'];
?>


<style type="text/css">
body{
    margin-top:20px;
    background:#ebeef0;
}
.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 24px;
}
.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.panel-heading {
    position: relative;
    height: 50px;
    padding: 0;
    border-bottom:1px solid #eee;
}
.panel-control {
    height: 100%;
    position: relative;
    float: right;
    padding: 0 15px;
}
.panel-title {
    font-weight: normal;
    padding: 0 20px 0 20px;
    font-size: 1.416em;
    line-height: 50px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.panel-control>.btn:last-child, .panel-control>.btn-group:last-child>.btn:first-child {
    border-bottom-right-radius: 0;
}
.panel-control .btn, .panel-control .dropdown-toggle.btn {
    border: 0;
}
.nano {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.nano>.nano-content {
    position: absolute;
    overflow: scroll;
    overflow-x: hidden;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.pad-all {
    padding: 15px;
}
.mar-btm {
    margin-bottom: 15px;
}
.media-block .media-left {
    display: block;
    float: left;
}
.img-sm {
    width: 46px;
    height: 46px;
}
.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto;
}
.pad-hor {
    padding-left: 15px;
    padding-right: 15px;
}
.speech {
    position: relative;
    background: #b7dcfe;
    color: #317787;
    display: inline-block;
    border-radius: 0;
    padding: 12px 20px;
}
.speech:before {
    content: "";
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    left: 0;
    top: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-right: 7px solid #b7dcfe;
    margin: 15px 0 0 -6px;
}
.speech-right>.speech:before {
    left: auto;
    right: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 7px solid #ffdc91;
    border-right: 0;
    margin: 15px -6px 0 0;
}
.speech .media-heading {
    font-size: 1.2em;
    color: #317787;
    display: block;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    margin-bottom: 10px;
    padding-bottom: 5px;
    font-weight: 300;
}
.speech-time {
    margin-top: 20px;
    margin-bottom: 0;
    font-size: .8em;
    font-weight: 300;
}
.media-block .media-right {
    float: right;
}
.speech-right {
    text-align: right;
}
.pad-hor {
    padding-left: 15px;
    padding-right: 15px;
}
.speech-right>.speech {
    background: #ffda87;
    color: #a07617;
    text-align: right;
}
.speech-right>.speech .media-heading {
    color: #a07617;
}
.btn-primary, .btn-primary:focus, .btn-hover-primary:hover, .btn-hover-primary:active, .btn-hover-primary.active, .btn.btn-active-primary:active, .btn.btn-active-primary.active, .dropdown.open>.btn.btn-active-primary, .btn-group.open .dropdown-toggle.btn.btn-active-primary {
    background-color: #579ddb;
    border-color: #5fa2dd;
    color: #fff !important;
}
.btn {
    cursor: pointer;
    /* background-color: transparent; */
    color: inherit;
    padding: 6px 12px;
    border-radius: 0;
    border: 1px solid 0;
    font-size: 11px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .25s;
    transition: all .25s;
}
.form-control {
    font-size: 11px;
    height: 100%;
    border-radius: 0;
    box-shadow: none;
    border: 1px solid #e9e9e9;
    transition-duration: .5s;
}
.nano>.nano-pane {
    background-color: rgba(0,0,0,0.1);
    position: absolute;
    width: 5px;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: 0;
    -webkit-transition: all .7s;
    transition: all .7s;
}

/* Add this CSS at the end of your existing CSS */
.msg-container {
    height: 380px; /* Set the height as per your requirement */
    overflow-y: auto; /* Enable vertical scrolling */
    position: relative; /* Ensure proper positioning */
}

.msg-content {
/*    //overflow-x: hidden; /* Hide horizontal overflow */*/
     padding-right: 17px; /* Add space for scrollbar */
}


body {
    overflow-x: hidden;
}



 


</style>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
       <!--  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
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

</div>
        <div class="container-xxl py-5">
         
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Chat</h6>
                    <!-- <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1> -->
                </div>
                <div class="row g-5">
                     <div class="col-lg-2">
                    </div>


    <div class="col-lg-8">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
        <div class="panel">
            <!--Heading-->
           
    
            <!--Widget body-->
            <div id="demo-chat-body" class="collapse in">
                <div class="msg-container">
    <div class="msg-content pad-all" tabindex="0">
        <ul class="list-unstyled media-block">
            <?php

$sql12="select * from message where hostal_id=$hostal_id ";
$result12=$con->query($sql12);
$count12=$result12->num_rows;
if($count12>0){
    while($row12=$result12->fetch_assoc()){
        $status=$row12['status'];
        $priority=$row12['priority'];

        if($status=='Sender'){
            $sq="select * from wardan where id=$hostal_id";
            $res=$con->query($sq);
            $ro=$res->fetch_assoc();
        ?>



        <li class="mar-btm">
                                <div class="media-left">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor">
                                    <div class="speech">
                                        <a href="#" class="media-heading"><?php echo $ro['hostal_name'];?></a>
                                        <p><?php echo $row12['message'];?></p>
                                        <p class="speech-time">
                                            <i class="fa fa-calendar-o fa-fw"></i> <?php echo $row12['date_m'];?>
                                        <i class="fa fa-clock-o fa-fw"></i><?php echo $row12['time_m']?>
                                        </p>
                                    </div>
                                </div>
                            </li>
        <?php
  }else if($row12['status']=='User'&& $priority==null){
    $sq="select * from user where hostal_id=$hostal_id";
            $res=$con->query($sq);
            $ro=$res->fetch_assoc();
                            ?>





       <li class="mar-btm">
                                <div class="media-right">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body pad-hor speech-right">
                                    <div class="speech">
                                        <a href="#" class="media-heading"><?php echo $ro['name'];?></a>
                                        <p><?php echo $row12['message'];?></p>
                                        <p class="speech-time">
                                            <i class="fa fa-calendar-o fa-fw"></i> <?php echo $row12['date_m'];?>
                                            <i class="fa fa-clock-o fa-fw"></i> <?php echo $row12['time_m'];?>
                                        </p>
                                    </div>
                                </div>
                            </li>
            <?php
    }
                            ?>




        <?php
    }
}
            ?>



                            
        
                           

                            
                            
                            
                            
                            
                            

                            
                            
                        </ul>
                    </div>
                <div class="nano-pane"><div class="nano-slider" style="height: 141px; transform: translate(0px, 0px);"></div></div></div>
    
                <!--Widget footer-->
                <div class="panel-footer">
                    <div class="row">
                        <form action="message_action.php" method="post">
                        <div class="col-xs-9">
                            <input type="text" name="message" id="message" placeholder="Enter your text" class="form-control chat-input">
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-primary btn-block" id="btn" type="submit">Send</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    
</div>
        
       </div>
       
       
       
       </html>  
      

<script type="text/javascript">
    $(document).ready(function(){
        

    // Scroll to the top of the message container
    $(".msg-container").scrollTop(4050);

setInterval(function () {
        //$('ul').load('ul');
         $("ul").load(window.location.href + " ul");
    }, 1000);
    });
</script>
<br><br><br><br><br>
<?php
include 'footer.php';
?>