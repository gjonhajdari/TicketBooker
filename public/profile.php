<?php

//TODO session variables for users resources


// require('signup.php');
// if(!empty($_SESSION['id'])){
// 	$id = $_SESSION["id"];
// 	$result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
// 	$row = mysqli_fetch_assoc($result);

// }else{
// 	header("Location: login.php");
// }

$isDark = true;
$isLoggedIn = true;
$avatar = 10;
$full_name = 'Klajdi Gashi';
$location = "Parku Qytetit,Prishtine";
$date = "2/27/2024";
$time_start = 20;
$time_end = 1;
$ticket_type = 'Concert';
$title = 'Dua Lipa';

?>


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
	<?php include "../src/templates/navbarLoggedin.php"; ?>

	<main>
		<div class="Profile">

			<div class="Profile-Button">
				<h1 id="title" style="font-size:45px; margin-top:20px;">
					<b>Welcome back,
						<?php echo $full_name ?>
					</b>

					<br>
				</h1>
				<p id="Profile-Paragraph" style="font-size:20px;">
					Take a look at all of your tickets.
				</p>

			</div>
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
					<img src="assets/icons/movie.svg" alt="">
					<p>Movies</p>
				</button>

				<button class="tab-button" id="Concerts">
					<img src="assets/icons/concert.svg" alt="">
					<p>Concerts</p>
				</button>
			</div>
		</center>


	</main>

	<hr style="width: 1400px; margin:auto; color:var(--foreground);">

	<div class="TicketBlocks">
		<div class="Block">
			<p class="TicketTitle">
				<?php echo $title ?>
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar" style="margin-right:10px;">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>

			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				<?php echo $location ?>
			</text>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr>
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
			</p>



		</div>


		<div class="Block">
			<p class="TicketTitle">
				<?php echo $title ?>
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				<?php echo $location ?>
			</text>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr>
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
				<text class=TicketTrash>
					<img src="public/icons/trash" alt="">
				</text>
			</p>


		</div>


		<div class="Block">

			<p class="TicketTitle">
				<?php echo $title ?>
				<br>

			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Calendar">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				<?php echo $location ?>
			</text>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr style="color:var(--accent)">
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
			</p>
			</p>
		</div>
	</div>


	<div class="TicketBlocks">
		<div class="Block">
			<p class="TicketTitle">
				<?php echo $title ?>
				<br>
			</p>
			<p class="TicketDate">
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				<?php echo $location ?>
			</text>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr>
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
			</p>
		</div>


		<div class="Block">
			<p class="TicketTitle">
				<?php echo $title ?>
				<br>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="Concert">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">
				<?php echo $location ?>
			</text>
			</p>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr>
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
			</p>


		</div>


		<div class="Block">
			<p class="TicketTitle">
				<?php echo $title ?>
			</p>
			<p class="TicketDate">
				<img src="assets/icons/calendar.svg" alt="">
				<?php echo $date ?>
			<p id="Time" class="TicketTime">
				<?php echo "Start:" . " " . $time_start . " - " . "End: " . " " . $time_end ?>
			</p>
			</p>
			<text class="TicketLocation">
				<img src="assets/icons/location.svg" alt="">	
				<?php echo $location ?>
			</text>
			</p>
			</p>
			<br>
			<br>

			<hr class=TicketBlock-Hr>
			<p class="TicketType">
				<text class="TicketText">
					<?php echo $ticket_type ?>
				</text>
			</p>


		</div>

	</div>

	</div>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</body>

</html>