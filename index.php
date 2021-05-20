	<?php require_once("functions/connection.php") ?>

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

<body class="shop-page layout-landing-2">
<!--header-->
	<?php include("includes/header.php") ?>
<!--//header-->
<main class="page-content">
	<!--section slider-->
	<section class="section mt-0">
		
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="loader-circle"></div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider"
				 data-slick='{"arrows": false, "dots": true}'>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-01.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1" data-animation="fadeInDown">
										The Highest Standard
										<br>
										<b>of Eye Care</b></div>
									<div class="slide-txt2" data-animation="fadeInUp">Experience freedom from glasses with us</div>
									<div class="slide-btn"><a href="#aboutSection" class="btn link-inside" data-animation="fadeInUp"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<div class="img--holder" data-bg="images/content/slider/slide-02.jpg"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1" data-animation="fadeInDown">
										Care As Unique
										<br>
										<b>As Your Own Eyes</b></div>
									<div class="slide-txt2" data-animation="fadeInUp">Live life with clear vision & healthy eyes.</div>
									<div class="slide-btn"><a href="#aboutSection" class="btn link-inside" data-animation="fadeInUp"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//section slider-->
	<!--section promotext -->
	<section class="section mt-0 py-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="images/service.svg" class="w-100" alt="">
				</div>
				<div class="col-md-6">
					<h2 class="text-main">Our service</h2>
					<p>Nowdays, many people suffer from diseases like diabetes , fats and cholestrol so we thought we could help people by providing them many services that could be useful for their health like presenting a healthy life style by follwing up with the best Nutriontists and providing them with the suitable healthy diets that suit thier health considering thier disease and many options that will help you to begin a healthy and clean life style.</p>
				</div>
			</div>
		</div>
	</section>
	<!--//section promotext -->
	<!--section services-->
	<div class="section bg-grey mt-0" id="servicesSection">
		<div class="container">
			<div class="title-wrap text-center text-md-left">
				<h2 class="h1 title-with-clone" data-title="How we work"><span>How <span class="theme-color">We </span> work</span></h2>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="row js-services-tabs-carousel">
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3 active">
								<div class="service-card-icon">
									<i class="icon-eye-1"></i>
								</div>
								<h5 class="service-card-name">Pediatric Ophthalmology</h5>
								<p>Pediatric ophthalmology and pediatric optometry</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3">
								<div class="service-card-icon">
									<i class="icon-eye-3"></i>
								</div>
								<h5 class="service-card-name">Cataract Treatment</h5>
								<p>Cataract diagnosis and treatment</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3">
								<div class="service-card-icon">
									<i class="icon-eye-4"></i>
								</div>
								<h5 class="service-card-name">Laser Eye Surgery</h5>
								<p>Laser eye surgery and lens surgery</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3">
								<div class="service-card-icon">
									<i class="icon-eye-5"></i>
								</div>
								<h5 class="service-card-name">Diagnostics and consultation</h5>
								<p>Pediatric ophthalmology and pediatric optometry</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3">
								<div class="service-card-icon">
									<i class="icon-eye-6"></i>
								</div>
								<h5 class="service-card-name">Contact lenses</h5>
								<p>Cataract diagnosis and treatment</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="service-card-style3">
								<div class="service-card-icon">
									<i class="icon-glasses"></i>
								</div>
								<h5 class="service-card-name">Glasses</h5>
								<p>Laser eye surgery and lens surgery</p>
								<div class="mt-2 mt-md-4"></div>
								<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">booking
									now<i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 service-info-carousel-wrap">
					<div class="service-info-carousel js-services-info">
						<div class="service-info">
							<div class="service-info-num"><span>1</span>/6</div>
							<p>Our eye care center offers a full range of eye health services to clients of all ages, from children to older adults</p>
						</div>
						<div class="service-info">
							<div class="service-info-num"><span>2</span>/6</div>
							<p>The optometrists our practice provide eyewear prescriptions and offer corrective laser eye surgery co-management as well.</p>
						</div>
						<div class="service-info">
							<div class="service-info-num"><span>3</span>/6</div>
							<p>Eye problems can range from mild to severe; some are chronic, while others may resolve on their own.</p>
						</div>
						<div class="service-info">
							<div class="service-info-num"><span>4</span>/6</div>
							<p>We diagnose and manage ocular diseases such as Glaucoma, Macular Degeneration, Diabetic Retinopathy and Cataracts.</p>
						</div>
						<div class="service-info">
							<div class="service-info-num"><span>5</span>/6</div>
							<p>If you're ready for an alternative to glasses and/or contacts look to us for co-management of LASIK, cataract, and other ocular surgery.</p>
						</div>
						<div class="service-info">
							<div class="service-info-num"><span>6</span>/6</div>
							<p>Our eye doctors have the latest technology and lots of experience with eye infections, scratched eye, something stuck in your eye.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  services-->
	

	<section class="section our-team" id="specialistsSection">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Our Team</div>
				<h2 class="h1 title-with-clone" data-title="Specialists">Team Members</h2>
				<div class="h-decor"></div>
			</div>
			
			<div class="mt-3 mt-lg-5"></div>
			<div class="row specialist-carousel2 js-specialist-carousel2">
				<div class="doctor-box-h-wrap">
					<div class="doctor-box-h">
						<div class="doctor-box-h-photo">
							<img src="images/content/doctor-01.jpg" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-h-info">
							<h5 class="doctor-box-h-name">Dr. Stuart Orozco</h5>
							<table class="table doctor-box-h-table">
								<tbody>
								<tr>
									<td>Speciality:</td>
									<td>Ophthalmology</td>
								</tr>
								<tr>
									<td>Areas of Expertise:</td>
									<td>Cataract Treatment</td>
								</tr>
								<tr>
									<td></td>
									<td>Laser Eye Surgery</td>
								</tr>
								<tr>
									<td>Years of Practice:</td>
									<td>20 Years</td>
								</tr>
								<tr>
									<td>Working Time:</td>
									<td>
										<div class="schedule-row">
											<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Friday</span><span>07:00 - 22:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Saturday</span><span>08:00 - 18:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td>Contacts:</td>
									<td>
										<ul class="contact-inline">
											<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
											<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
											<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
							<div class="doctor-box-h-booking">
								<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
										class="icon-right-arrow"></i><span>book a visit</span><i
										class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="doctor-box-h-wrap">
					<div class="doctor-box-h">
						<div class="doctor-box-h-photo">
							<img src="images/content/doctor-02.jpg" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-h-info">
							<h5 class="doctor-box-h-name">Dr. Frank Bigham</h5>
							<table class="table doctor-box-h-table">
								<tbody>
								<tr>
									<td>Speciality:</td>
									<td>Ophthalmology</td>
								</tr>
								<tr>
									<td>Areas of Expertise:</td>
									<td>Cataract Treatment</td>
								</tr>
								<tr>
									<td></td>
									<td>Laser Eye Surgery</td>
								</tr>
								<tr>
									<td>Years of Practice:</td>
									<td>20 Years</td>
								</tr>
								<tr>
									<td>Working Time:</td>
									<td>
										<div class="schedule-row">
											<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Friday</span><span>07:00 - 22:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Saturday</span><span>08:00 - 18:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td>Contacts:</td>
									<td>
										<ul class="contact-inline">
											<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
											<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
											<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
							<div class="doctor-box-h-booking">
								<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
										class="icon-right-arrow"></i><span>book a visit</span><i
										class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="doctor-box-h-wrap">
					<div class="doctor-box-h">
						<div class="doctor-box-h-photo">
							<img src="images/content/doctor-03.jpg" class="img-fluid" alt="">
						</div>
						<div class="doctor-box-h-info">
							<h5 class="doctor-box-h-name">Dr. Betty Bone</h5>
							<table class="table doctor-box-h-table">
								<tbody>
								<tr>
									<td>Speciality:</td>
									<td>Ophthalmology</td>
								</tr>
								<tr>
									<td>Areas of Expertise:</td>
									<td>Cataract Treatment</td>
								</tr>
								<tr>
									<td></td>
									<td>Laser Eye Surgery</td>
								</tr>
								<tr>
									<td>Years of Practice:</td>
									<td>20 Years</td>
								</tr>
								<tr>
									<td>Working Time:</td>
									<td>
										<div class="schedule-row">
											<span><span>Mon-Thu</span><span>08:00 - 20:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Friday</span><span>07:00 - 22:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td></td>
									<td>
										<div class="schedule-row">
											<span><span>Saturday</span><span>08:00 - 18:00</span></span>
										</div>
									</td>
								</tr>
								<tr>
									<td>Contacts:</td>
									<td>
										<ul class="contact-inline">
											<li><i class="icon-telephone"></i><span>1-248-715-8767</span></li>
											<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
											<li><a href="mailto:#"><i class="icon-black-envelope"></i></a></li>
										</ul>
									</td>
								</tr>
								</tbody>
							</table>
							<div class="doctor-box-h-booking">
								<a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i
										class="icon-right-arrow"></i><span>book a visit</span><i
										class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//section our team-->
	
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

</body>

</html>