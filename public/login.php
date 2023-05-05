<?php $isDark = true; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/Favicon.svg'>
	<link rel='stylesheet' href='css/palette-dark.css'>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<?php include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<div class="main">

		<div class="content">
			<div class="headers">
				<h1>Welcome back!</h1>
				<p>
					Don't have an account?
					<a href="signup.php">Sign up</a>.
				</h2>
			</div>
	
			<form action="../src/modules/loginConnection.php" method="POST">
				<input type="email" name="email" required="required" placeholder="Email address" class="input">
	
				<div class="password">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility"></i>
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check">
					<p>Remember me</p>
				</div>
	          <input type="submit" name="submit" id="button"  class="btn">
			</form>
		</div>

	</div>
	
	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>
