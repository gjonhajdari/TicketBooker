<?php
//TODO write code for changing passwords using sessions
//TODO write code to change light/dark mode using session
//TODO write code to change profile avatar using sessions
//TODO add submit button to make the changes??
//TODO write code to change username and email (if needed)

session_start();
$isDark = true;
$isChecked = false;
$avatar = 10;
$full_name = 'Zana Misini';
$email = 'zaanamisinii@gmail.com';
$userType = 'BUSINESS';



?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
		if ($_SESSION["dark_mode"] == "null") {
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	?>
<link rel='stylesheet' href='css/palette-light.css' id="light-theme">
<link rel='stylesheet' href='css/palette-dark.css' id="dark-theme">


	<style>
		#button, #button1 {
		padding: 1rem 2rem;
		font-size: 1.25rem;
		border: none;
		border-radius: 1rem;
		width: 100%;
		background-color: var(--accent);
		font-weight: 600;
		cursor: pointer;
		transition: 300ms;
		color: var(--background);
		margin-top: 30px;
		}

		#button:hover, #button1:hover {
		transform: translateY(-5px);
		}
		.alert {
 		 padding: 0.75rem 1.25rem;
 		 margin-bottom: 1rem;
  		border: 1px solid transparent;
  		border-radius: 0.25rem;
  		width: 100%;
  		margin-right: auto;
		}

		.alert-success {
  		color: #155724;
  		background-color: #d4edda;
  		border-color: #c3e6cb;
		}

		.alert-danger {
  		color: #721c24;
  		background-color: #f8d7da;
 		border-color: #f5c6cb;
		}
	</style>
	<title>Edit profile - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>

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
				<?php echo $_SESSION["name"] ?> /
			</span>Edit profile</h1>
		<div class="main">
			<div class="left">
			<form method="POST" enctype="multipart/form-data">
				<div class="field">
					<div class="field-name">
					<?php include "changeavatar.php"; ?>
						<h1>Avatar</h1>
					</div>
					<div class="avatars">
						<?php
						for ($i = 1; $i < 13; $i++) {
							if ($i == $_SESSION["avatar"]) {
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
				<input type="submit" name="change_avatar" id="button1" class="btn" value="Change Avatar">
				
			</form>
			
			</div>
		
			<div class="right <?php echo $_SESSION['dark_mode']!="null" ? '' : 'border-light-2'; ?>">
				<div class="field">
					<div class="field-name">
						<h1>User info</h1>
					</div>
					<div class="inputs">
						<div class="input-field">
							<label>Name</label>
							<input type="text" class="input" value="<?php echo $_SESSION["name"]; ?>">
						</div>
						<div class="input-field">
							<label>Email address</label>
							<input type="text" class="input" value="<?php echo $_SESSION["email"]; ?>">
						</div>
					</div>
				</div>
				
				<form method="POST" enctype="multipart/form-data">
				<div class="field">
					
					<div class="field-name">
						<h1>Password</h1>
						
					</div>
					<div class="inputs">
						<div class="input-field">
						<?php include "changepassword.php"; ?>
							<label>Old password</label>
							<input type="password" class="input" name="oldpassword">
						</div>
						<div class="input-field">
							<label>New password</label>
							<input type="password" class="input" name="newpassword">
						</div>
						<div class="input-field">
							<label>Confirm new password</label>
							<input type="password" class="input" name="confirmpassword">
						</div>
					</div>
					<input type="submit" name="change_password" id="button" class="btn" value="Change Password">
				</div>
				</form>
				<div class="field">
					<div class="field-name">
						<h1>Appearance</h1>
					</div>
					<div class="switch-field">
						<p id="p">Light/Dark Mode</p>
						<label class="switch">
							<input type="checkbox" name="appearance" id="mode-switch">
							<span class="slider"></span>
						</label>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script>
	
		// Get the mode switch checkbox and the light/dark theme links
		var modeSwitch = document.getElementById("mode-switch");
		var lightTheme = document.getElementById("light-theme");
		var darkTheme = document.getElementById("dark-theme");

// When the mode switch is toggled, update the theme based on the checkbox state
modeSwitch.addEventListener("change", function() {
  if (modeSwitch.checked) {
    // Dark mode selected, update the theme to the dark palette
    lightTheme.disabled = true;
    darkTheme.disabled = false;
    document.getElementById('p').innerText = "Dark Mode";
  } else {
    // Light mode selected, update the theme to the light palette
    lightTheme.disabled = false;
    darkTheme.disabled = true;
    document.getElementById('p').innerText = "Light Mode";
  }
  
  // Use AJAX to update the user preference in the server-side database
  fetch("preference.php", {
    method: "POST",
    body: "mode=" + (modeSwitch.checked ? "1" : "null"),
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    }
  })
  .then(function(response) {
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
  })
  .catch(function(error) {
    console.error("Error updating user preference:", error);
  });
});

	</script>


	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>


	
</body>

</html>