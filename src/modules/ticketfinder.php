<?php
include_once ('db.php');

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $date = $_POST['when'];
    $place = $_POST['location'];
}


    $sql = "SELECT `option`, `date`, `location` FROM `ticket` WHERE `option` =  '$type' AND `date`  = 'date' 
            AND `location` = '$place'";

    $result = mysqli_query($conn, $sql);

    if ($result > 0) {
        header("Location: ../../public/find.php");
        echo "The variables exist in the database.";
    } else {
        // No rows found, do something else
        echo "This type of  Ticket does not exist .";
    }





?>