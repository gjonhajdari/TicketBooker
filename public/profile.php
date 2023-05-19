<?php

session_start();

if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
    // Redirect to sign-in page
    header("Location: login.php");
    exit();
}


$isDark = true;
$isLoggedIn = true;
$avatar = 10;
$full_name = 'Klajdi Gashi';
$userType = 'BUSINESS';
$count = 5;
$location = "Prishtinë";
$date = "2/27/2024";
$time = '12:30';
$type = 'Concert';
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
		if (isset($_SESSION["dark_mode"]) && ($_SESSION["dark_mode"] == "null")){
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	?>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" href="css/profile.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"
		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<?php include "../src/templates/navbarLoggedin.php"; ?>

	<main class="container">

	<div class="topandbottom">
		<div class="top">

			<h1>Welcome back, <?php echo $_SESSION["name"]; ?></h1>
			<p>Take a look at all your tickets.</p>
	

			<div class='bottom'>
			
		
			 <input type="submit" id="submit" onclick="funct()" class="btn  <?php echo (isset($_SESSION["login"]) && $_SESSION["login"]) ? 
			 					(isset($_SESSION["dark_mode"]) && ($_SESSION["dark_mode"] == "null") ? 
								'' : 'btn-dark') : 'btn-dark'; ?>" onclick="check">
				<?php echo file_get_contents('assets/icons/arrow.svg') ?>
				
			</input>

			<?php 
			//require_once('../src/modules/db.php');
			//if(($_SESSION['user_type']== "BUSINESS")){
			//	 include "link href='./public/ajax/index-ajax.php'>";
				 
		    //	} else {
			//	echo "Cannot access database!";
		     //	}	?>

			<script>
				function funct() { 
					location.replace("/TicketBooker/public/ajax/index-ajax.php");
				 }
	
			</script>	

			

			</div>
			
		</div>
	</div>


		<div class="tabs row g-4">
			<label class="tab col-md-6 col-lg-3">
				<input type="radio" name="type" value="all" checked>
				<div class="content <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="left">
						<?php echo file_get_contents("assets/icons/all.svg") ?>
						<p>All tickets</p>
					</div>	
					<p><?php echo $count; ?></p>
				</div>
			</label>
			<label class="tab col-md-6 col-lg-3">
				<input type="radio" name="type" value="travel">
				<div class="content <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="left">
						<?php echo file_get_contents("assets/icons/travel.svg") ?>
						<p>Travel</p>
					</div>	
					<p><?php echo $count; ?></p>
				</div>
			</label>
			<label class="tab col-md-6 col-lg-3">
				<input type="radio" name="type" value="movie">
				<div class="content <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="left">
						<?php echo file_get_contents("assets/icons/movie.svg") ?>
						<p>Movies</p>
					</div>	
					<p><?php echo $count; ?></p>
				</div>
			</label>
			<label class="tab col-md-6 col-lg-3">
				<input type="radio" name="type" value="concert">
				<div class="content <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="left">
						<?php echo file_get_contents("assets/icons/concert.svg") ?>
						<p>Concerts</p>
					</div>	
					<p><?php echo $count; ?></p>
				</div>
			</label>
		</div>

		<hr class="divider">

		<div class="tickets row g-4">
			<?php
				for ($i = 0; $i < 6; $i++) {
					include "../src/templates/profileCard.php";
				}
			?>
		</div>

	</main>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</body>

</html>