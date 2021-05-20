<?php
if (isset($_POST['dashboard_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $login = "SELECT * FROM `admins` WHERE `username` = '$username' and `password` = '$password'";

    $result = mysqli_query($conn, $login);

    if (!$result) {
        echo('check as something went wrong in the sql statement');
    } else {
        while ($row = mysqli_fetch_array($result))
        {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
        }
        
        $count = mysqli_num_rows($result);
        
            if ($count == 1) {
                $_SESSION['username'] = $username;
                header("location: dashboard.php");
            } else {
                $logfailed = "Your email or password is uncorrect";
            }
        
    }
}
