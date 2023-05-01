<?php
require_once('db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn or die("Connection failed: ".mysqli_connect_error());
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "SELECT * FROM `login_user` WHERE 
                email = '$email' AND password = '$password'";

         $result = mysqli_query($conn, $sql);
         if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                echo "Login successful";
                session_start();
                $_SESSION['email'] = $email;
                header('location:index.html');
            }else {
              echo "Invalid data";
            }

    }
  }
};







mysqli_close($conn);
?>