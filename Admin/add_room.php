<?php

include'header.php';
 require 'connection.php';            
$query = "select room_number from room order by id desc limit 1";
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
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Rooms </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Rooms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Rooms</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Rooms</h4>
                    <hr>
                   
                    <form class="forms-sample" action="room_action.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                         <label for="exampleInputName1">Room Number</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="room_number" placeholder="Room Number" value="<?php echo $value;?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Room Type</label>
                        <select class="form-control" id="exampleInputEmail3" name="room_type" placeholder="Room Type">
                          <option>Select</option>
                          <option>Single</option>
                          <option>Double</option>
                          <option>Dormitory</option>
                        </select>
                      </div>
                      <div class="form-group">
                         <label for="exampleInputPassword4">Capacity</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="capacity" placeholder="Capacity">
                      </div>
                      <div class="form-group">
                       
                        <label for="exampleInputPassword4">Price</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

                       <div class="col-md-6">
                           <label >Status</label>
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
                      
                   
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
            
            
           
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
        <?php
include 'footer.php';
      ?>