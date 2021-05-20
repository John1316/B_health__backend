<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['doctor_service_id'] = $_GET['id'];
    $sql = "select * from doctor_service where id = '$id'";
    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
    $row = $result->fetch_assoc();
}
if(isset($_POST['doctor_reservation'])){
    $doctor_id = $_POST['doctor_id']; 
	
    $insert = "INSERT INTO `doctor_reservation` (`doctor_service_id`,`user_id`,`doctor_id`) VALUES(".$_SESSION['doctor_service_id'].",".$_SESSION['user_id'].", '$doctor_id' )";
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $success_reservation="Your Reservation submited successfully";
    }
}
if(isset($_POST['add_doctor_rate'])){
	$scale = $_POST["selected_rating"];
    $message = $_POST["message"];
    $insert = "INSERT INTO `doctors_rate` (`doctor_service_id`,`user_id`,`scale`,`message`) VALUES(".$_SESSION['doctor_service_id'].",".$_SESSION['user_id'].", '$scale' , '$message' )";
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $success_rate="Your rate submited successfully";
    }
}
if(!isset($_SESSION['username'])){
    echo " <script> alert('please sign in to checkout'); </script>";
        $disable = "disabled";
    }else{
        $disable = "";
    }
?>