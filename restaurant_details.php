<?php require_once("functions/connection.php"); ?>
<?php include("functions/restaurant.php"); ?>
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
				
				<div class="row">
					<div class="col-lg-7 aside">
						<div class="blog-posts">
							<div class="blog-post">
								<div class="blog-post-info">
									<div>
										<h2 class="post-title"><?php echo $row["name"] ?></h2>
										
									</div>
								</div>
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/restaurants/<?php echo $row["image"] ?>" alt=""></a>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-lg-5 aside-left mt-5 mt-lg-0">
						
						<div class="side-block">
							<h3 class="side-block-title">Details</h3>
							<ul class="categories-list">
								<li><a href="<?php echo $row["location"] ?>" class="row no-gutters"><p class="mb-0">Location</p></a></li>
							</ul>
						</div>
						
						
						<div class="row my-3">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Description</h5>
										<p class="card-text"><?php echo $row["description"] ?></p>
									</div>
								</div>
							</div>
							
						</div>
						
						
						
					</div>
				</div>
			</div>
	</section>
	<section class="review_people my-5">
        <div class="container">
            <div class="row">
                <?php
                if(isset($_GET['id'])){
                    $restaurants_id = $_GET['id'];
                    $sql = "select restaurants_rate.message , restaurants_rate.scale , users.full_name FROM restaurants_rate INNER JOIN users on restaurants_rate.user_id = users.id WHERE restaurant_id = ".$_SESSION['restaurant_id']." ";
                    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
                    while($row = $result->fetch_assoc()):
                    {
                        if ($row['scale'] == 1) {
                                                    $scale = '<i class="fas fa-star"></i>';
                                                } 
                                                else if($row['scale'] == 2) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    
                                                    ';
                                                }
                                                else if($row['scale'] == 3) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                                                else if($row['scale'] == 4) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                                                else if($row['scale'] == 5) {
                                                    $scale = '
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    ';
                                                }
                ?>
                <div class="col-lg-6 col-12 mb-3" >
                    <div class="toast p-4"style="box-shadow:0 0.25rem 0.75rem rgb(0 0 0 / 10%); border-radius:10px;"role="alert" aria-live="assertive" aria-atomic="true" >
                        <div class="toast-header row no-gutters justify-content-between align-items-center">
                            <strong class="mr-auto"><?php echo $row["full_name"]; ?></strong>
                            <small class="text-muted"><?php echo $scale ?></small>
                            <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <hr>
                        <div class="toast-body bg-secondary">
                            <?php echo $row["message"]; ?>
                        </div>
                    </div>
                    
                </div>
                <?php
                    }
                    endwhile;
                }
                ?>
            </div>
        </div>
    </section>
	<section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="" id="review_form">
                        <input type="hidden" name="restaurant_id" value="<?php echo $_SESSION['restaurant_id'] ?>">

                        <div class="form-group col-md-8 col-12" id="rating-ability-wrapper">
                            <label class="control-label" for="rating">
                                <span class="field-label-info"></span>
                                <input type="hidden" id="selected_rating" name="selected_rating" value="" required>
                            </label>
                            <h2 class="bold rating-header" style="">
                                <span class="selected-rating">0</span><small> / 5</small>
                            </h2>
                            <button type="button" class="btnrating btn btn-lg btn-outline-primary " data-attr="1" id="rating-star-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn  btn-lg btn-outline-primary " data-attr="2" id="rating-star-2">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-lg btn-outline-primary " data-attr="3" id="rating-star-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-lg btn-outline-primary " data-attr="4" id="rating-star-4">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-lg btn-outline-primary " data-attr="5" id="rating-star-5">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>


                            <textarea class="form-control my-3" name="message" cols="10" rows="5" required placeholder="Give Your Feedback ..."></textarea>
                            <button <?php echo $disable ?>  type="submit" name="add_restaurant_rate" class="btn btn-primary">Add Rate</button>
                        </div>



                    </form>
                </div>
                <div class="col-12">
                        <?php if(isset($success_rate)): ?>
                        <div class="alert alert-success alert-dismissible my-1 fade show" role="alert">
                            <p class="mb-0"><?= $success_rate ?></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
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