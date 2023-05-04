<?php $isDark = true; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact - TicketBooker</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/Favicon.svg'>
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
	<?php include('../src/templates/navbar.php') ?>

	<!-- Main content -->
	<div class="InputMessage">
		<h1>Got anything for us? Leave a <span> message! </span> </h1>
		<p id="id"> Or contact us via Instagram, Linkedin or Customer Support.</p>
		<div class="InputForm">
			<form action="../src/modules/contactConnection.php" method="POST">
				<div class="form1 <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="text" id="fname" name="fname" placeholder="Full Name" target="_self" method="post"
						autofocus required>
					<input type="email" id="femail" name="femail" placeholder="Email address" target="_self"
						method="post" required>
				</div>
				<div class="form2 <?php echo $isDark ? '' : 'border-light'; ?>">
					<textarea name="fmessage" id="fmessage" placeholder="Your message here"></textarea>
				</div>
				<div class="form3">
					<input type="submit" name="submit" id="button" class="btn" value="Send message">
				</div>
			</form>
		</div>
	</div>

	<!-- Footer -->
	<?php include('../src/templates/footer.php') ?>

</body>

</html>