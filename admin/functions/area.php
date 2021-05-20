<?php
if (isset($_POST['add'])) {
    $area_name = $_POST['area_name']; 
    $insert= "INSERT INTO `area` (`area_name`) VALUES('$area_name')"; 
    if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $area_added ="Your area added successfully";
    }

}
if (isset($_POST['update_area'])) {
    $area_id = $_POST['area_id'];
    $area_update_name = $_POST['area_update_name']; 

    $up= "UPDATE `area` SET `area_name` ='$area_update_name' WHERE `id`='$area_id'"; 

    if(!mysqli_query($conn,$up)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $area_updated ="Your area updated successfully";
    }
}
if (isset($_POST['delete_area'])) {
    $area_delete_id = $_POST['area_delete_id'];

    $up= "DELETE from `area` WHERE `id`='$area_delete_id'"; 

    if(!mysqli_query($conn,$up)){ 
        die('Error:'. mysqli_error($conn));
    } else {
        $area_deleted ="Your area deleted successfully";
    }
}