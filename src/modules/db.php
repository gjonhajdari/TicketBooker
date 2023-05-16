<?php

$dbhost = 'localhost:3307';
$dbbuser = 'root';
$dbpass = '';
$db = "ticketbooker";
$conn = mysqli_connect($dbhost, $dbbuser, $dbpass, $db);

if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}

?>