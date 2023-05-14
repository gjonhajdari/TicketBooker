<?php
session_start();
// Parametrat e databazes
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "TicketBooker";

// connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// connection check
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table for user registration information
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
confirm_email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
confirm_password VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>