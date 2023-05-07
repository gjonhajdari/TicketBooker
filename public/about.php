<?php 

	$isDark = true;
	$isLoggedIn = false;
	$avatar = 10;
	$first_name = 'Gjon';
	$last_name = 'Hajdari';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>About - TicketBooker</title>
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
	<link rel="stylesheet" href="css/about.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<?php $isLoggedIn ? include "../src/templates/navbarLoggedin.php" : include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<div class="container">

		<div class="hero">
			<h1>So <span class="accent">who</span> are we exactly?</h1>
			<?php echo file_get_contents('assets/icons/path.svg') ?>
		</div>

		<div class="section">
			<p>
				TicketBooker is an online platform for <span>purchasing tickets</span> to concerts, 
				movies or flights internationally. Our services make it easy to book tickets 
				from several booking websites and make them avaliable in one place, in a 
				<span>single transaction</span>, whether you are in the UK, the USA or Europe. <span>No fees</span>
				are charged at the point of purchase or after your event has ended.
			</p>

			<img src="assets/icons/ticket.svg" alt="Ticket icon">
		</div>

		<div class="section">
			<img src="assets/icons/world.svg" alt="World icon">

			<p>
				TicketBooker operates in all <span> EU countries, Iceland, Norway and Switzerland.</span> 
				The founding team of TicketBooker was made up of entrepreneurs from 
				London, Oslo and Paris. The company now employs <span>120 people</span>. The 
				service's technical platform has a back-end computer server with support of 
				Citrix/Dell shared network servers and database.
			</p>
		</div>

		<div class="section">
			<p>
				In September 2015, TicketBooker partnered with <span>Worldline</span>, one of Europe's
				leading provider of payment services, for TicketBooker's European ticket 
				booking services, allowing the company to <span>expand its presence</span> to 2,500+
				Live Nation & AXS corporate clients as well as 20,000+ independent music 
				venues and promoters. TicketBooker has recieve<span>d $1.3m </span>in fu	nding from
				City Index Ventures in May 2014.
			</p>

			<img src="assets/icons/increase.svg" alt="Ticket icon">
		</div>

	</div>

	<!-- Footer -->
	<?php include('../src/templates/footer.php') ?>

</body>

</html>