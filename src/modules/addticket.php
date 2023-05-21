<?php
include_once('db.php');

$tid = $_POST['tid'] ?? '';
$id = $_POST['id'] ?? '';

// Perform the database insertion
$sql = "INSERT INTO user_tickets (ticket_id,user_id) VALUES ('$tid', '$id')";

if (mysqli_query($conn, $sql)) {
    // Database insertion successful
    echo "Ticket added successfully.";
} else {
    // Error occurred during database insertion
    echo "Error: " . mysqli_error($conn);
}

?>

?>