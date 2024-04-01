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
              <h3 class="page-title"> Hostel </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Hostel</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Hostel</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
             
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Hostel</h4>
                    <p class="card-description"> Hostel <code>View Hostel</code>
                    </p>
                    <div style="overflow:scroll-x">
          <table id="example" class="table table-striped table-bordered" style="width:100%;">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Hostal Name </th>
                               <th> Hostal Address </th>
                                <th> Hostal Type </th>
                                 <th> Hostal Image </th>
                          <th> Wardan Name </th>
                          <th> Email </th>
                          <th> Gender </th>
                          <th> Aadhar </th>
                           <th> Contact </th>
                            <th> Wardan Qualification </th>
                             <th> Profile </th>
                              
                                 <th>
                                   Action
                                 </th>
                                 
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$i=1;
$sql="select * from wardan";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
  while($row=$result->fetch_assoc()){
    ?>
    <tr>
                          <td>
                            <?php echo $i++;?>
                          </td>
                          <td><?php echo $row['hostal_name'];?></td>
                                   <td><?php echo $row['hostal_address'];?></td>
                                    <td><?php echo $row['hostal_type'];?></td>
                                    <td><img src="../Wardan/uploads/<?php echo $row['hostal_image'];?>"></td>
                           <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                             <td><?php echo $row['gender'];?></td>
                              <td><?php echo $row['aadhar'];?></td>
                               <td><?php echo $row['contact'];?></td>
                                <td><?php echo $row['qualification'];?></td>
                                 <td><img src="../Wardan/uploads/<?php echo $row['profile'];?>"></td>
                                  
                                     
                                     <td><a href="accept_wardan.php?id=<?php echo $row['id'];?>">


<?php
if($row['approve_status']==1){
  echo 'Accepted';
}
else {
  echo 'Accept';
}

?>


        </a>&nbsp;|&nbsp;<a href="reject_wardan.php?id=<?php echo $row['id'];?>">
          

<?php
if($row['approve_status']==2){
  echo 'Rejected';
}
else {
  echo 'Reject';
}

?>


        </a></td>
                          
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