<style>
		
        .alert {
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
          }
          .alert-danger {
            color: #721c24;
            background-color:#f0afaf;
            border-color: #f5c6cb;
          }
          
          
            </style>

<?php

require_once('../src/modules/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());
	
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `user` WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);

		$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
		if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user"] = "yes";
                $_SESSION["login"] = true;
                $_SESSION["id"] = $user["id"];
                $_SESSION["user_type"] = $user["user_type"];
                $_SESSION["name"] = $user["name"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["password"] = $user["password"];
                $_SESSION["checkbox"] = $user["checkbox"];
                $_SESSION["avatar"] = $user["avatar"];
                $_SESSION["dark_mode"] = $user["dark_mode"];
                include "fetchtickets.php";
                header('location:index.php');
                die();
            } else {
                echo "<div class='alert alert-danger'>Email or Password do not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email or Password do not match</div>";
        }
    };
    
mysqli_close($conn);

?>