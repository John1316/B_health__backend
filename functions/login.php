<?php
    if(isset($_POST['registsubmit'])){
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $phone = $_POST['phone'];
    $bmi = $height - $weight ;
    $password = sha1($_POST['password']);
    $un = "SELECT username FROM users WHERE username = '$username'"; 
    $um_conn = mysqli_query($conn,$un)or die(mysqli_error($conn));   


    if (mysqli_num_rows($um_conn) >0){
        $um = "Your Username already existed";
    }
    
    
    else 
    {
        $insert= "INSERT INTO `users` (`full_name`,`username`,`phone`,`password`,`height`,`weight` , `bmi`) VALUES('$full_name','$username','$phone','$password' , '$height' , '$weight','$bmi' )";
        $success = "Your information posted successfully";
        if(!mysqli_query($conn,$insert)){ 
        die('Error:'. mysqli_error($conn));
        } 
        
    }
}
if (isset($_POST['loginsubmit'])) {
    $login_username = $_POST['login_username'];
    $login_password = sha1($_POST['login_password']);

    $sql = "SELECT * FROM users WHERE username = '$login_username' and password = '$login_password' ";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        echo('check as something went wrong in the sql statement');
    } else {
        while ($row = mysqli_fetch_array($result)){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['height'] = $row['height'];
            $_SESSION['weight'] = $row['weight'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['bmi'] = $row['bmi'];
        }
        $count = mysqli_num_rows($result);
            if ($count == 1) {
                $_SESSION['username'] = $login_username;
                header("location: index.php");
            } else {
                $logfalied = "Your Username or Password is uncorrect";
            }
        
    }
}