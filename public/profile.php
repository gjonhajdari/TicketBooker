<php $isDark = true; ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>TicketBooker - Profile</title>
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
	<link rel="stylesheet" href="css/profile.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"
		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>
	
	<!-- Navigation Bar -->
	<?php include "../src/templates/navbar.php"; ?>

	<main>
		<div class="Profile">

			<div class="Profile-Button">
				<h1 id="title">
					<b>Welcome back </b>, Klajdi
					<!-- to be fixed with javascript!-->
					<br>
				</h1>
				<p id="Profile-Paragraph">
					<i> Take a look at all of your tickets. </i>
				</p>
				<button id="EditProfile-Button">
					Edit Profile
				</button>
			</div>
			<div class="Profile-Picture">
				<img src="assets/icons/ProfilePicture.jpg" alt="" width="100" height="100"
					style="border-radius:50px; float:right" id="ImageProfile">
				<br>
				<br>
				<p id="Profile-Paragraph1">
					  Klajdi Gashi
				</p>
				<br>
				<p id="Profile-Paragraph1" style="color: var(--foreground);">@KlajdixGashii </p>
				<!--Username-->
				<!--profile-->
				<br>
				<a href="login.html">
				<button id="LogOut-Profile">
					Log Out
				</button>
			</a>
			</div>
		</div>

		<center>
			<div class="Ticket-buttons">
				<button class="tab-button active" id="All-Tickets">
					<img src="assets/icons/library.svg" alt="">
					<p>All tickets</p>
				</button>

				<button class="tab-button" id="Travels">
					<img src="assets/icons/location.svg" alt="">
					<p>Travels</p>
				</button>

				<button class="tab-button" id="Movies">
					<img src="assets/icons/Movie.svg" alt="">
					<p>Movies</p>
				</button>

				<button class="tab-button" id="Concerts">
					<img src="assets/icons/Concert.svg" alt="">
					<p>Concerts</p>
				</button>
			</div>
		</center>


	</main>

	<hr style="width: 1400px; margin:auto; color:var(--foreground);">

	<div class="TicketBlocks">
		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/Concert.svg" alt="">
				<text class="TicketText">Concert Ticket</text>
				
			</p>
			<hr>
			<p class="TicketTitle">
				Asgjë sikur dielli
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar">
				December 23,2022
				<p id="Time" class="TicketTime">
					11:00 PM -2:00 AM
				</p>
			</p>

			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				Gërmia Park,Prishtinë XK</text>
			</p>

		</div>


		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/location.svg" alt="">
				<text class="TicketText"> Travel Ticket </text>
			</p>

			<hr>
			<p class="TicketTitle">
				Leeds,United Kingdom
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar">
				March 2,2023
				<p id="Time" class="TicketTime">
					11:30 AM
				</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				"Adem Jashari" Airport,Prishtinë XK</text>
			</p>

		</div>


		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/Movie.svg" alt="">
				<text class="TicketText"> Movie Ticket </text>
			</p>
			<hr>
			<p class="TicketTitle">
				Minions: The Rise of Gru
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar">
				December 27,2022
				<p id="Time" class="TicketTime">
					7:00 PM
				</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				Cineplexx Albi Mall,Prishtinë XK</text>
			</p>
		</div>
	</div>


	<div class="TicketBlocks">
		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/Concert.svg" alt="Concert">
				<text class="TicketText">Concert Ticket </text>
			</p>
			<hr>
			<p class="TicketTitle">
				Bladee x Ecco2k
				<br>
			</p>
			<p class="TicketDate">

				<p class="TicketDate">
					<img src="assets/icons/Concert.svg" alt="">
					March 7,2023
					<p id="Time" class="TicketTime">
						9:00 PM - 1:00 AM
					</p>
				</p>
				<text class="TicketLocation">
					<img src="assets/icons/location.svg" alt="">
					02 Academy Leeds,Leeds UK</text>
			</p>
		</div>


		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/Concert.svg" alt="">
				<text class="TicketText"> Concert Ticket </text>
			</p>
			<hr>
			<p class="TicketTitle">
				Dua Lipa
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/Concert.svg" alt="Concert">
				December 5, 2022
				<p id="Time" class="TicketTime">10:30 PM - 1:30 AM</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				Velvet Underground,Toronto CA</text>
			</p>
		</div>


		<div class="Block">
			<p class="TicketType">
				<img src="assets/icons/Travel.svg" alt="">
				<text class="TicketText"> Travel Ticket </text>
			</p>
			<hr>
			<p class="TicketTitle">
				Toronto Canada
			</p>
			<p class="TicketDate">
				<img src="assets/icons/location.svg" alt="">
				January 4,2023
				<p id="Time" class="TicketTime">11:30 AM</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				"Adem Jashari"Airport,Prishtinë</text>
			</p>
		</div>

	</div>

	</div>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</body>

</html>