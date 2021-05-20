<?php require_once("functions/connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Be Health | Handmade meals</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page">
<!--header-->
<?php include("includes/header.php") ?>
<!--//header-->
<main class="page-content">
	<section class="handmades">
        <div class="container">
            <div class="row">
			
						
						<?php
                        $handmade_meals = "SELECT * FROM handmade_meals ";
                        $query = mysqli_query($conn,$handmade_meals) or die("Error:".mysqli_error($conn)) ;
                        $result= mysqli_fetch_array($query);
                        do{
                            // if ($result["fb_link"] === '') {
							// 	$fb_link = "d-none"
							// }
							// else{
							// 	$fb_link = "";
							// }
                        ?>
						<div class="col-md-6 col-lg-4 my-3">
							<div class="service-card-style3 p-0 active">
								<img src="images/handmades/<?php echo $result["image"] ?>" class="w-100" alt="">
								<div class="card-body p-3 text-center">
									<h5 class="service-card-name"><?php echo $result["name"] ?></h5>
									<p class="mb-1"><?php echo $result["description"] ?></p>
									<a class="" href="<?php echo $result["fb_link"] ?>"><?php echo $result["fb_link"] ?></a>
									<a href='handmade_details.php?id=<?php echo $result["id"] ?>' class="btn btn-main btn-block mt-3">See Details</a>
								</div>
							</div>
						</div>
						<?php
                        }
                        while($result=mysqli_fetch_array($query));
                        ?>
					</div>
				</div>
            </div>
        </div>
    </section>
</main>
<!--footer-->
<?php include("includes/footer.php") ?>
<!--footer-->

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