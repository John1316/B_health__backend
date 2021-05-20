<?php require_once("functions/connection.php") ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <title>Doctor | Reservations
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
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Doctor Reservations</div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard table-responsive">
                                        
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>Reservation id</th>
                                                <th>Service name</th>
                                                <th>Service status</th>
                                                <th>User Fullname</th>
                                                <th>username</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $doctor_service = "SELECT doctor_reservation.id  , doctor_service.name , doctor_service.status ,  users.full_name , users.username FROM doctor_reservation INNER JOIN doctor_service on doctor_reservation.doctor_service_id = doctor_service.id INNER JOIN users on doctor_reservation.user_id = users.id INNER JOIN doctors on doctor_reservation.doctor_id = doctors.id where doctor_reservation.doctor_id = ".$_SESSION["id"]." ";
                                            $query = mysqli_query($conn,$doctor_service) or die("Error:".mysqli_error($conn)) ;
                                            $result= mysqli_fetch_array($query);
                                            do{
                                                
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $result["id"] ?></td>
                                                <td><?php echo $result["name"] ?></td>
                                                <td><?php echo $result["status"] ?></td>
                                                <td><?php echo $result["full_name"] ?></td>
                                                <td><?php echo $result["username"] ?></td>
                                                
                                            </tr>

                                            
                                            <?php
                                            }
                                            while($result=mysqli_fetch_array($query));
                                            ?>
                                            
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Reservation id</th>
                                                <th>username</th>
                                                <th>Program name</th>
                                                <th>Program Image</th>
                                                <th>Cateogry Name</th>
                                            </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add cateogry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" class="form-control" type="text" name="category_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input id="price" class="form-control" type="text" name="category_name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input id="image" class="form-control" type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Status</label>
                                            <select name="" class="form-control" id="">
                                                <option value="">Select status</option>
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" type="text" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Add Category</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel1">Edit</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="category_name">Cateogry Name</label>
                                                <input id="category_name" class="form-control" type="text" name="category_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Edit Category</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel1">Delete</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    Delete content
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include("includes/footer.php") ?>
