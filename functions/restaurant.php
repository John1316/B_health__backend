<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['restaurant_id'] = $_GET['id'];
    $sql = "select * from restaurants where id = '$id'";
    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
    $row = $result->fetch_assoc();
}

if(isset($_POST['add_restaurant_rate'])){
	$scale = $_POST["selected_rating"];
    $message = $_POST["message"];
    $insert = "INSERT INTO `restaurants_rate` (`restaurant_id`,`user_id`,`scale`,`message`) VALUES(".$_SESSION['restaurant_id'].",".$_SESSION['user_id'].", '$scale' , '$message' )";
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