<?php require_once("functions/connection.php") ?>
<?php require_once("functions/tip.php") ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard
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

    <!-- start sidebar -->
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
                                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Tips</div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard table-responsive">
                                        <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#add">Add Tips</button>
                                        <?php if(isset($tips_added)): ?>
                                        <div class="alert alert-success text-white alert-dismissible fade show w-100 my-2" role="alert">
                                            <h5><?= $tips_added ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($tips_updated)): ?>
                                        <div class="alert alert-success text-white alert-dismissible fade show w-100 my-2" role="alert">
                                            <h5><?= $tips_updated ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($tips_deleted)): ?>
                                        <div class="alert alert-danger text-white alert-dismissible fade show w-100 my-2" role="alert">
                                            <h5><?= $tips_deleted ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>Tips id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $tips = "SELECT * from tips";
                                            $query = mysqli_query($conn,$tips) or die("Error:".mysqli_error($conn)) ;
                                            $result= mysqli_fetch_array($query);
                                            do{
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $result["id"]; ?></td>
                                                <td><?php echo $result["tips_name"]; ?></td>
                                                <td><?php echo $result["tips_description"]; ?></td>
                                                <td class="row justify-content-center">
                                                    <button data-toggle="modal" data-target="#edit<?php echo $result["id"]; ?>"  class="btn btn-round mr-1 btn-success"><i class="la la-edit"></i></button>
                                                    <button data-toggle="modal" data-target="#delete<?php echo $result["id"]; ?>"  class="btn btn-round mr-1 btn-danger"><i class="la la-trash"></i></button>                                        
                                                </td>
                                            </tr>
                                            <div class="modal fade text-left" id="edit<?php echo $result["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel1">Edit tips</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <input type="hidden" name="tips_id" value="<?php echo $result["id"]; ?>">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="tips_update_name">Tips Name</label>
                                                                            <input id="tips_update_name" class="form-control" value="<?php echo $result["tips_name"]; ?>" type="text" name="tips_update_name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="tips_update_name">Tips Description</label>
                                                                            <textarea id="tips_update_description" class="form-control" type="text" name="tips_update_description" required><?php echo $result["tips_description"]; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="update_tips" class="btn btn-primary">Edit tips</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade text-left" id="delete<?php echo $result["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel1">Delete</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <input type="hidden" name="tips_delete_id" value="<?php echo $result["id"]; ?>">
                                                                    <div class="col-12">

                                                                        <p>Do you want to delete Tips <?php echo $result["tips_name"]; ?></p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="submit" name="delete_tips" class="btn btn-danger">Delete tips</button>
                                                                    <button type="button"  class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            while($result=mysqli_fetch_array($query));
                                            ?>
                                            
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tips id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
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
                            <h5 class="modal-title">Add Tips</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="tips_name">Tips Name</label>
                                            <input id="tips_name" class="form-control" type="text" name="tips_name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="tips_description">Tips description</label>
                                            <textarea id="tips_description" class="form-control" type="text" name="tips_description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="add_tips" class="btn btn-primary">Add tips</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
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
