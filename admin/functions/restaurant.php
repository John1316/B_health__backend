<?php
if (isset($_POST['add_resturant'])) {
    $name = $_POST['name']; 
    $area = $_POST['area']; 
    $description = $_POST['description']; 
    $location = $_POST['location']; 
    $restaurants_image = time() . '-' . $_FILES["image"]["name"];
    $target_dir = "../images/restaurants/";
    $target_file = $target_dir . basename($restaurants_image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 
    $insert= "INSERT INTO `restaurants` (`name`, `area_id`, `description`, `image`, `location`) VALUES('$name','$area','$description','$restaurants_image','$location')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $restaurants_added ="Your restaurants added successfully";
    }

}
if (isset($_POST['update_restaurants'])) {
    $update_restaurants_id = $_POST['restaurant_id']; 
    $update_name = $_POST['update_name']; 
    $update_area = $_POST['update_area']; 
    $update_description = $_POST['update_description']; 
    $update_location = $_POST['update_location']; 
    $update_restaurants_image = time() . '-' . $_FILES["update_image"]["name"];
    $update_target_dir = "../images/restaurants/";
    $update_target_file = $update_target_dir . basename($update_restaurants_image);
    move_uploaded_file($_FILES["update_image"]["tmp_name"], $update_target_file); 

    $update= "UPDATE `restaurants` SET `name`='$update_name',
                                `area_id`='$update_area',
                                `description`='$update_description',
                                `image`='$update_restaurants_image',
                                `location`='$update_location'
                                WHERE `id`='$update_restaurants_id'"; 

    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $restaurants_updated ="Your restaurants updated successfully";
    }
}
if (isset($_POST['delete_restaurants'])) {
    $restaurants_delete_id = $_POST['restaurants_delete_id'];

    $deleted= "DELETE from `restaurants` WHERE `id`='$restaurants_delete_id'"; 

    if(!mysqli_query($conn,$deleted)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $restaurants_deleted ="Your restaurants deleted successfully";
    }
}