<?php 

	$isDark = true;
	$isLoggedIn = true;
	$avatar = 5;
	$first_name = 'Zana';
	$last_name = 'Misini';

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
		if ($isDark == true) {
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		} else {
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
		}
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
	crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body class="<?php echo $isDark ? '' : 'body-light'; ?>">

	<!-- Navigation Bar -->
	<?php $isLoggedIn ? include "../src/templates/navbarLoggedin.php" : include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<main>
		<div class="content">
			<h1 id="title">
				Book tickets
				<br>anywhere, all in <span id="accent">one place</span>
			</h1>

			<div class="options">
				<p>What, when, where?</p>

				<div class="selectors <?php echo $isDark ? '' : 'border-light'; ?>">
					<select name="what" id="select-what">
						<option value="Movie">Movie</option>
						<option value="Travel">Travel</option>
						<option value="Concert">Concert</option>
					</select>
					<input type="date" name="when" id="select-when">
					<select name="where" id="select-where">
						<option value="Movie">Prishtinë</option>
						<option value="Travel">Mitrovicë</option>
						<option value="Concert">Pejë</option>
						<option value="Concert">Prizren</option>
						<option value="Concert">Ferizaj</option>
						<option value="Concert">Gjilan</option>
						<option value="Concert">Gjakovë</option>
					</select>
				</div>
			</div>

			<button class="btn <?php echo $isDark ? '' : 'btn-dark'; ?>">
				Find tickets
				<?php echo file_get_contents('assets/icons/arrow.svg') ?>
			</button>
		</div>
		<img src="assets/images/tickets.png" alt="Tickets" id="tickets" height="500">
	</main>

	<!-- Footer -->
	<?php include('../src/templates/footer.php') ?>

</body>

</html>