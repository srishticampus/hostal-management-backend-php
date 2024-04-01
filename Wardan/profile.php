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


        <!-- Room Start -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <!-- ================ header section end ================= -->  
  
  <!-- ================ start banner area ================= --> 
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Profile</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
        <h2>Profile</h2>
      </div>

      <div class="row pb-4">


      <div class="comment-form">
                                            <h4>Profile</h4>
                                                       <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Updated Successfully
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Updated Failed
  </div>';
                        }

                    }

                ?>
                                            <form  action="profile_update.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="select3">Hostal Number</label>
                                                                     <input type="text" name="rand_no" placeholder="Number" class="form-control" disabled value="<?php echo $row['hostal_rand_id'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="name">Full Name</label>
                                                                      <input type="text" placeholder="Enter First Name Here.." name="name" class="form-control" value="<?php echo $row['name'];?>">
                                            
                                                            </div>
                                                    </div>
                                                   <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                               <label for="email">Your Email</label>
                                                                     <input type="text" placeholder="Enter Email Here.." name="email" class="form-control" value="<?php echo $row['email'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                              <label for="checkin">AAdhaar</label>
                                                                         <input type="text" name="aadhar" placeholder="Enter AAdhar no Here.." class="form-control" value="<?php echo $row['aadhar'];?>">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="checkout">Contact Number</label>
                                                                                 <input type="text" name="contact" placeholder="Enter Contact number Here.." class="form-control"value="<?php echo $row['contact'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                 <label for="select1">Gender</label>
                                                                                <select name="gender"class="form-select">
                                            <?php
$gender=$row['gender'];
                                            ?>

                                <option value="">Select</option>
                                <option value="Male" <?php if($gender=='Male')echo "selected";?>>Male</option>
                                <option value="Female" <?php if($gender=='Female')echo "selected";?>>Female</option>


                            </select>
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                              <label for="select2">Qualification</label>
                                                                                     <input type="text" name="qualification" placeholder="Enter qualification Here.." class="form-control" value="<?php echo $row['qualification'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                 <label for="select3">Password</label>
                                                                   <input type="text" name="password" placeholder="Enter Password Here.." class="form-control" value="<?php echo $row['password'];?>">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="select3">Profile Image</label>
                                                                    <input type="file" name="profile" placeholder="Enter image Here.." class="form-control">
                                            <input type="image" name=""src="uploads/<?php echo $row['profile'];?>" width="200" height="200">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                             <label for="select3">Hostel Image</label>
                                                                  <input type="file" name="hostal_image" placeholder="Enter image Here.." class="form-control">
                                            <input type="image" name=""src="uploads/<?php echo $row['hostal_image'];?>" width="200" height="200">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                 <label for="message">Hostel Name</label>
                                                                 <input type="text" name="hostal_name" placeholder="Enter hostal name Here.." class="form-control" value="<?php echo $row['hostal_name'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="message">Hostel Address</label>
                                                                    <input type="text" name="hostal_address" .placeholder="Hostal Address" class="form-control" value="<?php echo $row['hostal_address'];?>">
                               

                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                               <label for="select1">Hostal Type</label>
                                                                  <select name="hostal_type"class="form-select">
                                        <?php
                                        $hostal_type=$row['hostal_type'];
                                        ?>
                                <option value="">Select Type</option>
                                <option value="Private" <?php if($hostal_type=='Private') echo 'selected';?>>Private</option>
                                <option value="College" <?php if($hostal_type=='College') echo 'selected';?>>College</option>


                            </select>
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                 <label for="select2">Hostal Second Type</label>
                                                                          <select name="hostal_2_type"class="form-select">
                                                <?php
$hostal_2_type=$row['hostal_2_type'];
                                                ?>

                                <option value="">Select Type</option>
                                <option value="Girls" <?php if($hostal_2_type=='Girls') echo 'selected';?>>Girls</option>
                                <option value="Boys" <?php if($hostal_2_type=='Boys') echo 'selected';?>>Boys</option>


                            </select>
                                            
                                                            </div>
                                                    </div>
                                                      <div class="form-group form-inline">
                                                            <div class="form-group col-lg-12 col-md-12 name">
                                       
                                          
                                          <input type="checkbox" name="attendance" value="yes" <?php if($row['is_attendence']=='yes') echo 'checked';?> >&nbsp;
                            <label>Attendence</label>&nbsp;&nbsp;
                            <input type="checkbox" name="mess" value="yes" <?php if($row['is_mess']=='yes') echo 'checked';?>>&nbsp;
                            <label>Mess</label>&nbsp;&nbsp;
                            <input type="checkbox" name="fee" value="yes" <?php if($row['is_fee']=='yes') echo 'checked';?>>&nbsp;
                                <label>Fees management</label>&nbsp;&nbsp;
                            <input type="checkbox" name="visitor" value="yes" <?php if($row['is_visitor']=='yes') echo 'checked';?>>&nbsp;
                                <label>Visitor management</label>&nbsp;&nbsp;
                                         
                                    </div>
                                </div>
                                                     <button class="button button-postComment button--active" type="submit">Update</button>
                                                  
                                            </form>
                                    </div>

        

       

      
      </div>
    </div>
  </section>
    <!-- ================ Explore section end ================= --> 





  <!-- ================ start footer Area ================= -->
 <?php
include 'footer.php';
?>
<script type="text/javascript" src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="
https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script type="text/javascript" >
  new DataTable('#example', {
    scrollX: true
});
</script>