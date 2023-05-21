<?php

// deleteticket.php
include_once('db.php');
session_start();

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


$tid=$_SESSION["tid"];
$id=$_SESSION['id'];
// Perform the database deletion
$deleteQuery = "DELETE FROM user_ticket WHERE ticket_id = '$tid' AND user_id = '$id'";

$deleteResult = mysqli_query($conn, $deleteQuery);

if ($deleteResult) {
    echo "Ticket and associated user deleted successfully";
} else {
    echo "Error deleting the ticket and associated user: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

