<?php
include 'header.php';
?>
	<!-- ================ header section end ================= -->		
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="about">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>About Us</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


	<!-- ================ welcome section start ================= -->	
  <section class="welcome pt-0 section-margin">
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

	<!-- ================ video section start ================= -->	
	
  <!-- ================ video section end ================= -->	

	<!-- ================ special section start ================= -->
 
  <!-- ================ special section end ================= -->


	<!-- ================ carousel section start ================= -->
 
  <!-- ================ carousel section end ================= -->



  <!-- ================ start footer Area ================= -->
  <?php

include 'footer.php';
?>