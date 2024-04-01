<?php
include 'header.php';
?>
        <!-- Booking End -->

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- About Start -->
      <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1>
                        <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php
$sq="select * from room where hostal_id=$id";
$result=$con->query($sq);
$co=$result->num_rows;
echo $co;
                                    ?></h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php
$sq="select * from mess where hostal_id=$id";
$result=$con->query($sq);
$co=$result->num_rows;
echo $co;
                                    ?></h2>
                                        <p class="mb-0">Mess</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php
$sq="select * from user where hostal_id=$id ";
$result=$con->query($sq);
$co=$result->num_rows;
echo $co;
                                    ?></h2>
                                        <p class="mb-0">Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                                                    <?php
$sql="select * from room where room_status='Available' and hostal_id=$id limit 4";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
    while($row=$result->fetch_assoc()){
        ?>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="uploads/<?php echo $row['image'];?>" >
                            </div>
                            <!-- <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div> -->
                            <?php
                        }}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <br>
        <br>
        <br>
        <br>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
<?php
include 'footer.php';
?>