
<?php
require 'connection.php';

@session_start();

if(!isset($_SESSION['admin'])){
  echo "please login";
   echo '<a href="index.php">Click Here...</a>';
 // header("location:login.php");
  exit();
}

  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php" style="font-size: 52px;font-weight: bold;
  background: -webkit-linear-gradient(#f492f0, #a18dce);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">ADMIN<!-- <img src="assets/images/logo.svg" alt="logo" /> --></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php" style="font-size: 52px;font-weight: bold;
  background: -webkit-linear-gradient(#f492f0, #a18dce);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">ADMIN
            <!-- <img src="assets/images/logo-mini.svg" alt="logo" /> -->
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
          
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            
              
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
             
            </li>
            <li class="nav-item dropdown">
              
          
            </li>
            <li class="nav-item dropdown">
            
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
             
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
            
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            


             <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">Hostel</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="view_wardan.php">View Hostel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_room.php">View Rooms</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view_mess.php">View Mess</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
             <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="view_users.php">View Users</a></li>
                  
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="mdi.php">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="basic_elements.php">
                <span class="menu-title">Add Rooms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chartjs.php">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="basic-table.php">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li> -->
           <!--  <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="blank-page.php"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
                </ul>
              </div>
            </li> -->
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3"><a class="nav-link" href="logout.php"> Logout</a></h6>
                </div>
                
              </span>
            </li>
          </ul>
        </nav>
 