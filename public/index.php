<?php
session_start();
$isDark = true;
$isLoggedIn = true;
$avatar = 10;
$full_name = 'Gjon Hajdari';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>
	<?php
	if (isset($_SESSION["login"]) && ($_SESSION["login"] == true) && isset($_SESSION['dark_mode']) && ($_SESSION['dark_mode'] != "null")) {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	} else if (isset($_SESSION["login"]) && ($_SESSION["login"] == true) && isset($_SESSION['dark_mode']) && ($_SESSION['dark_mode'] == "null")) {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body class="<?php echo $isDark ? '' : 'body-light'; ?>">
	<form action="" method="POST" enctype="multipart/form-data">
		<!-- Navigation Bar -->
		<?php (isset($_SESSION["login"]) && $_SESSION["login"] == true)  ?  include "../src/templates/navbarLoggedin.php" : include "../src/templates/navbar.php";   ?>
		
		<!-- Main content -->
		<main>
			<div class="content">
				<h1 id="title">
					Book tickets
					<br>anywhere, all in <span id="accent">one place</span>
				</h1>

				<div class="options">
					<p>What, when, where?</p>
					<?php include "../src/modules/ticketfinder.php" ?>
			  		<div class="selectors <?php if (isset($_SESSION['login']) &&   $_SESSION['login']) 
			  				                   echo ($_SESSION["dark_mode"] != "null") ? '' : 'border-light'; 
											   else echo ''; ?>">

						<select name="type" id="select-what" required>
							<option value="" disabled selected>Type</option>
							<option value="Movie">Movie</option>
							<option value="Travel">Travel</option>
							<option value="Concert">Concert</option>
						</select>
						<input type="date" name="date" id="select-when" required>
						<select name="location" id="select-where" required>
							<option value="" disabled selected>Location</option>
							<option value="prishtine">Prishtinë</option>
							<option value="mitrovice">Mitrovicë</option>
							<option value="peje">Pejë</option>
							<option value="prizren">Prizren</option>
							<option value="ferizaj">Ferizaj</option>
							<option value="gjilan">Gjilan</option>
							<option value="gjakove">Gjakovë</option>
						</select>
					</div>
				</div>

				<button class="btn" id="findTicketsbtn" name="submit" <?php echo (isset($_SESSION["login"]) && $_SESSION["login"]) ? ($_SESSION["dark_mode"] == "null" ? '' : 'btn-dark') : 'btn-dark'; ?>">
					Find tickets
					<?php echo file_get_contents('assets/icons/arrow.svg'); ?>
				</button>
				<br>
				<div>
			
			</div>	
			</div>
		
			<img src="assets/images/tickets.png" alt="Tickets" id="tickets" height="500">
		</main>
		

		<!-- Footer -->
		<?php include('../src/templates/footer.php'); ?>
	</form>
</body>

</html>
<script>
document.getElementById("findTicketsBtn").addEventListener("click", function() {
    <?php
    // Check if the user is logged in
    if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
        // User is not logged in, redirect to error.php
        echo 'window.location.href = "error.php";';
    }
    ?>
});
</script>
