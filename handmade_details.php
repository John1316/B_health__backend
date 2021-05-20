<?php require_once("functions/connection.php"); ?>
<?php include("functions/handmade_meal.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Be Health | Home</title>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page">
<!--header-->
<?php include("includes/header.php") ?>
<!--//header-->
<main class="page-content">
	<section class="section page-content-first">
			<div class="container">
				<?php if(isset($success_reservation)): ?>
                <div class="alert alert-success alert-dismissible fade show w-100 my-3" role="alert">
                    <p class="mb-0"><?= $success_reservation ?></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
				<div class="row my-3">
					<div class="col-lg-9 aside">
						<div class="blog-posts">
							<div class="blog-post">
								<div class="blog-post-info">
									<div>
										<h2 class="post-title"><?php echo $row["name"] ?></h2>
										
									</div>
								</div>
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/handmades/<?php echo $row["image"] ?>" alt=""></a>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-lg-3 aside-left mt-5 mt-lg-0">
						
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Description</h5>
								<p class="card-text"><?php echo $row["description"] ?></p>
							</div>
						</div>
						
						
						
						
						
						
					</div>
				</div>
                
			</div>
	</section>
	
</main>
<!--footer-->
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
<script>
	$(document).ready(function($){
        $(".btnrating").on('click',(function(e) {
            var previous_value = $("#selected_rating").val();
            var selected_value = $(this).attr("data-attr");
            $("#selected_rating").val(selected_value);
            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);
            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-"+i).toggleClass('btn-primary');
                $("#rating-star-"+i).toggleClass('btn-outline-primary');
            }
            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-"+ix).toggleClass('btn-primary');
                $("#rating-star-"+ix).toggleClass('btn-outline-primary');
            }
        }));
    });
</script>
</body>

</html>