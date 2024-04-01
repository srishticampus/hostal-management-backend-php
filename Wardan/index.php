<?php
include 'header.php';
 $id=$_SESSION['id'];

?>
	<!-- ================ header section end ================= -->	

  <main class="site-main">
    

    <!-- ================ start banner area ================= --> 
    <section class="home-banner-area" id="home">
      <div class="container h-100">
        <div class="home-banner">
          <div class="text-center">
           <!--  <h4>See What a Difference a stay makes</h4>
            <h1>Luxury <em>is</em> personal</h1>
            <a class="button home-banner-btn" href="#">Book Now</a> -->
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end banner area ================= -->
  

    <!-- ================ start banner form ================= --> 
    
    <!-- ================ end banner form ================= --> 

    <!-- ================ welcome section start ================= --> 
    <section class="welcome">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
                 <?php
                  $sql="";
        if(isset($_SESSION['id'])){
$sql="select * from room where room_status='Available' and hostal_id=$id limit 3";
}
else{
  $sql="select * from room where room_status='Available' limit 3";
}
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    $i=7;
    while($row=$result->fetch_assoc()){
      $i=$i+2;
        ?>
              <div class="col-sm-<?php echo $i; ?>">
                <div class="card">
                  <img class="" src="uploads/<?php echo $row['image'];?>" alt="Card image cap">
                </div>
              </div>
              <!-- <div class="col-sm-5">
                <div class="card">
                  <img class="" src="img/home/welcomeBanner2.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="img/home/welcomeBanner3.png" alt="Card image cap">
                </div>
              </div> -->
              <?php
            }}
              ?>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Welcome</span> to our hostel</h2>
              <p>Hostel means a residential premise or centre set up by any household, private entity or individual to accommodate paying guest on rental basis for a fixed duration. </p>
            <p>A hostel is a form of low-cost, short-term shared sociable lodging where guests can rent a bed, usually a bunk bed in a dormitory sleeping 4–20 people</p>
            <p>The benefits of hostels include lower costs and opportunities to meet people from different places, find travel partners, and share travel experiences.</p>
            <!-- <a class="button button--active home-banner-btn mt-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ welcome section end ================= --> 


    <!-- ================ Explore section start ================= -->
    <section class="section-margin">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="img/home/bed-icon.png" alt="">
          </div>
          <h2>Explore Our Rooms</h2>
        </div>

        <div class="row">

                                                             <?php
                                                              $sql="";
        if(isset($_SESSION['id'])){
$sql="select * from room where room_status='Available' and hostal_id=$id limit 3";
}
else{
  $sql="select * from room where room_status='Available' limit 3";
}
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="uploads/<?php echo $row['image'];?>" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price"><?php echo $row['price'];?><sub>/ Per Month</sub></h3>
                <h4 class="card-explore__title"><a href="room.php"><?php echo $row['room_type'];?></a></h4>
                <p></p>
                <!-- <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
          <?php
        }}
          ?>

          

          
        </div>
      </div>
    </section>
    <!-- ================ Explore section end ================= --> 



    <!-- ================ video section start ================= --> 
  
    <!-- ================ video section end ================= --> 

    <!-- ================ special section start ================= -->
   
    
    <!-- ================ special section end ================= -->

    <!-- ================ carousel section start ================= -->
   
    <!-- ================ carousel section end ================= -->


    <!-- ================ news section start ================= -->
  
    <!-- ================ news section end ================= -->

  </main>



  <!-- ================ start footer Area ================= -->
  <?php
include 'footer.php';
?>