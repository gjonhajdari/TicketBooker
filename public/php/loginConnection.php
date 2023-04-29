<?php
require_once('db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn or die("Connection failed: ".mysqli_connect_error());
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "INSERT INTO `login_user`(`email`,`password`)
                VALUES ('$email','$password')";
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