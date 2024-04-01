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
                    <h1>Out Pass</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Out pass</li>
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
        <h2>Out Pass</h2>
      </div>

      <div class="row pb-4">


      <<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            
            <th>Date</th>
            <th>Time</th>
            <th>Purpose</th>
            <th>Return Time</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql = "SELECT user.name,user.email,user.contact_number,outpass.pass_date,outpass.pass_time,outpass.purpose,outpass.return_time,outpass.id,outpass.outpass_status,outpass.user_id,outpass.pass_file FROM user INNER JOIN outpass ON outpass.user_id = user.id where user.hostal_id=$hostal_id order by outpass.id desc";
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
            
            <td><?php echo $row['pass_date']; ?></td>
            <td><?php echo $row['pass_time']; ?></td>
            <td><?php echo $row['purpose']; ?></td>
            <td><?php echo $row['return_time']; ?></td>
            
            <td>

 <a href="generate_pass.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['outpass_status'] == 1 ? 'ACCEPTED' : 'ACCEPT'; ?>
                </a> </td>
                <td>
                <a href="reject_outpass.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['outpass_status'] == 2 ? 'REJECTED' : 'REJECT'; ?>
                </a>

            </td>
            <td>
                <?php

                if($row['outpass_status'] == 1&& $row['user_id']!=""&&$row['pass_file']!=""){
                    ?>
                     <a href="pdf/<?php echo $row['pass_file']; ?>">Pass</a>
                    <?php
                }else{

                    ?>
                No Pass
                    <?php
                }
                ?>
               

                </td>
        </tr></tbody>
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