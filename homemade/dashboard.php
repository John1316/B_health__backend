<?php require_once("functions/connection.php") ?>
<?php include('functions/homemade.php') ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <title>Handmade | Dashboard
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
                                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">handmade Dashboard</div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard table-responsive">
                                        <button data-toggle="modal" data-target="#add" class="btn btn-primary mb-2">Add Meal</button>
                                        <?php if(isset($handmade_added)): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h5><?= $handmade_added ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($handmade_updated)): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h5><?= $handmade_updated ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($handmade_deleted)): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <h5><?= $handmade_deleted ?></h5>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Facebook Link</th>
                                                <th>Image</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $handmade_meals = "SELECT handmade_meals.id, handmade_meals.name , handmade_meals.fb_link , handmade_meals.image, handmade_meals.description FROM handmade_meals INNER JOIN homemades on handmade_meals.handmade_id = homemades.id where handmade_meals.handmade_id = ".$_SESSION["handemade_id"]." ";
                                            $query = mysqli_query($conn,$handmade_meals) or die("Error:".mysqli_error($conn)) ;
                                            $result= mysqli_fetch_array($query);
                                            do{
                                                
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $result["id"] ?></td>
                                                <td><?php echo $result["name"] ?></td>
                                                <td><?php echo $result["description"] ?></td>
                                                <td><?php echo $result["fb_link"] ?></td>
                                                <td><img src="../images/handmades/<?php echo $result["image"] ?>" height="100px" width="100px" alt=""></td>
                                                <td class="row justify-content-center">
                                                    <button data-toggle="modal" data-target="#edit<?php echo $result["id"] ?>" href="#" class="btn btn-round mr-1 btn-success"><i class="la la-edit"></i></button>
                                                    <button data-toggle="modal" data-target="#delete<?php echo $result["id"] ?>" href="#" class="btn btn-round mr-1 btn-danger"><i class="la la-trash"></i></button>                                        
                                                </td>
                                            </tr>

                                            <div class="modal fade text-left" id="edit<?php echo $result["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel1">Edit Meal</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                <input type="hidden" name="handmade_id" value="<?php echo $result["id"] ?>">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="update_name">Meal Name</label>
                                                                            <input id="update_name" class="form-control" value="<?php echo $result["name"] ?>" type="text" name="update_name" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="update_image">Image</label>
                                                                            <input id="update_image" class="form-control" value="<?php echo $result["image"] ?>" type="file" name="update_image" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="update_update_fb_link">Facebook Link</label>
                                                                            <input id="update_update_fb_link" class="form-control" value="<?php echo $result["fb_link"] ?>" type="text" name="update_fb_link">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="update_description">Description</label>
                                                                            <textarea id="update_description" class="form-control"  type="text" name="update_description" required><?php echo $result["description"] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="update_handmade_meals" class="btn btn-primary">Edit Meal</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade text-left" id="delete<?php echo $result["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel1">Delete Meal</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <input type="hidden" name="handmade_delete_id" value="<?php echo $result["id"]; ?>">
                                                                    <div class="col-12">

                                                                        <p>Do you want to delete <?php echo $result["name"]; ?></p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="submit" name="delete_handmade_meals" class="btn btn-danger">Delete Category</button>
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
                                                <th>program id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
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
                            <h5 class="modal-title">Add Meal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" class="form-control" type="text" name="name" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input id="image" class="form-control" type="file" name="image"required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="fb_link">Facebook Link</label>
                                            <input id="fb_link" class="form-control" type="text" name="fb_link">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" required class="form-control" type="text" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="add_handmade_meals" class="btn btn-primary">Add Meal</button>
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
    <?php include("includes/footer.php"); ?>
