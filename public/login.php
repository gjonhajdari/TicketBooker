<?php 

session_start();
$_SESSION["login"] = false;
$isDark = true; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>
	<?php
	if (($_SESSION["login"]==true) && ($_SESSION['dark_mode'] == "null")) {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else if(($_SESSION["login"]==true) && ($_SESSION['dark_mode'] != "null")){
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}else{
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/login.css">
	
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
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
</head>

<body>

	<!-- Navigation Bar -->
	<?php include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<div class="main">

		<div class="content">
			<div class="headers">
				<!--TODO mos me thon welcome back secilen here-->
				<h1>Welcome back!</h1>
				<p>
					Don't have an account?
					<a href="signup.php">Sign up</a>.
				</h2>
			</div>
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
				$_SESSION["avatar"] = 1;
				$_SESSION["dark_mode"] = $user["dark_mode"];
				header('location:index.php');
				die();
			}
		}else{
			echo "<div class='alert alert-danger '>Email or Password do not match</div>";
		}
	
};

mysqli_close($conn);

?>
			<!-- // ../src/modules/loginConnection.php	 -->
			<form action="login.php" method="POST" class="<?php echo $isDark ? '' : 'border-light'; ?>">
				<input type="email" name="email" required="required" placeholder="Email address" class="input">
	
				<div class="password">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput1">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-1"></i>
					<!-- <span><i class="fa-solid fa-eye" id="eye" onclick="myfunction()"></i></span>  -->
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check">
					<p>Remember me</p>
				</div>
	          <input type="submit" name="submit" id="button"  class="btn" value="Login">
			</form>
		</div>

	</div>
	
	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>
