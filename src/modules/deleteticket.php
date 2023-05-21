<?php

// deleteticket.php


include_once('db.php');

$ttid = $_POST['ttid'] ?? '';
$tid = $_POST['tid'] ?? '';

// Perform the database deletion
$deleteQuery = "DELETE FROM user_ticket WHERE ticket_id = '$ttid' AND user_id = '$tid'";

$deleteResult = mysqli_query($conn, $deleteQuery);

if ($deleteResult) {
    echo "Ticket and associated user deleted successfully";
} else {
    echo "Error deleting the ticket and associated user: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

