<?php
include'header.php';
require 'connection.php';

?>

<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="">
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Mess </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Wardan</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Mess</li>
                </ol>
              </nav>
            </div>


             <div class="row">
              
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select Hostal</h4>
                    <p class="card-description">  </p>
                    <form class="forms-sample" action="#" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Select Hostal Name</label>
                        <select class="form-control" name="hostal_name" id="exampleInputName1" class="select" placeholder="Name">
                          <option value="">Select Hostal</option>
                          <?php
                          $sql="select * from wardan";
                          $result=$con->query($sql);
                          $count=$result->num_rows;
                          if($count>0){
                            while($row=$result->fetch_assoc()){
                              ?>
                              <option value="<?php echo $row['id'];?>"><?php echo $row['hostal_name'];?></option>
                              <?php
                            }
                          }

                          ?>
                        </select>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            
             
            
            <div class="row">
             
             
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Mess</h4>
                    <p class="card-description"> Wardan <code>View Mess</code>
                    </p>
                    <div style="overflow:scroll-x">
                      <?php
$id=$_POST['hostal_name'];
$sql="select * from mess where hostal_id=$id ";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
$row=$result->fetch_assoc();

                      ?>
          <form class="forms-sample" action="#" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Code</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1"  value="<?php echo $row['code'];?>" placeholder="Name">
                        
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['location'];?>"  placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mess Capacity</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['mess_capacity'];?>"  placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Breakfast Availability</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['breakfast_availability'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Lunch Availability</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['lunch_availability'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Dinner Availability</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['dinner_availability'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Snacks Availability</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['snacks_availability'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Breakfast Timing</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['breakfast_timing'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Lunch Timing</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['lunch_timing'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Dinner Timing</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['dinner_timing'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Snacks Timing</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['snacks_timing'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Opening</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['opening'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Closing</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['closing'];?>" placeholder="Name">
                          
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" class="form-control" name="hostal_name" id="exampleInputName1" value="<?php echo $row['price'];?>" placeholder="Name">
                          
                      </div>
                      
                      
                      
                    </form>

                    <?php
                  }

                    ?>
                    </div>
                  </div>
                </div>
              </div>
      
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
 var list_table = $("#example").dataTable({
            "sScrollX": "100%",
            "sScrollXInner": "110%",
            "bScrollCollapse": true
        }); 
</script>


   <?php
include 'footer.php';
 ?>