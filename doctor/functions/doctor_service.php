<?php
if (isset($_POST['add_doctor_service'])) {
    $name = $_POST['name']; 
    $price = $_POST['price']; 
    $description = $_POST['description']; 
    $status = $_POST['status']; 
    $time_slot = $_POST['time_slot']; 
    $doctorImage = time() . '-' . $_FILES["image"]["name"];
    $target_dir = "../images/doctors/";
    $target_file = $target_dir . basename($doctorImage);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 
    $insert= "INSERT INTO `doctor_service` (`doctor_id`, `name`, `price`, `description`, `image`, `status`, `time_slot`) VALUES(".$_SESSION["id"].",'$name','$price','$description','$doctorImage','$status','$time_slot')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $doctor_added ="Your doctor added successfully";
    }
}
if (isset($_POST['update_doctor_service'])) {
    $doctor_id = $_POST['doctor_id']; 
    $update_doctor_name = $_POST['update_name']; 
    $update_time_slot = $_POST['update_time_slot']; 
    $update_doctor_price = $_POST['update_price']; 
    $update_doctor_description = $_POST['update_description']; 
    $update_doctor_status = $_POST['update_status']; 
    $update_doctor_image = time() . '-' . $_FILES["update_image"]["name"];
    $update_doctor_target_dir = "../images/doctors/";
    $update_doctor_target_file = $update_doctor_target_dir . basename($update_doctor_image);
    move_uploaded_file($_FILES["update_image"]["tmp_name"], $update_doctor_target_file); 
    $update= "UPDATE `doctor_service` SET  `name`='$update_doctor_name' , `price`='$update_doctor_price' , `description`='$update_doctor_description' , `image`='$update_doctor_image' , `status`='$update_doctor_status' , `time_slot` = '$update_time_slot'   WHERE `id`='$doctor_id'"; 
    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $doctor_updated ="Your doctor updated successfully";
    }
}
if (isset($_POST['delete_doctor_service'])) {
    $doctor_delete_id = $_POST['doctor_delete_id'];

    $deleted= "DELETE from `doctor_service` WHERE `id`='$doctor_delete_id'"; 

    if(!mysqli_query($conn,$deleted)){
        die('Error:'. mysqli_error($conn));
    } else {
        $doctor_deleted ="Your doctor service deleted successfully";
    }
}