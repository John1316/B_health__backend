<?php require_once("functions/connection.php") ?>
<?php 
if (isset($_POST['cancel_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    $delete= "DELETE from `user_reservation` WHERE `id`='$reservation_id'"; 

    if(!mysqli_query($conn,$delete)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $reservation_deleted ="Your reservation deleted successfully";
    }
}
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'files/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Be Health | Profile</title>
        <!-- Stylesheets -->
        <link href="vendor/slick/slick.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="icons/style.css" rel="stylesheet">
        <link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!--Favicon-->
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    </head>
<body class="shop-page">

    <!--start navbar-->
    <?php include('includes/header.php'); ?>
    <!--end navbar-->
    
    <main class="page-content">
        <div class="container">
            
            <?php if(isset($reservation_deleted)): ?>
                <div class="alert alert-danger alert-dismissible fade show w-75 m-auto my-3" role="alert">
                    <p class="mb-0"><?= $reservation_deleted ?></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
            <div class="row py-5">
                <div class="col-lg-2 col-12">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Past Reservation</a>
                    </div>
                </div>
                <div class="col-lg-10 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="table-responsive">

                                <table class="table text-center min-height-500px">
                                    <thead  class="bg-primary text-white">
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Username</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                            <th>Phone</th>
                                            <th>BMI</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $_SESSION['full_name']; ?></td>
                                            <td><?php echo $_SESSION['username']; ?></td>
                                            <td><?php echo $_SESSION['height']; ?></td>
                                            <td><?php echo $_SESSION['weight']; ?></td>
                                            <td>0<?php echo $_SESSION['phone']; ?></td>
                                            <td><?php echo $_SESSION['bmi']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="table-responsive">

                                <table class="table  text-center min-height-500px">
                                    <thead class="bg-primary text-white">
                                        <tr >
                                            <th>Reservation ID</th>
                                            <th>Status</th>
                                            <th>program Name</th>
                                            <th>Program</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $sql = "SELECT user_reservation.id, user_reservation.program , programs.name, programs.price FROM user_reservation INNER JOIN programs on programs.id = user_reservation.program_id INNER JOIN users on user_reservation.user_id = users.id where user_reservation.user_id = ".$_SESSION['user_id']." ";
                                        $result = mysqli_query($conn, $sql);
                                    

                                    
                                    if (mysqli_num_rows($result) > 0) {
                                            while ($user_reservation = mysqli_fetch_array($result)) {
                                    
                                                if ($user_reservation['program'] === '' ) {
                                                    $download = "d-none";
                                                } 
                                                else {
                                                    $download = "";
                                                } 
                                    
                                            ?>
                                    
                                    
                                        <tr>
                                            <td><?php echo $user_reservation['id']; ?></td>
                                            <td><?php echo $user_reservation['name'] ?></td>
                                            <td><?php echo $user_reservation['price']; ?></td>
                                            <td><a href="profile.php?file=<?php echo $user_reservation['program']; ?>" class="btn btn-primary <?php echo $download ?>">Download</a></td>
                                            <td>
                                                <form action="" method="POST">
                                                    <input type="hidden" name="reservation_id" value="<?php echo $user_reservation['id']; ?>">
                                                    <button type="submit" name="cancel_reservation" class="btn btn-primary">Cancel</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

    <!--start footer-->
    <?php include('includes/footer.php'); ?>
	<!--end footer-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
    <script src="vendor/cookie/jquery.cookie.js"></script>
    <script src="vendor/bootstrap-datetimepicker/moment.js"></script>
    <script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/waypoints/sticky.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
    <script src="vendor/countTo/jquery.countTo.js"></script>
    <script src="vendor/form-validation/jquery.form.js"></script>
    <script src="vendor/form-validation/jquery.validate.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Custom Scripts -->
    <script src="js/app.js"></script>
    <script src="js/app-shop.js"></script>
    <script src="form/forms.js"></script>
    </body>
</html>