<?php
include 'header.php';
 require 'connection.php';
           
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
                     <?php
                    if(isset($_GET['status'])){
                        $msg=$_GET['status'];
                        if($msg=='success'){
                            echo ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Added Successfully
  </div>';
                        }
                        else if($msg=='failed'){
                                   echo ' <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Added Failed
  </div>';
                        }

                    }

                ?>

                </div>
            </div>
    </div>

    </section>
  <!-- ================ end banner area ================= -->
  

  <!-- ================ start banner form ================= --> 
  <?php
if(isset($_SESSION['id'])){
  ?>


  <form class="form-search form-search-position accomodation" action="room_action.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 gutters-19">
          <div class="form-group">
            <input class="form-control" type="text" name="room_number" placeholder="Room Number" value="<?php echo $value;?>">
          </div>
        </div>
        <div class="col-lg-6 gutters-19">
          <div class="row">
            <!-- name="capacity" placeholder="Capacity"> -->
            <div class="col-sm">
              <div class="form-group">
                <div class="form-select-custom">
                  <select id="room_type" required  name="room_type" placeholder="Room Type">
                          <option value="">Select Room Type</option>
                          <option value="Single">Single</option>
                          <!-- <option>Double</option> -->
                          <option value="Sharing">Sharing</option>
                        </select>
                </div>
              </div>
            </div>

            <div class="col-sm gutters-19">
              <div class="form-group">
                <div class="form-select-custom">
                 <input class="form-control" id="capacity" required type="number" name="capacity" placeholder="Capacity" >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <input type="text" class="form-control" required id="exampleInputPassword4" name="price" placeholder="Price">
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <input type="file" name="img" required class="file-upload-default">
            </div>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
                <label>Status</label>
                <br>
              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" value="Available" id="membershipRadios1"  checked> Available </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" value="Occupied" id="membershipRadios2"> Occupied </label>
            </div>
          </div>
        </div>
        <div class="col-lg-2 gutters-19">
          <div class="form-group">
            <button class="button button-form" type="submit">Add</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php
}
  ?>
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
        $sql="";
        if(isset($_SESSION['id'])){

$sql="select * from room where hostal_id=$id";
}
else{
  $sql="select * from room ";
}
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
              <!-- <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a> -->
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#room_type').change(function(){
      var room_type=$(this).val();
      if(room_type=='Single'){
        $('#capacity').hide();
        $('#capacity').val(1);
      }
      else{
         $('#capacity').show();

      }

    });

  });

</script>