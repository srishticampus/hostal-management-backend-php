<?php
include 'header.php';
require 'connection.php';
session_start();
$wardan_id=$_SESSION['id'];
$sql="select * from wardan where id=$wardan_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

?>
        <!-- Booking End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Profile</h6>
                    <!-- <h1 class="mb-5"><span class="text-primary text-uppercase">Luxury Room</span></h1> -->
                </div>
                <div class="row g-5">
                    <div class="col-lg-2">
                    </div>
                  
                             
                    <div class="col-lg-8">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="profile_update.php" method="post" enctype="multipart/form-data">
                                <div class="row g-3">

                                     <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="rand_no" placeholder="Number" class="form-control" disabled value="<?php echo $row['hostal_rand_id'];?>">
                                            <label for="select3">Hostal Number</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           <input type="text" placeholder="Enter First Name Here.." name="name" class="form-control" value="<?php echo $row['name'];?>">
                                            <label for="name">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" placeholder="Enter Email Here.." name="email" class="form-control" value="<?php echo $row['email'];?>">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" name="aadhar" placeholder="Enter AAdhar no Here.." class="form-control" value="<?php echo $row['aadhar'];?>">
                                            <label for="checkin">Aadhar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                           <input type="text" name="contact" placeholder="Enter Contact number Here.." class="form-control"value="<?php echo $row['contact'];?>">
                                            <label for="checkout">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           <select name="gender"class="form-select">
                                            <?php
$gender=$row['gender'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Male" <?php if($gender=='Male')echo "selected";?>>Male</option>
                                <option value="Female" <?php if($gender=='Female')echo "selected";?>>Female</option>


                            </select>
                                            <label for="select1">Gender</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="qualification" placeholder="Enter qualification Here.." class="form-control" value="<?php echo $row['qualification'];?>">
                                            <label for="select2">Qualification</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="password" placeholder="Enter Password Here.." class="form-control" value="<?php echo $row['password'];?>">
                                            <label for="select3">Password</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" name="hostal_image" placeholder="Enter image Here.." class="form-control">
                                            <input type="image" name=""src="uploads/<?php echo $row['profile'];?>" width="200" height="200">
                                            <label for="select3">Profile Image</label>
                                          </div>
                                    </div>
                                     <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" name="hostal_image" placeholder="Enter image Here.." class="form-control">
                                            <input type="image" name=""src="uploads/<?php echo $row['hostal_image'];?>" width="200" height="200">
                                            <label for="select3">Hostel Image</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                          <input type="text" name="hostal_name" placeholder="Enter hostal name Here.." class="form-control" value="<?php echo $row['hostal_name'];?>">
                                            <label for="message">Hostel Name</label>
                                        </div>
                                    </div>
                                      <div class="col-12">
                                        <div class="form-floating">
                                            <textarea  name="hostal_address" .placeholder="Hostal Address" class="form-control" rows="1"><?php echo $row['hostal_address'];?>
                                </textarea>
                                            <label for="message">Hostal Address</label>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-floating">
                                    <select name="hostal_type"class="form-select">
                                        <?php
                                        $hostal_type=$row['hostal_type'];
                                        ?>
                                <option value="">Select Type</option>
                                <option value="Private" <?php if($hostal_type=='Private') echo 'selected';?>>Private</option>
                                <option value="College" <?php if($hostal_type=='College') echo 'selected';?>>College</option>


                            </select>
                                            <label for="select1">Hostal Type</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                          
                                            <select name="hostal_2_type"class="form-select">
                                                <?php
$hostal_2_type=$row['hostal_2_type'];
                                                ?>

                                <option value="">Select Type</option>
                                <option value="Girls" <?php if($hostal_2_type=='Girls') echo 'selected';?>>Girls</option>
                                <option value="Boys" <?php if($hostal_2_type=='Boys') echo 'selected';?>>Boys</option>


                            </select>
                                            <label for="select2">Hostal Second Type</label>
                                          </div>
                                    </div>
                                      <div class="col-md-12">
                                       
                                          
                                          <input type="checkbox" name="attendance" value="yes" <?php if($row['is_attendence']=='yes') echo 'checked';?> >
                            <label>Attendence</label>
                            <input type="checkbox" name="mess" value="yes" <?php if($row['is_mess']=='yes') echo 'checked';?>>
                            <label>Mess</label>
                            <input type="checkbox" name="fee" value="yes" <?php if($row['is_fee']=='yes') echo 'checked';?>>
                                <label>Fees management</label>
                            <input type="checkbox" name="visitor" value="yes" <?php if($row['is_visitor']=='yes') echo 'checked';?>>
                                <label>Visitor management</label>
                                         
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