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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Users </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                            Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Users</h6>
                    <!-- <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1> -->
                </div>
                <div class="row g-4">
                    
                   <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4"> <span class="text-primary text-uppercase">Mess</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
  <form action="room_action.php" method="post" enctype="multipart/form-data">
                                <div class="row g-3">
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                           <select class="form-control"  name="food_type" id="food_type" placeholder="Food Type">
                          <option>Select</option>
                          <option value="Veg">Veg</option>
                          <option value="Non Veg">Non Veg</option>
                          <option value="No Food">No Food</option>
                        </select>
                                            <label for="email">Food</label>
                                        </div>
                                    </div>
                                    
                                  





                                  













                                  
                                    
                                </div>
                                    
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
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