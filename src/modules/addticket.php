<?php
require('../src/modules/db.php');

if (isset($_POST['userId']) && isset($_POST['ticketId'])) {
    $userId = $_POST['userId'];
    $ticketId = $_POST['ticketId'];

    // Insert the user_id and ticket_id into the user_tickets table
    $query = "INSERT INTO user_tickets (user_id, ticket_id) VALUES ('$userId', '$ticketId')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Ticket added successfully.";
    } else {
        echo "Error occurred while adding the ticket: " . mysqli_error($conn);
    }
} else {
    echo "User ID or Ticket ID not provided.";
}

mysqli_close($conn);
?>