<?php
include_once('db.php');

$type = $_POST['type'] ?? ''; 
$date = $_POST['when'] ?? ''; 
$location = $_POST['location']?? ''; 

$date = trim($date); // Removes any whitespaces
$formattedDate = date("Y-m-d", strtotime($date)); // Formats the date as 'YYYY-MM-DD'

if ($formattedDate === '1970-01-01') {
    echo "Invalid date.";
    exit;
}

$sql = "SELECT `tid`,`option`, `date`, `location` FROM `ticket` WHERE `option` = '$type' AND `date` = '$date' AND `location` = '$location'";

$result = mysqli_query($conn, $sql);

if ($result) {
    $rowCount = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $tid = $row['tid'];
            $option = $row['option'];
            $date = $row['date'];
            $location = $row['location'];

            header('Location: ../../public/find.php');
            $_SESSION["tid"] = $tid;
            $_SESSION["option"] = $option;
            $_SESSION["date"] ;
            $_SESSION["location"] = $location;
        }
    } else {
        header('Location: ../../public/error.php');
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
    



?>