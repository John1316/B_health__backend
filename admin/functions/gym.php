<?php
if (isset($_POST['add_gym'])) {
    $name = $_POST['name']; 
    $area = $_POST['area']; 
    $description = $_POST['description']; 
    $location = $_POST['location']; 
    $gyms_image = time() . '-' . $_FILES["image"]["name"];
    $target_dir = "../images/gyms/";
    $target_file = $target_dir . basename($gyms_image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 
    $insert= "INSERT INTO `gyms` (`name`, `area_id`, `description`, `image`, `location`) VALUES('$name','$area','$description','$gyms_image','$location')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $gyms_added ="Your gyms added successfully";
    }

}
if (isset($_POST['update_gyms'])) {
    $update_gyms_id = $_POST['gym_id']; 
    $update_name = $_POST['update_name']; 
    $update_area = $_POST['update_area']; 
    $update_description = $_POST['update_description']; 
    $update_location = $_POST['update_location']; 
    $update_gyms_image = time() . '-' . $_FILES["update_image"]["name"];
    $update_target_dir = "../images/gyms/";
    $update_target_file = $update_target_dir . basename($update_gyms_image);
    move_uploaded_file($_FILES["update_image"]["tmp_name"], $update_target_file); 

    $update= "UPDATE `gyms` SET `name`='$update_name',
                                `area_id`='$update_area',
                                `description`='$update_description',
                                `image`='$update_gyms_image',
                                `location`='$update_location'
                                WHERE `id`='$update_gyms_id'"; 

    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $gyms_updated ="Your gyms updated successfully";
    }
}
if (isset($_POST['delete_gyms'])) {
    $gyms_delete_id = $_POST['gyms_delete_id'];

    $deleted= "DELETE from `gyms` WHERE `id`='$gyms_delete_id'"; 

    if(!mysqli_query($conn,$deleted)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $gyms_deleted ="Your gyms deleted successfully";
    }
}