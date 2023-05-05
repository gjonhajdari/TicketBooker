<?php $isDark = false; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='../assets/Favicon.svg'>
	<?php
	if ($isDark == true) {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	}
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/signup.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<?php include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<main>
		<br><br><br>
		<h1>Create an account</h1> <br>
		<h6>Already have one? <a href="login.html" id="a">Log in</a></h6>
		<br>
		<form action="../src/modules/signupConnection.php" method="POST" class="<?php echo $isDark ? '' : 'border-light'; ?>">
		<div>
		<input type="radio" name="user_adm" value="ADMINISTRATOR"/>Administrator</td> 
		<input type="radio" name="user_adm" value="USER"/>User</td> 
		</div>	
		
		<div>
				<input name="name_bus" id="email" type="text" placeholder="First name or Business name" />
			</div>

			<br>
			<div class="Email">
				<input type="email" name="email" id="email" placeholder="Email address">
			</div>
			<br>
			<div class="Email">
				<input type="email" name="email_confirm" id="email" placeholder="Confirm email address">
			</div>
			<br>
			<div class="Password">
				<input type="password" name="password" id="password" placeholder="Password">
				<span>
					<!-- <i class="fa fa-eye" id="font" onclick="togglePw()" aria-hidden="true"></i> -->
				</span>
			</div>
			<br>
			<div class="Password">
				<input type="password" name="password_confirm" id="password" placeholder="Confirm Password">
				<span>
					<!-- <i class="fa fa-eye" id="fonti" onclick="togglepw()" aria-hidden ="true">  </i> -->
				</span>
			</div>

			<br>

			<div class="check">

				<p id="agree">
					<input type="checkbox" name="checkbox" id="checkbox"> I agree to the
					<a href="../assets/PRIVACY_POLICY.pdf" target="_blank" class="footer-linkss">Privacy Policy</a>&
					<a href="../assets/TERMS_AND_CONDITIONS.pdf" target="_blank" class="footer-links">Terms of Use</a>
				</p>


			</div>
			<input type="submit" name="submit" id="submit" class="btn">

		</form>
	</main>
	<br><br><br>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>