<?php
// deleteticket.php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["itemId"]) && isset($_SESSION['id'])) {
    $itemId = $_POST["ticketId"];
    $userId = $_SESSION['id'];
    
    require_once('../src/modules/db.php');
    
    
    $deleteQuery = "DELETE FROM user_tickets WHERE ticket_id = '$itemId' AND user_id = '$userId'";
    
    
    if ($deleteSuccessful) {

        echo "Ticket and associated user deleted successfully";

    } else {

        echo "Error deleting the ticket and associated user";

    }
}
?>