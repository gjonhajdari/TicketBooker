
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
				<h1>Login</h1>
				<p>
					Don't have an account?
					<a href="signup.php">Sign up</a>.
				</h2>
			</div>
			<?php



?>
			<?php include "../src/modules/loginConnect.php"?>	
			<form action="login.php" method="POST" class="<?php echo $isDark ? '' : 'border-light'; ?>">
				<input type="email" name="email" required="required" placeholder="Email address" class="input"
				required value = "<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}; ?>">
	
				<div class="password">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput1"
					required value = "<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}; ?>">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-1"></i>
					<!-- <span><i class="fa-solid fa-eye" id="eye" onclick="myfunction()"></i></span>  -->
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check" name = "remember_checkbox"> Remember me
					
				</div>
	          <input type="submit" name="submit" id="button"  class="btn" value="Login">
			</form>
		</div>

	</div>
	
	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>

