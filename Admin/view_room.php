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
              <h3 class="page-title">Rooms </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Wardan</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Rooms</li>
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
                    <h4 class="card-title">View Rooms</h4>
                    <p class="card-description"> Wardan <code>View Rooms</code>
                    </p>
                    <div style="overflow:scroll-x">
                      <?php
$id=$_POST['hostal_name'];
$sql="select * from room where hostal_id=$id ";
$result=$con->query($sql);

                      ?>
          <table id="example" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Room Number </th>
                          <th> Room Type </th>
                          <th> Capacity </th>
                          <th> Room Status </th>
                           <th> Price </th>
                            <th> Image </th>
                            
                              
                                 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$i=1;

$count=$result->num_rows;
if($count>0){
  while($row=$result->fetch_assoc()){
    ?>
    <tr>
                          <td>
                            <?php echo $i++;?>
                          </td>
                           <td><?php echo $row['room_number'];?></td>
                            <td><?php echo $row['room_type'];?></td>
                             <td><?php echo $row['capacity'];?></td>
                              <td><?php echo $row['room_status'];?></td>
                               <td><?php echo $row['price'];?></td>
                                
                                 <td><img src="../Wardan/uploads/<?php echo $row['image'];?>"></td>
                                  
                          
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