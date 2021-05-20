<?php require_once("functions/connection.php"); ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Crypto Dashboard - Handmade meals
  </title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">

  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/cryptocoins/cryptocoins.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    <?php include("includes/header.php"); ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include("includes/sidebar.php"); ?>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Rates</div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard table-responsive">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#programs" role="tab" aria-controls="pills-home" aria-selected="true">Program</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#gyms" role="tab" aria-controls="pills-profile" aria-selected="false">Gym</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#restaurants" role="tab" aria-controls="pills-contact" aria-selected="false">Restaurant</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-doctors-tab" data-toggle="pill" href="#doctors" role="tab" aria-controls="pills-doctors" aria-selected="false">Doctor</a>
                                            </li>
                                            </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="programs" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Programs rate id</th>
                                                            <th>program name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rate = "SELECT programs_rate.id ,  programs_rate.scale , programs_rate.message,  programs.name , users.full_name FROM programs_rate INNER JOIN programs on programs.id = programs_rate.program_id INNER JOIN users on programs_rate.user_id = users.id ORDER by programs_rate.id DESC";
                                                        $query = mysqli_query($conn,$rate) or die("Error:".mysqli_error($conn)) ;
                                                        $result= mysqli_fetch_array($query);
                                                        do{
                                                            if ($result['scale'] == 1) {
                                                                $scale = '<i class="la la-star"></i>';
                                                            } 
                                                            else if($result['scale'] == 2) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                
                                                                ';
                                                            }
                                                            else if($result['scale'] == 3) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 4) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 5) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $result["id"] ?></td>
                                                            <td><?php echo $result["name"] ?></td>
                                                            <td><?php echo $result["full_name"] ?></td>
                                                            <td><?php echo $scale ?></td>
                                                            <td><?php echo $result["message"] ?></td>
                                                            
                                                        </tr>

                                                        
                                                        
                                                        <?php
                                                        }
                                                        while($result=mysqli_fetch_array($query));
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Programs rate id</th>
                                                            <th>program name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="gyms" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Gym rate id</th>
                                                            <th>Gym name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rate = "SELECT gyms_rate.id , gyms_rate.scale , gyms_rate.message, gyms.name , users.full_name FROM gyms_rate INNER JOIN gyms on gyms.id = gyms_rate.gym_id INNER JOIN users on gyms_rate.user_id = users.id ORDER by gyms_rate.id DESC";
                                                        $query = mysqli_query($conn,$rate) or die("Error:".mysqli_error($conn)) ;
                                                        $result= mysqli_fetch_array($query);
                                                        do{
                                                            if ($result['scale'] == 1) {
                                                                $scale = '<i class="la la-star"></i>';
                                                            } 
                                                            else if($result['scale'] == 2) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                
                                                                ';
                                                            }
                                                            else if($result['scale'] == 3) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 4) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 5) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $result["id"] ?></td>
                                                            <td><?php echo $result["name"] ?></td>
                                                            <td><?php echo $result["full_name"] ?></td>
                                                            <td><?php echo $scale ?></td>
                                                            <td><?php echo $result["message"] ?></td>
                                                            
                                                        </tr>

                                                        
                                                        
                                                        <?php
                                                        }
                                                        while($result=mysqli_fetch_array($query));
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Gym rate id</th>
                                                            <th>Gym name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="restaurants" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Restaurant rate id</th>
                                                            <th>Restaurant name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rate = "SELECT restaurants_rate.id , restaurants_rate.scale , restaurants_rate.message, restaurants.name , users.full_name FROM restaurants_rate INNER JOIN restaurants on restaurants.id = restaurants_rate.restaurant_id INNER JOIN users on restaurants_rate.user_id = users.id ORDER by restaurants_rate.id DESC";
                                                        $query = mysqli_query($conn,$rate) or die("Error:".mysqli_error($conn)) ;
                                                        $result= mysqli_fetch_array($query);
                                                        do{
                                                                         if ($result['scale'] == 1) {
                                                    $scale = '<i class="la la-star"></i>';
                                                } 
                                                else if($result['scale'] == 2) {
                                                    $scale = '
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    
                                                    ';
                                                }
                                                else if($result['scale'] == 3) {
                                                    $scale = '
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    ';
                                                }
                                                else if($result['scale'] == 4) {
                                                    $scale = '
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    ';
                                                }
                                                else if($result['scale'] == 5) {
                                                    $scale = '
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    ';
                                                }
                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $result["id"] ?></td>
                                                            <td><?php echo $result["name"] ?></td>
                                                            <td><?php echo $result["full_name"] ?></td>
                                                            <td><?php echo $scale ?></td>
                                                            <td><?php echo $result["message"] ?></td>
                                                            
                                                        </tr>

                                                        
                                                        
                                                        <?php
                                                        }
                                                        while($result=mysqli_fetch_array($query));
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Gym rate id</th>
                                                            <th>Gym name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="doctors" role="tabpanel" aria-labelledby="pills-doctors-tab">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Doctor rate id</th>
                                                            <th>Doctor name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rate = "SELECT doctors_rate.id , doctors_rate.scale , doctors_rate.message, doctor_service.name , users.full_name FROM doctors_rate INNER JOIN doctor_service on doctor_service.id = doctors_rate.doctor_service_id INNER JOIN users on doctors_rate.user_id = users.id ORDER by doctors_rate.id DESC";
                                                        $query = mysqli_query($conn,$rate) or die("Error:".mysqli_error($conn)) ;
                                                        $result= mysqli_fetch_array($query);
                                                        do{
                                                            if ($result['scale'] == 1) {
                                                                $scale = '<i class="la la-star"></i>';
                                                            } 
                                                            else if($result['scale'] == 2) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                
                                                                ';
                                                            }
                                                            else if($result['scale'] == 3) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 4) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                            else if($result['scale'] == 5) {
                                                                $scale = '
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                <i class="la la-star"></i>
                                                                ';
                                                            }
                                                        ?>
                                                        
                                                        <tr>
                                                            <td><?php echo $result["id"] ?></td>
                                                            <td><?php echo $result["name"] ?></td>
                                                            <td><?php echo $result["full_name"] ?></td>
                                                            <td><?php echo $scale ?></td>
                                                            <td><?php echo $result["message"] ?></td>
                                                            
                                                        </tr>

                                                        
                                                        
                                                        <?php
                                                        }
                                                        while($result=mysqli_fetch_array($query));
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Gym rate id</th>
                                                            <th>Gym name</th>
                                                            <th>User Fullname</th>
                                                            <th>Rate scale</th>
                                                            <th>Message</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <?php include('includes/footer.php'); ?>
