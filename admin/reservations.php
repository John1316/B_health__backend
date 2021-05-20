<?php require_once('functions/connection.php'); ?>
<?php
if (isset($_POST['submit_program_file'])) {
    $program_id = $_POST['program_id']; 
    $program_file = time() . '-' . $_FILES["program_file"]["name"];
    $target_dir_report = "../files/";
    $target_file_report = $target_dir_report . basename($program_file);
    move_uploaded_file($_FILES["program_file"]["tmp_name"], $target_file_report); 


    $file = "UPDATE `user_reservation` SET
    `program` = '$program_file' WHERE `id` = '$program_id' ";

        if(!mysqli_query($conn,$file)){ 
            die('Error:'. mysqli_error($conn));
        } else {
            $report_msg ="Your File submited successfully";
        }
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Admin Dashboard - Reservations
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
    <?php include('includes/header.php'); ?>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include('includes/sidebar.php'); ?>

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
                                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">Program Reservations</div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard table-responsive">
                                        
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>Reservation id</th>
                                                <th>username</th>
                                                <th>Full name</th>
                                                <th>Program name</th>
                                                <th>Program Image</th>
                                                <th>Program</th>
                                                <th>Action</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $users_reservations = "SELECT user_reservation.id, user_reservation.program, users.username , users.full_name , programs.name , programs.image , programs.category_id  FROM user_reservation INNER JOIN programs on programs.id = user_reservation.program_id INNER JOIN users on user_reservation.user_id = users.id ORDER by user_reservation.id DESC";
                                            $query = mysqli_query($conn,$users_reservations) or die("Error:".mysqli_error($conn)) ;
                                            $result= mysqli_fetch_array($query);
                                            do{
                                                
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $result["id"] ?></td>
                                                <td><?php echo $result["full_name"] ?></td>
                                                <td><?php echo $result["username"] ?></td>
                                                <td><?php echo $result["name"] ?></td>
                                                <td> <img src="../images/programs/<?php echo $result["image"] ?>" height="100px" width="100px" alt=""></td>
                                                <td><?php echo $result["program"] ?></td>
                                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#file<?php echo $result["id"] ?>"><i class="la la-file" aria-hidden="true"></i></button></td>
                                                
                                            </tr>

                                            <div id="file<?php echo $result["id"] ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel1">Program file</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="program_id" value="<?php echo $result["id"] ?>">
                                                                <input type="file" name="program_file" id="">
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="submit_program_file" class="btn btn-outline-primary">Submit Program</button>
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
                                                <th>Reservation id</th>
                                                <th>username</th>
                                                <th>Full name</th>
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
                
                <!-- DOM - jQuery events table -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include('includes/footer.php'); ?>
    <!-- BEGIN VENDOR JS-->
