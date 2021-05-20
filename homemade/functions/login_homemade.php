<?php
    if(isset($_POST['registsubmit'])){
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];

    $password = sha1($_POST['password']);
    $un = "SELECT username FROM homemades WHERE username = '$username'"; 
    $um_conn = mysqli_query($conn,$un)or die(mysqli_error($conn));   


    if (mysqli_num_rows($um_conn) >0){
        $um = "Your Username already existed";
    }else {
        $insert= "INSERT INTO `homemades` (`full_name`,`username`,`phone`, `password`) VALUES('$full_name','$username','$phone' ,'$password' )";
        $success = "Your information posted successfully";
        if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
        } 
        
    }
}
if (isset($_POST['loginsubmit'])) {
    $login_username = $_POST['login_username'];
    $login_password = sha1($_POST['login_password']);

    $sql = "SELECT * FROM homemades WHERE username = '$login_username' and password = '$login_password' ";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        echo('check as something went wrong in the sql statement');
    } else {
        while ($row = mysqli_fetch_array($result)){
            $_SESSION['handemade_id'] = $row['id'];
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['age'] = $row['age'];
            
        }
        $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['username'] = $login_username;
                header("location: dashboard.php");
            } else {
                $logfalied = "Your Username or Password is uncorrect";
            }
        
    }
}