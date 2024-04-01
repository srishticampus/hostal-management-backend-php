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
              <h3 class="page-title">Users </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                    <h4 class="card-title">View Users</h4>
                    <p class="card-description"> Users <code>View Users</code>
                    </p>
                    <div style="overflow:scroll-x">
                      <?php
$id=$_POST['hostal_name'];
?>

         <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <?php
            $hostal_type = $row1['hostal_type'];
            if($hostal_type == 'College') {
            ?>
            <th>Batch</th>
            <?php
            }
            ?>
            <th>Address</th>
            <th>Mess Preference</th>
            <th>Room Preference</th>
            
          
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql = "SELECT * 
                FROM user where hostal_id=$id";
        $result = $con->query($sql);
        $count = $result->num_rows;
        if($count > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <?php
            $hostal_type = $row1['hostal_type'];
            if($hostal_type == 'College') {
            ?>
            <td><?php echo $row['batch'];?></td>
            <?php
            }
            ?>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['mess_preference']; ?></td>
            <td><?php echo $row['room_preference']; ?></td>
            
          
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
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