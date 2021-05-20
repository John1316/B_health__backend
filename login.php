<?php include("functions/connection.php"); ?>
<?php include("functions/login.php"); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Be Health | Login</title>
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
        <!-- Google map -->
    </head>
    <body>
<?php include("includes/header.php"); ?>
        <section class="login-sec py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-12 border-right mb-4">
                                        <h3 class="text-main">User Login</h3>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="login_username" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Passowrd</label>
                                                <input type="password" name="login_password" class="form-control" required>
                                            </div>
                                            <button name="loginsubmit" type="submit" class="btn btn-primary btn-block">Log in</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h3 class="text-main">User Register</h3>
                                        <form action="login.php" method="post">
                                            <div class="form-group">
                                                <label for="full_name">Full Name</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="number" id="phone" name="phone" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="weight">Weight</label>
                                                <input type="number" id="weight" name="weight" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="height">Height</label>
                                                <input type="number" id="height" name="height" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Passowrd</label>
                                                <input type="password" id="" name="password" class="form-control" required>
                                            </div>
                                            <button name="registsubmit" class="btn btn-primary btn-block">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php if(isset($logfalied)): ?>
                <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                    <h5><?= $logfalied ?></h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <?php if(isset($success)): ?>
                <div class="alert alert-success alert-dismissible fade show w-100 my-3" role="alert">
                    <h5><?= $success ?></h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                
                <?php if(isset($um)): ?>
                <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                    <h5><?= $um ?></h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <?php if(isset($passless)): ?>
                <div class="alert alert-danger alert-dismissible fade show w-100 my-3" role="alert">
                    <h5><?= $passless ?></h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </section>
<?php include("includes/footer.php") ?>
<!-- Vendors -->
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