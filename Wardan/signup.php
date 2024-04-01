<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <link rel="stylesheet" href="style.css">
	<style type="text/css">
		@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
.well{
	margin-bottom: -7px;
}
	</style>

</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	 <div class="wrapper">
	 <div class="title well" >
    <h1 >HOSTEL REGISTRATION</h1>
</div>
	<div class="col-lg-12 well"  style="background-color: #fff;">
	<div class="row">
				<form action="signup_action.php" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Full Name</label>
								<input type="text" placeholder="Enter First Name Here.." name="name" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Email</label>
								<input type="text" placeholder="Enter Email Here.." name="email" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Gender</label>
							<select name="gender"class="form-control">
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>


							</select>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Aadhar</label>
								<input type="text" name="aadhar" placeholder="Enter AAdhar no Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Contact Number</label>
								<input type="text" name="contact" placeholder="Enter Contact number Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Qualification</label>
								<input type="text" name="qualification" placeholder="Enter qualification Here.." class="form-control">
							</div>		
						</div>
						<div class="form-group">
							<label>Profile Image</label>
							<input type="file" name="profile" placeholder="Enter profile image Here.." class="form-control">
						</div>	
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Hostal name</label>
								<input type="text" name="hostal_name" placeholder="Enter hostal name Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Hostal Address</label>
								<textarea  name="hostal_address" .placeholder="Hostal Address" class="form-control" rows="1">
								</textarea>
							</div>	
						</div>	
						<div class="form-group">
							<label>Hostal Type</label>
							<select name="hostal_type" id="hostal_type"class="form-control">
								<option value="">Select Type</option>
								<option value="Private">Private</option>
								<option value="College">College</option>


							</select>
						</div>
						<div class="form-group" id="hst_type" style="display: none;">
							<input type="checkbox" name="attendance" value="yes" >
							<label>Attendence</label>
							<input type="checkbox" name="mess" value="yes" >
							<label>Mess</label>
							<input type="checkbox" name="fee" value="yes" >
								<label>Fees management</label><br>
							<input type="checkbox" name="visitor" value="yes" >
								<label>Visitor management</label>
							
								
						</div>

									<div class="form-group">
							<label>Hostal Second Type</label>
							<select name="hostal_2_type"class="form-control">
								<option value="">Select Type</option>
								<option value="Girls">Girls</option>
								<option value="Boys">Boys</option>
							</select>
						</div>
												<div class="form-group">
							<label>Hostal Image</label>
							<input type="file" name="hostal_image" placeholder="Enter image Here..." class="form-control">
						</div>					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter Password Here.." class="form-control">
					</div>		
						
					
					<button type="submit" class="btn btn-lg btn-info">Submit</button>
					<span style="text-align: center;margin-left:150px ;">Already a member?<a href="index.php">Login Here</a></span>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){

$('#hostal_type').change(function(){
		
	var type=$(this).val();
	if(type=='Private'){
	$('#hst_type').show();}
	else{
		$('#hst_type').hide();
	}

});
	});
</script>
</html>