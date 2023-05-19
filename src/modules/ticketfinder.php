<?php
include_once ('db.php');

$type = '';
$date = '';
$place = '';

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
    header("Location: error.php ");
    }

?>