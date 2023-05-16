<?php
session_start();
require('../src/modules/db.php');

// Update the users preference in the database
$user_id = $_SESSION['id'];
$dark_mode = $_POST['mode'];
$stmt = $conn->prepare("UPDATE `user` SET `dark_mode` = ? WHERE `id` = ?");
$stmt->bind_param('si', $dark_mode, $user_id);
$stmt->execute();

$_SESSION["dark_mode"] = $dark_mode;

// //bon edhe pa kto
// http_response_code(200); // OK status code
// echo json_encode(array("status" => "success"));

// Return the updated preference value to the client
echo $dark_mode;

?>

