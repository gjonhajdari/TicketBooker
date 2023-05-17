<?php
include_once ('db.php');

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $date = $_POST['when'];
    $place = $_POST['location'];
}


    $sql = "SELECT ticket_type, date, location FROM `tickets` WHERE ticket_type =$type AND date =$date AND location =$place";

    $result = mysqli_query($conn, $sql);

    if ($result > 0) {
        header("Location: find.php");
        echo "The variables exist in the database.";
    } else {
        // No rows found, do something else
        echo "This type of  Ticket does not exist .";
    }





?>