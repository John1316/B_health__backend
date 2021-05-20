<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['handmade_id'] = $_GET['id'];
    $sql = "select * from handmade_meals where id = '$id'";
    $result = $conn->query($sql) or die("failed to query".mysqli_error($conn));
    $row = $result->fetch_assoc();
}
