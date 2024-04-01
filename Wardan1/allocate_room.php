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


<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
 







        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">

                    <?php
$sql="select * from room where room_status='Available' and hostal_id=$hostal_id and room_type='$room_preference'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>


  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="uploads/<?php echo $row['image'];?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">&#8377;<?php echo $row['price'];?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['room_number'];?></h5>
                                   <!--  <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['capacity'];?> Bed</small>
                                   <!--  <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> -->
                                </div>
                                <!-- <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p> -->
                                <div class="d-flex justify-content-between">
                                    <!-- <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a> -->
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="allocate.php?user=<?php echo $userid?>&&room=<?php echo $row['id']?>">Allocate</a>
                                </div>
                            </div>
                        </div>
                    </div>







        <?php
    }
}
                    ?>
                  
                 
                   
                  
               
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Testimonial Start -->
       
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
       <br><br>
       <br><br>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
     <?php
include 'footer.php';
?>