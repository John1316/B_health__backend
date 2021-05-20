<?php
$users = "SELECT `id` FROM `users` ORDER BY `id`";
$users_count = mysqli_query($conn,$users) or die("Error:".mysqli_error($conn)) ;
$userId = mysqli_num_rows($users_count);
// 
$programs = "SELECT `id` FROM `programs` ORDER BY id";
$programs_count = mysqli_query($conn,$programs) or die("Error:".mysqli_error($conn)) ;
$programsId = mysqli_num_rows($programs_count);
// 
$doctors = "SELECT `id` FROM `doctors` ORDER BY `id`";
$doctors_count = mysqli_query($conn,$doctors) or die("Error:".mysqli_error($conn)) ;
$doctorsId = mysqli_num_rows($doctors_count);
// 
$areas = "SELECT `id` FROM `area` ORDER BY `id`";
$areas_count = mysqli_query($conn,$areas) or die("Error:".mysqli_error($conn)) ;
$areasId = mysqli_num_rows($areas_count);
// 
$reservations = "SELECT `id` FROM `user_reservation` ORDER BY `id`";
$reservations_count = mysqli_query($conn,$reservations) or die("Error:".mysqli_error($conn)) ;
$reservationsId = mysqli_num_rows($reservations_count);
// 
$tips = "SELECT `id` FROM `tips` ORDER BY `id`";
$tips_count = mysqli_query($conn,$tips) or die("Error:".mysqli_error($conn)) ;
$tipsId = mysqli_num_rows($tips_count);
// 
$gyms = "SELECT `id` FROM `gyms` ORDER BY `id`";
$gyms_count = mysqli_query($conn,$gyms) or die("Error:".mysqli_error($conn)) ;
$gymsId = mysqli_num_rows($gyms_count);
// 
$doctor_service = "SELECT `id` FROM `doctor_service` ORDER BY `id`";
$doctor_service_count = mysqli_query($conn,$doctor_service) or die("Error:".mysqli_error($conn)) ;
$doctorServiceId = mysqli_num_rows($doctor_service_count);
// 
$handmade_meals = "SELECT `id` FROM `handmade_meals` ORDER BY `id`";
$handmade_meals_count = mysqli_query($conn,$handmade_meals) or die("Error:".mysqli_error($conn)) ;
$handmadeMealsId = mysqli_num_rows($handmade_meals_count);
// 
$homemades = "SELECT `id` FROM `homemades` ORDER BY `id`";
$homemades_count = mysqli_query($conn,$homemades) or die("Error:".mysqli_error($conn)) ;
$homemadesId = mysqli_num_rows($homemades_count);
// 
// $owners = "SELECT owner_id FROM owner ORDER BY owner_id";
// $owners_count = mysqli_query($conn,$owners) or die("Error:".mysqli_error($conn)) ;
// $ownersId = mysqli_num_rows($owners_count);
// //
// $reservation = "SELECT reservation_id FROM reservation ORDER BY reservation_id";
// $reservation_count = mysqli_query($conn,$reservation) or die("Error:".mysqli_error($conn)) ;
// $reservationId = mysqli_num_rows($reservation_count);
// //
// $requested_playfield = "SELECT requested_id FROM requested_playfield ORDER BY requested_id";
// $requested_count = mysqli_query($conn,$requested_playfield) or die("Error:".mysqli_error($conn)) ;
// $requestedId = mysqli_num_rows($requested_count);
// //
// $review = "SELECT review_id FROM review ORDER BY review_id";
// $review_count = mysqli_query($conn,$review) or die("Error:".mysqli_error($conn)) ;
// $reviewId = mysqli_num_rows($review_count);
// //
// $admins = "SELECT admin_id FROM admins ORDER BY admin_id";
// $admins_count = mysqli_query($conn,$admins) or die("Error:".mysqli_error($conn)) ;
// $adminsId = mysqli_num_rows($admins_count);
// //
// $playfields = "SELECT id FROM playfields ORDER BY id";
// $playfields_count = mysqli_query($conn,$playfields) or die("Error:".mysqli_error($conn)) ;
// $playfield_id = mysqli_num_rows($playfields_count);
// //
// $time_slots = "SELECT id FROM time_slots ORDER BY id";
// $time_count = mysqli_query($conn,$time_slots) or die("Error:".mysqli_error($conn)) ;
// $timeslots_id = mysqli_num_rows($time_count);
?>