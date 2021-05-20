<?php 
    $conn = mysqli_connect("localhost","root","","b_health"); 
    if(!$conn){ 
        die('database connection fail: '.mysqli_error());
    } 
    session_start();

