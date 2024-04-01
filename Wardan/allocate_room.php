<?php
include 'header.php';
 require 'connection.php';
 session_start();
           
 $hostal_id=$_SESSION['id'];            
$userid=$_GET['id'];
$sq="SELECT * 
                FROM user where hostal_id=$hostal_id and id=$userid";
                $res=$con->query($sq);
                $ro=$res->fetch_assoc();
                $room_preference=$ro['room_preference'];
      
            
?>
        <!-- Booking End -->


        <!-- Room Start -->

    <!-- ================ header section end ================= -->  
  
  <!-- ================ start banner area ================= --> 
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Accomodation</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
            </ol>
          </nav>
                </div>
            </div>
    </div>
    </section>
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
        <h2>Explore Our Rooms</h2>
      </div>

      <div class="row pb-4">


 
                    <?php
$sql="select * from room where room_status='Available' and hostal_id=$hostal_id and room_type='$room_preference'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>
        <div class="col-md-6 col-xl-4 mb-5">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="uploads/<?php echo $row['image'];?>" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">&#8377;<?php echo $row['price'];?> <sub>/ Per Month</sub></h3>
              <h4 class="card-explore__title"><a href="#"><?php echo $row['room_type'];?> Bed</a></h4>
              <p><?php echo $row['capacity'];?> Sharing </p>
              <a class="card-explore__link" href="allocate.php?user=<?php echo $userid?>&&room=<?php echo $row['id']?>">Allocate <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

             <?php
    }
}
                    ?>

        

        

        

       

      
      </div>
    </div>
  </section>
    <!-- ================ Explore section end ================= --> 





  <!-- ================ start footer Area ================= -->
 <?php
include 'footer.php';
?>