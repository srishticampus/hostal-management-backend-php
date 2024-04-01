<?php
include 'header.php';
 require 'connection.php';
 session_start();
             
$hostal_id=$_SESSION['id'];

      
            
?>
        <!-- Booking End -->


        <!-- Room Start -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

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
.media-block .media-body1 {
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
    <!-- ================ header section end ================= -->  
  
  <!-- ================ start banner area ================= --> 
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Chat</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Chat</li>
            </ol>
          </nav>
                </div>
            </div>
    </div>
    </section>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->


<!-- Latest compiled JavaScript -->

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- ================ end banner area ================= -->
  

  <!-- ================ start banner form ================= --> 

    <!-- ================ end banner form ================= --> 


  <!-- ================ Explore section start ================= -->
  <section class="section-margin section-margin--small">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="img/home/bed-icon.png" alt="">
        </div>
        <h2>Chat</h2>
      </div>

      <div class="row pb-4">


       <div class="container-xxl py-5">
         
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                 
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
        $userid=$row12['userid'];

        if($status=='Sender'){
            $sq="select * from wardan where id=$hostal_id";
            $res=$con->query($sq);
            $ro=$res->fetch_assoc();
        ?>



        <li class="mar-btm">
                                <div class="media-left">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body1 pad-hor">
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
  }else if($row12['status']=='User'){
    $sq="select * from user where hostal_id=$hostal_id and id=$userid";
            $res=$con->query($sq);
            $ro=$res->fetch_assoc();
                            ?>





       <li class="mar-btm">
                                <div class="media-right">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circle img-sm" alt="Profile Picture">
                                </div>
                                <div class="media-body1 pad-hor speech-right">
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
                            <input type="text" name="message" id="message" placeholder="Enter your text" required class="form-control chat-input">
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
        

       

      
      </div>
    </div>
  </section>
    <!-- ================ Explore section end ================= --> 



<script type="text/javascript">
    $(document).ready(function(){
        

    // Scroll to the top of the message container
    $(".msg-container").scrollTop(4050);

setInterval(function () {
        //$('ul').load('ul');
         $(".media-block").load(window.location.href + " .media-block");
    }, 1000);
    });
</script>

  <!-- ================ start footer Area ================= -->
 <?php
include 'footer.php';
?>
