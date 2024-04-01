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


        <!-- Room Start -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <!-- ================ header section end ================= -->  
  
  <!-- ================ start banner area ================= --> 
    <section class="contact-banner-area" id="contact">
        <div class="container h-100">
            <div class="contact-banner">
                <div class="text-center">
                    <h1>Mess</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">MEss</li>
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
        <h2>Mess</h2>
      </div>

      <div class="row pb-4">


      <div class="comment-form">
                                            <h4>Mess</h4>
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
                                            <form action="mess_action.php" method="post">
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="name">Code</label>
                                                                    <input type="text" placeholder="Enter Code Here.." name="code" required class="form-control" value="<?php echo $row['code'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="email">Location</label>
                           <input type="text" required placeholder="Enter Location.." name="location" class="form-control" value="<?php echo $row['location'];?>">
                                            
                                                            </div>
                                                    </div>
                                                   <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="name">Mess Capacity</label>
   <input type="text" name="mess_capacity" required placeholder="Enter Capacity no Here.." class="form-control" value="<?php echo $row['mess_capacity'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                               <label for="checkout">Breakfast Availability</label>
                    <select name="breakfast_availability" required class="form-select">
                                            <?php
$breakfast_availability=$row['breakfast_availability'];
                                            ?>

                                <option value="">Select Breakfast Availability</option>
                                <option value="Yes" <?php if($breakfast_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($breakfast_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="checkout">Lunch Availability</label>
    <select name="lunch_availability" required class="form-select">
                                            <?php
$lunch_availability=$row['lunch_availability'];
                                            ?>

                                <option value="">Select Lunch Availability</option>
                                <option value="Yes" <?php if($lunch_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($lunch_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="select2">Dinner Availability</label>
    <select name="dinner_availability" required class="form-select">
                                            <?php
$dinner_availability=$row['dinner_availability'];
                                            ?>

                                <option value="">Select Dinner Availability</option>
                                <option value="Yes" <?php if($dinner_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($dinner_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="checkout">Snacks Availability</label>
                                                                <select name="snacks_availability" class="form-control" required>
                                                                                 <?php
$snacks_availability=$row['snacks_availability'];
                                            ?>

                                <option value="">Select Snacks Availability</option>
                                <option value="Yes" <?php if($snacks_availability=='Yes')echo "selected";?>>Yes</option>
                                <option value="No" <?php if($snacks_availability=='No')echo "selected";?>>No</option>


                            </select>
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="checkout">Breakfast Timing</label>
                                                                   <input required type="text" name="breakfast_timing" placeholder="Enter Breakfast Timing Here.." class="form-control"value="<?php echo $row['breakfast_timing'];?>">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="checkout">Lunch Timing</label>
                                                                     <input required type="text" name="lunch_timing" placeholder="Enter Lunch Timing Here.." class="form-control"value="<?php echo $row['lunch_timing'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                              <label for="checkout">Dinner Timing</label>
                                                                  <input required type="text" name="dinner_timing" placeholder="Enter Dinner Timing Here.." class="form-control"value="<?php echo $row['dinner_timing'];?>">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                                <label for="checkout">Snacks Timing</label>
                                                                 <input required type="text" name="snacks_timing" placeholder="Enter Snacks Here.." class="form-control"value="<?php echo $row['snacks_timing'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="checkout">Opening</label>
                                                                  <input type="text" required name="opening" placeholder="Enter Opening Here.." class="form-control"value="<?php echo $row['opening'];?>">
                                            
                                                            </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                            <div class="form-group col-lg-6 col-md-6 name">
                                                               <label for="checkout">Closing</label>
                                                                 <input required type="text" name="closing" placeholder="Enter Closing Here.." class="form-control"value="<?php echo $row['closing'];?>">
                                            
                                                            </div>
                                                            <div class="form-group col-lg-6 col-md-6 email">
                                                                <label for="checkout">Price (per Month)</label>
                                                                  <input required type="text" name="price" placeholder="Enter Price Here.." class="form-control"value="<?php echo $row['price'];?>">
                                            
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