<?php $isDark = false; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact - TicketBooker</title>
	<meta charset="utf-8">
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
	<link rel="stylesheet" href="css/contact.css">
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
				<h1>
					Got anything for us?
					<br class="hidden"> Leave a <span> message!</span>
				</h1>
				<p>Or contact us via Instagram, Linkedin or Customer Support.</p>
			</div>

			<form action="../src/modules/contactConnection.php" method="POST">
				<div class="inputs <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="info">
						<input type="text" name="name" required="required" placeholder="Full name" class="input">
						<input type="email" name="email" required="required" placeholder="Email address" class="input">
					</div>
					<textarea name="message" placeholder="Your message" cols="30" rows="10"></textarea>
				</div>
				<input type="submit" name="submit" id="submit" class="btn" value="Send message">
			</form>
		</div>
	</div>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>