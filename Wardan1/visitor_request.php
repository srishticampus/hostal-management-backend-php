<?php
require 'connection.php';
include 'header.php';
$hostal_id=$_SESSION['id'];

?>
        <!-- Booking End -->




<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Visitor Request</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                            Visitor Request</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Visitor Request</h6>
                    <!-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1> -->
                </div>
                <div class="row g-4">
                    
                    <div class="col-lg-12 col-md-12 rounded" >
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
        </tr></tbody>
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
        <!-- Service End -->


        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
       <br><br>
       <br><br>
<br>
<br>

        <!-- Newsletter Start -->
       

 
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
        <!-- Footer Start -->
       <?php
include 'footer.php';
?>