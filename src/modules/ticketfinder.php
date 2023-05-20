<?php
include_once('db.php');

$type = $_POST['type'] ?? ''; 
$date = $_POST['when'] ?? ''; 
$place = $_POST['location']?? ''; 

$date = trim($date); // Removes any whitespaces
$formattedDate = date("Y-m-d", strtotime($date)); // Formats the date as 'YYYY-MM-DD'

if ($formattedDate === '1970-01-01') {
    echo "Invalid date.";
    exit;
}

$sql = "SELECT `option`, `date`, `location` FROM `ticket` WHERE `option` = '$type' AND `date` = '$date' AND `location` = '$place'";

$result = mysqli_query($conn, $sql);

if ($result) {

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $option = $row['option'];
            $date = $row['date'];
            $location = $row['location'];

            header('Location: ../public/find.php');
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
    



?>