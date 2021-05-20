<?php require_once("functions/connection.php"); ?>
<?php include("functions/dashboard.php"); ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Dashboard - Home
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
    <?php include("includes/header.php") ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include("includes/sidebar.php") ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Dashboard</div>
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard table-responsive">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-info text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-user mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Users</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $userId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-success text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-file-o mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Programs</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $programsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-warning text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-male mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Doctors</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $doctorsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-danger text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Reservations</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $reservationsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-primary text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Homemade</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $homemadesId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-info text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Tips</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $tipsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-warning text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Gyms</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $gymsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-success text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Doctor Service</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $doctorServiceId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card text-white  bg-primary text-center">
                                                        <div class="card-header pt-2 pb-1">
                                                            <i class="la la-check mb-1 fa-2x"  aria-hidden="true"></i>
                                                            <h4 class="card-title text-white">Handmade Meals</h4>                                
                                                        </div>
                                                        <div class="card-content pt-0 pb-2 collapse show">
                                                            <div class="card-body p-0">
                                                                <h4 class="mb-0 text-white"><?php echo $handmadeMealsId ?></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include("includes/footer.php") ?>
