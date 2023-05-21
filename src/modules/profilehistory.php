<?php
require('../src/modules/db.php');
if ($_SESSION['id']) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `user` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $user_type = $user['user_type'];
    $isLoggedIn = true;
} else {
    $isDark = true;
    $isLoggedIn = false;
}

include("./src/modules/db.php");

session_start();


$userId = $_SESSION['id'];

$query = "SELECT user_type FROM user WHERE id = '$userId'";

$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $userType = $row['user_type'];

    $_SESSION['user_type'] = $userType;

    if ($userType == 'BUSSINES') {
        header("Location: ../../public/ajax/index-ajax.php");
        exit();
    } else {
        header("Location: ../../public/ajax/fetchdata.php");
        exit();
    }
} else {
    header("Location: error.php");
    exit();
}




?>