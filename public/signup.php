<?php
	$isDark = true;
	session_start();
	if ($_SESSION["login"] == true) {
		header('Location: index.php');
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='../assets/Favicon.svg'>
	<?php
		if (($_SESSION["login"]==true) && ($_SESSION['dark_mode'] != "null")) {
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		} else if(($_SESSION["login"]==true) && ($_SESSION['dark_mode'] == "null")){
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
		}else{
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		}
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/signup.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
	<link rel="stylesheet" href="css/login.css">
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
			<?php include "../src/modules/signupConnect.php"; ?>

			<form action="" method="POST" class="<?php echo $isDark ? '' : 'border-light'; ?>">

				<div class="user-type">
					<label>
						<input type="radio" name="user_type" value="INDIVIDUAL">
						Individual
					</label>
					<label>
						<input type="radio" name="user_type" value="BUSINESS">
						Business
					</label>
				</div>

				<input type="text" name="name" required="required" placeholder="Name" class="input">

				<input type="email" name="email" required="required" placeholder="Email address" class="input">
				
				<input type="email" name="email_confirm" required="required" placeholder="Confirm email" class="input">

				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput1">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-1"></i>
				</div>
				
				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password_confirm" required="required" placeholder="Confirm password" class="input" id="passwordInput2">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-2"></i>
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check">
					<p>
						I agree to the <a href="assets/extra/TERMS_AND_CONDITIONS.pdf">Terms of Use</a> & <a href="assets/extra/PRIVACY_POLICY.pdf	">Privacy Policy</a>
					</p>
				</div>
			<input type="submit" name="submit" id="button" class="btn">
			</form>
		</div>

	</div>
	</main>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>
