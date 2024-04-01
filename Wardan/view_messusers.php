<?php
include 'header.php';
 require 'connection.php';
 session_start();
             
$wardan_id=$_SESSION['id'];
$sql="select * from mess where hostal_id=$wardan_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();
      
            
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
                    <h1>Mess</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">MEss</li>
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
        <h2>Mess</h2>
      </div>

      <div class="row pb-4">


      <div class="comment-form">
                                            <h4>Mess</h4>
                                            <div class="position-relative mx-auto" style="max-width: 400px;">
  <form action="room_action.php" method="post" enctype="multipart/form-data">
                                <div class="row g-3">
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                           <select class="form-control"  name="food_type" id="food_type" placeholder="Food Type">
                          <option>Select Food</option>
                          <option value="Veg">Veg</option>
                          <option value="Non Veg">Non Veg</option>
                          <option value="no Food">No Food</option>
                        </select>
                        <br>
                                            <!-- <label for="email">Food</label> -->
                                        </div>
                                    </div>
                                    
                                  





                                  













                                  
                                    
                                </div>
                                    
                            </form>
                            </div>
                                    </div>

        

       

      
      </div>

      <div class="row g-4">
                    
                    <div class="col-lg-12 col-md-12 rounded" >
                        <table id="example1" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>SL No</th>
            <th> Name</th>
            <th>
                Email
            </th>
            <th>Contact Number</th>
            <th>Room Number</th>
            
            
           
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>
                    </div>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#food_type').change(function(){
            var food_type=$(this).val();
           
            $.ajax({
                url:"select_food.php",
                type:"post",
                data:{food_type:food_type},
                success:function(data){
                    $('tbody').html(data);

                }

            });

        });
    });
</script>
        <!-- Footer Start -->
       <?php
include 'footer.php';
?>