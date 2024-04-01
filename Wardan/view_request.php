<?php
include 'header.php';
 require 'connection.php';
 session_start();
 $hostal_id=$_SESSION['id'];            

      
            
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
                    <h1>Request</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Request</li>
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
        <h2>Requests for Room Allocation</h2>
      </div>

      <div class="row pb-4">


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
            
            <th >Action</th>
            <th>QRCode</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql = "SELECT * 
                FROM user where hostal_id=$hostal_id";
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
            
           <!--  <td>
                <a href="accept_request.php?id=<?php echo $row['rid']; ?>">
                    <?php echo $row['request_status'] == 1 ? 'ACCEPTED' : 'ACCEPT'; ?>
                </a> |
                <a href="reject_request.php?id=<?php echo $row['rid']; ?>">
                    <?php echo $row['request_status'] == 2 ? 'REJECTED' : 'REJECT'; ?>
                </a>
            </td> -->
            <td>
<?php
$user=$row['id'];
$s="select * from allocate where userid=$user";
$r=$con->query($s);
$c=$r->num_rows;
if($c>0){
    ?>
   Allocated
    <?php
}
else{
?>
                <a href="allocate_room.php?id=<?php echo $row['id']; ?>">
                   Allocate Room
                </a> 
                <?php
            }
                ?>
            </td>
            <td><a href="qr.php?uid=<?php echo $row['id']; ?>" target="_blank">  Attendence QRCode</a></td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

        

       

      
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