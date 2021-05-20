<?php
if (isset($_POST['add_program'])) {
    $name = $_POST['name']; 
    $price = $_POST['price']; 
    $description = $_POST['description']; 
    $programImage = time() . '-' . $_FILES["image"]["name"];
    $target_dir = "../images/programs/";
    $target_file = $target_dir . basename($programImage);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 
    $category_id = $_POST['category_id']; 
    $insert= "INSERT INTO `programs` (`name`,`price`,`description`,`image`,`category_id`) VALUES('$name','$price','$description','$programImage','$category_id')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $program_added ="Your program added successfully";
    }
}
if (isset($_POST['update_program'])) {
    $program_id = $_POST['program_id']; 
    $update_program_name = $_POST['update_name']; 
    $update_program_price = $_POST['update_price']; 
    $update_program_description = $_POST['update_description']; 
    $update_program_image = time() . '-' . $_FILES["update_image"]["name"];
    $update_program_target_dir = "../images/programs/";
    $update_program_target_file = $update_program_target_dir . basename($update_program_image);
    move_uploaded_file($_FILES["update_image"]["tmp_name"], $update_program_target_file); 
    $update_program_category_id = $_POST['update_category_id']; 
    $update= "UPDATE `programs` SET `name`='$update_program_name' ,
                                    `price`='$update_program_price' ,
                                    `description`='$update_program_description' ,
                                    `image`='$update_program_image' ,
                                    `category_id` = '$update_program_category_id'
                                    WHERE `id`='$program_id'"; 
    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $program_updated ="Your program updated successfully";
    }
}
if (isset($_POST['delete_program'])) {
    $program_delete_id = $_POST['program_delete_id'];

    $deleted= "DELETE from programs WHERE `id`='$program_delete_id'"; 

    if(!mysqli_query($conn,$deleted)){
        die('Error:'. mysqli_error($conn));
    } else {
        $program_deleted ="Your category deleted successfully";
    }
}