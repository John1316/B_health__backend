<?php
if (isset($_POST['add_tips'])) {
    $tips_name = $_POST['tips_name']; 
    $tips_description = $_POST['tips_description']; 
    $insert= "INSERT INTO `tips` (`tips_name` , `tips_description` ) VALUES ('$tips_name' , '$tips_description') "; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $tips_added ="Your tips added successfully";
    }

}
if (isset($_POST['update_tips'])) {
    $tips_id = $_POST['tips_id'];
    $tips_update_name = $_POST['tips_update_name']; 
    $tips_update_description = $_POST['tips_update_description']; 

    $update= "UPDATE `tips` SET `tips_name`='$tips_update_name' , `tips_description` = '$tips_update_description' WHERE `id`='$tips_id'"; 

    if(!mysqli_query($conn,$update)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $tips_updated ="Your tips updated successfully";
    }
}
if (isset($_POST['delete_tips'])) {
    $tips_delete_id = $_POST['tips_delete_id'];

    $delete= "DELETE from `tips` WHERE `id`='$tips_delete_id'"; 

    if(!mysqli_query($conn,$delete)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $tips_deleted ="Your tips deleted successfully";
    }
}