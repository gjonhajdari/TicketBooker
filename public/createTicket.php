<?php
	//TODO consult group about the number of tickets (what if you're sold out?!)
	//If yes, add sessions for tickets
$isDark = true;
$isLoggedIn = true;
$avatar = 10;
$full_name = 'Gjon Hajdari';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Document</title>
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
	<link rel="stylesheet" href="css/createTicket.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation bar -->
	<?php include "../src/templates/navbarLoggedin.php" ?>

	<!-- Main content -->
	<div class="container">

		<div class="content">
			<h1 class="header">Create a ticket</h1>

			<form action="../src/modules/createFunction.php" class="inputs">
				<div class="input-field">
					<p class="description">Type and location</p>
					<div class="selectors <?php echo $isDark ? '' : 'border-light'; ?>">
						<select name="what" id="select-what">
							<option value="Movie">Movie</option>
							<option value="Travel">Travel</option>
							<option value="Concert">Concert</option>
						</select>
						<select name="where" id="select-where">
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

				<div class="input-field">
					<p class="description">Date and time</p>
					<div class="selectors <?php echo $isDark ? '' : 'border-light'; ?>">
						<input type="date" name="when-date" id="select-when">
						<input type="time" name="when-time" id="select-when">
					</div>
				</div>

				<div class="input-field <?php echo $isDark ? '' : 'border-light'; ?>">
					<p class="description">Event title</p>
					<input type="text" name="title" placeholder="Title">
				</div>

				<div class="input-field <?php echo $isDark ? '' : 'border-light'; ?>">
					<p class="description">Event description</p>
					<textarea name="description" cols="30" rows="12" placeholder="Description"></textarea>
				</div>
				
				<input type="submit" id="button" name="submit" value="Create ticket">
			</form>

		</div>

	</div>

	<!-- Footer -->
	<?php include "../src/templates/footer.php" ?>
</body>

</html>