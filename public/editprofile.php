<?php

//TODO session variables for users resources
//TODO write code for changing passwords using sessions
//TODO write code to change light/dark mode using session
//TODO write code to change profile avatar using sessions
//TODO add submit button to make the changes??
//TODO write code to change username and email (if needed)

// require('signup.php');
// if(!empty($_SESSION['id'])){
// 	$id = $_SESSION["id"];
// 	$result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
// 	$row = mysqli_fetch_assoc($result);

// }else{
// 	header("Location: login.php");
// }


$isDark = false;
$isLoggedIn = true;
$isChecked = false;
$avatar = 4;
$full_name = 'Zana Misini';
$email = 'zaanamisinii@gmail.com'

	?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit profile - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>
	<?php
	if ($isDark == true) {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	}
	?>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/editprofile.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"
		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation bar -->
	<?php include "../src/templates/navbarLoggedin.php"; ?>

	<div class="container">

		<h1 class="path"><span>
				<?php echo $full_name ?> /
			</span>Edit profile</h1>
		<div class="main">
			<div class="left">

				<div class="field">
					<div class="field-name">
						<h1>Avatar</h1>
					</div>
					<div class="avatars">
						<?php
						for ($i = 1; $i < 13; $i++) {
							if ($i == $avatar) {
								$selected = true;
								include "../src/templates/avatar.php";
							} else {
								$selected = false;
								include "../src/templates/avatar.php";
							}
						}
						?>
					</div>
				</div>
			</div>

			<div class="right <?php echo $isDark ? '' : 'border-light-2'; ?>">
				<div class="field">
					<div class="field-name">
						<h1>User info</h1>
					</div>
					<div class="inputs">
						<div class="input-field">
							<label>Name</label>
							<input type="text" class="input" value="<?php echo $full_name; ?>">
						</div>
						<div class="input-field">
							<label>Email address</label>
							<input type="text" class="input" value="<?php echo $email; ?>">
						</div>
					</div>
				</div>

				<div class="field">
					<div class="field-name">
						<h1>Password</h1>
					</div>
					<div class="inputs">
						<div class="input-field">
							<label>Old password</label>
							<input type="password" class="input">
						</div>
						<div class="input-field">
							<label>New password</label>
							<input type="password" class="input">
						</div>
						<div class="input-field">
							<label>Confirm new password</label>
							<input type="password" class="input">
						</div>
					</div>
				</div>

				<div class="field">
					<div class="field-name">
						<h1>Appearance</h1>
					</div>
					<div class="switch-field">
						<p>Dark mode</p>
						<label class="switch">
							<input type="checkbox" name="appearance" <?php echo $isChecked ? 'checked' : ''; ?>>
							<span class="slider"></span>
						</label>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>