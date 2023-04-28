<?php
// Parametrat e databazes
$servername = "localhost:3307";
$username = "username";
$password = "";
$dbname = "TicketBooker";

// // connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// connection check
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// $sql = "CREATE TABLE users (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// first_name VARCHAR(30) NOT NULL,
// last_name VARCHAR(30) NOT NULL,
// email VARCHAR(50) NOT NULL,
// confirm_email VARCHAR(50) NOT NULL,
// password VARCHAR(50) NOT NULL,
// confirm_password VARCHAR(50) NOT NULL
// )";

// if (mysqli_query($conn, $sql)) {
//   echo "Table users created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }






if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
  $conn or die("Connection failed: ".mysqli_connect_error());
  if(isset($_POST['first_name']) && isset($_POST['last_name'])&& isset($_POST['email'])&& isset($_POST['email_confirm'])
     && isset($_POST['password'])&& isset($_POST['password_confirm'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['first_name'];
      $email = $_POST['email'];
      $email_confirm = $_POST['email_confirm'];
      $password = $_POST['password'];
      $password_confirm = $_POST['password_confirm'];




      $sql = "INSERT INTO `user`(`first_name`,`last_name`,`email`,`email_confirm`,`password`,`password_confirm`)
               VALUES ('$first_name','$last_name','$email','$email_confirm','$password','$password_confirm')";
               $query = mysqli_query($conn, $sql);

               if($query){
                echo 'Entry Successfull';
               }
               else{
                echo 'Error Ocurred';
               }
}
}



mysqli_close($conn);


?>


