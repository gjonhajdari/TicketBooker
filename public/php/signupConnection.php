<?php
require_once('db.php');

// $sql = "CREATE TABLE user (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// first_name VARCHAR(20) NOT NULL,
// last_name VARCHAR(20) NOT NULL,
// email VARCHAR(50) NOT NULL,
// confirm_email VARCHAR(50) NOT NULL,
// password VARCHAR(250) NOT NULL,
// confirm_password VARCHAR(250) NOT NULL
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
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $email_confirm = $_POST['email_confirm'];
      $password = $_POST['password'];
      $password_confirm = $_POST['password_confirm'];




      $sql = "INSERT INTO `user`(`first_name`,`last_name`,`email`,`email_confirm`,`password`,`password_confirm`)
               VALUES ('$first_name','$last_name','$email','$email_confirm','$password','$password_confirm')";
               $query = mysqli_query($conn, $sql);

               if($query){
                echo 'Registration Successfull';
               }
               else{
                echo 'Error Ocurred';
               }
}
}



mysqli_close($conn);


?>


