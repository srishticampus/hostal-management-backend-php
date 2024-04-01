<?php
include 'header.php';
 require 'connection.php';
 session_start();
 $id=$_SESSION['id'];            
$query = "select room_number from room where hostal_id=$id order by id desc limit 1";
$result=$con->query($query);
$count=$result->num_rows;

    if ($count > 0) {
    $row = $result->fetch_assoc();
    $first_id = $row['room_number'];
    $value2 = substr($first_id, 3, 5);
   // echo $value2;
    $value2 = (int) $value2 + 1;

    $value2 = "RM" . sprintf('%06s', $value2);
    $value = $value2;
   // return $value;
    }
    else
    {
      $value2 = "RM000001";
      $value = $value2;}
      
            
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
 <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Add <span class="text-primary text-uppercase">Rooms</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
  <form action="room_action.php" method="post" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="exampleInputName1" name="room_number" placeholder="Room Number" value="<?php echo $value;?>">

                                            <label for="name">Room Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           <select class="form-control" id="exampleInputEmail3" name="room_type" placeholder="Room Type">
                          <option>Select</option>
                          <option>Single</option>
                          <option>Double</option>
                          <option>Dormitory</option>
                        </select>
                                            <label for="email">Room Type</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                           <input type="text" class="form-control" id="exampleInputPassword4" name="capacity" placeholder="Capacity">
                                            <label for="checkin">Capacity</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="text" class="form-control" id="exampleInputPassword4" name="price" placeholder="Price">
                                            <label for="checkout">Price</label>
                                        </div>
                                    </div>




<div class="col-md-4">
                                           
                                            <label for="checkin">Room Image</label>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="file" name="img" class="file-upload-default">
                                            
                                        </div>
                                    </div>










<div class="col-md-4">
                                        
                                            <label for="checkin">Status</label>
                                        
                                    </div>


                                   
                                    <div class="col-md-8">
                                         <div class="form-group row">
                                            
                           
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" value="Available" id="membershipRadios1"  checked> Available </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" value="Occupied" id="membershipRadios2"> Occupied </label>
                              </div>
                            </div>
                          </div>
                                    </div>
                                     <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Add</button>
                                    </div>
                                </div>
                                    
                            </form>
                            </div>
                        </div>
                    </div>
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
$sql="select * from room where hostal_id=$id";
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
                                   <!--  <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a> -->
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