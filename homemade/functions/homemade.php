<?php
if (isset($_POST['add_handmade_meals'])) {
    $name = $_POST['name']; 
    $description = $_POST['description']; 
    $fb_link = $_POST['fb_link']; 
    $handmadeImage = time() . '-' . $_FILES["image"]["name"];
    $target_dir = "../images/handmades/";
    $target_file = $target_dir . basename($handmadeImage);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 
    $insert= "INSERT INTO `handmade_meals` (`handmade_id`, `name`, `description`, `image`,`fb_link`) VALUES(".$_SESSION["handemade_id"].",'$name','$description','$handmadeImage','$fb_link')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $handmade_added ="Your Handmade Meal added successfully";
    }
}
if (isset($_POST['update_handmade_meals'])) {
    $handmade_id = $_POST['handmade_id']; 
    $update_handmade_name = $_POST['update_name']; 
    $update_fb_link = $_POST['update_fb_link']; 
    $update_handmade_description = $_POST['update_description']; 
    $update_handmade_image = time() . '-' . $_FILES["update_image"]["name"];
    $update_handmade_target_dir = "../images/handmades/";
    $update_handmade_target_file = $update_handmade_target_dir . basename($update_handmade_image);
    move_uploaded_file($_FILES["update_image"]["tmp_name"], $update_handmade_target_file); 
    $update= "UPDATE `handmade_meals` SET  `name`='$update_handmade_name'  , `description`='$update_handmade_description' , `image`='$update_handmade_image' , `fb_link` = '$update_fb_link'  WHERE `id`='$handmade_id'"; 
    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $handmade_updated ="Your handmade Meal updated successfully";
    }
}
if (isset($_POST['delete_handmade_meals'])) {
    $handmade_delete_id = $_POST['handmade_delete_id'];

    $deleted= "DELETE from `handmade_meals` WHERE `id`='$handmade_delete_id'"; 

    if(!mysqli_query($conn,$deleted)){
        die('Error:'. mysqli_error($conn));
    } else {
        $handmade_deleted ="Your handmade Meal deleted successfully";
    }
}
?>