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
                    <h1>visitor Request</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">visitor Request</li>
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
        <h2>Visitor Request</h2>
      </div>

      <div class="row pb-4">


     <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SL No</th>
            <th>Visitor Name</th>
            <th>Ralation</th>
            <th>Date</th>
            
            <th>Time</th>
            <th>Username</th>
            
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql = "SELECT visitor.visitor_name,visitor.relation,visitor.date_visit,visitor.time_visit,user.name,visitor.id,visitor.visitor_status,visitor.userid,visitor.pass_file FROM user INNER JOIN visitor ON visitor.userid = user.id where user.hostal_id=$hostal_id order by visitor.id desc";
        $result = $con->query($sql);
        $count = $result->num_rows;
        if($count > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['visitor_name']; ?></td>
            <td><?php echo $row['relation']; ?></td>
            <td><?php echo $row['date_visit']; ?></td>
            
            <td><?php echo $row['time_visit']; ?></td>
            <td><?php echo $row['name']; ?></td>
            
            
            <td>

 <a href="generate_visitorpass.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['visitor_status'] == 1 ? 'ACCEPTED' : 'ACCEPT'; ?>
                </a> </td>
                <td>
                <a href="reject_visitor.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['visitor_status'] == 2 ? 'REJECTED' : 'REJECT'; ?>
                </a>

            </td>
            <td>
                <?php

                if($row['visitor_status'] == 1&& $row['userid']!=""&&$row['pass_file']!=""){
                    ?>
                     <a href="pdf/<?php echo $row['pass_file']; ?>">View Pass</a>
                    <?php
                }
                ?>
               

                </td>
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