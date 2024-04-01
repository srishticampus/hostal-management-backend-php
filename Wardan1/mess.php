<?php
include 'header.php';
require 'connection.php';
session_start();
$wardan_id=$_SESSION['id'];
$sql="select * from mess where hostal_id=$wardan_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

?>
        <!-- Booking End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Mess</h6>
                    <!-- <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1> -->
                </div>
                <div class="row g-5">
                     <div class="col-lg-2">
                    </div>
                   <!--  <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-8">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="mess_action.php" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           <input type="text" placeholder="Enter First Name Here.." name="code" class="form-control" value="<?php echo $row['code'];?>">
                                            <label for="name">Code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" placeholder="Enter Location.." name="location" class="form-control" value="<?php echo $row['location'];?>">
                                            <label for="email">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" name="mess_capacity" placeholder="Enter Capacity no Here.." class="form-control" value="<?php echo $row['mess_capacity'];?>">
                                            <label for="checkin">Mess Capacity</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                      

                                                  <select name="breakfast_availability"class="form-select">
                                            <?php
$breakfast_availability=$row['breakfast_availability'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Yes" <?php if($breakfast_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($breakfast_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            <label for="checkout">Breakfast Availability</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           

                                                          <select name="lunch_availability"class="form-select">
                                            <?php
$lunch_availability=$row['lunch_availability'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Yes" <?php if($lunch_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($lunch_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            <label for="checkout">Lunch Availability</label>
                                           
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            



                                                          <select name="dinner_availability"class="form-select">
                                            <?php
$dinner_availability=$row['dinner_availability'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Yes" <?php if($dinner_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($dinner_availability=='No')echo "selected";?>>No</option>


                            </select>

                                            <label for="select2">Dinner Availability</label>
                                          </div>
                                    </div>




                                     <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                          



                                                              <select name="snacks_availability"class="form-select">
                                            <?php
$snacks_availability=$row['snacks_availability'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Yes" <?php if($snacks_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($snacks_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            <label for="checkout">Snacks Availability</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="breakfast_timing" placeholder="Enter Lunch Here.." class="form-control"value="<?php echo $row['breakfast_timing'];?>">
                                            <label for="checkout">Breakfast Timing</label>
                                           
                                          </div>
                                    </div>
                                  


                                  <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="text" name="lunch_timing" placeholder="Enter Snacks Here.." class="form-control"value="<?php echo $row['lunch_timing'];?>">
                                            <label for="checkout">Lunch Timing</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="dinner_timing" placeholder="Enter Lunch Here.." class="form-control"value="<?php echo $row['dinner_timing'];?>">
                                            <label for="checkout">Dinner Timing</label>
                                           
                                          </div>
                                    </div>




<div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="text" name="snacks_timing" placeholder="Enter Snacks Here.." class="form-control"value="<?php echo $row['snacks_timing'];?>">
                                            <label for="checkout">Lunch Timing</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="opening" placeholder="Enter Lunch Here.." class="form-control"value="<?php echo $row['opening'];?>">
                                            <label for="checkout">Opening</label>
                                           
                                          </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="text" name="closing" placeholder="Enter Snacks Here.." class="form-control"value="<?php echo $row['closing'];?>">
                                            <label for="checkout">Closing</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="price" placeholder="Enter Lunch Here.." class="form-control"value="<?php echo $row['price'];?>">
                                            <label for="checkout">Price</label>
                                           
                                          </div>
                                    </div>



                                    
                                      
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                     <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


       <br><br><br><br>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <?php
include 'footer.php';
    ?>