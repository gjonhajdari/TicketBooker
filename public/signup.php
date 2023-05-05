<?php $isDark = true ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width", initial-scale="1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/Favicon.svg'>
	<link rel='stylesheet' href='css/palette-dark.css'>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
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
				<h1>Create an account</h1>
				<p>
					Already have one?
					<a href="login.php">Log in</a>.
				</h2>
			</div>
	
			<form action="../src/modules/loginConnection.php" method="POST">

				<div class="name">
					<input type="text" name="firstName" required="required" placeholder="First name" class="input">
					<input type="text" name="lastName" required="required" placeholder="Last name" class="input">
				</div>

				<input type="email" name="email" required="required" placeholder="Email address" class="input">
	
				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput1">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-1"></i>
				</div>
				
				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password" required="required" placeholder="Confirm password" class="input" id="passwordInput2">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-2"></i>
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