<?php
// Connect to the MySQL database
require_once('db.php');

// // Check if the form has been submitted
// if (isset($_POST['submit'])) {
//     // Get the user's input
//     $username_or_id = $_POST['username_or_id'];
//     $question = $_POST['question'];
    
//     // Insert the question into the database
//     $stmt = mysqli_prepare($conn, "INSERT INTO questions (username_or_id, question) VALUES (?, ?)");
//     mysqli_stmt_bind_param($stmt, "ss", $username_or_id, $question);
//     mysqli_stmt_execute($stmt);
    
//     // Close the statement
//     mysqli_stmt_close($stmt);
    
//     // Show a success message to the user
//     echo "Your question has been submitted. Thank you!";
// }

if (isset($_POST['submit'])) {
    // Get the user's input
    $username_or_id = $_POST['username_or_id'];
    $question = $_POST['question'];
    
    // Insert the question into the database
    $stmt = mysqli_prepare($conn, "INSERT INTO questions (username_or_id, question) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $username_or_id, $question);
    mysqli_stmt_execute($stmt);
    
    // Close the statement
    mysqli_stmt_close($stmt);
    
    // Show a success message to the user
    echo "Your question has been submitted. Thank you!";
}
?>
