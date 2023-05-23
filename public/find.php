<?php
include '../src/modules/db.php';

session_start();

if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM `user` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$isDark = $user['dark_mode'];
	$avatar = $user['avatar'];
	$full_name = $user['name'];
	$user_type = $user['user_type'];
	$isLoggedIn = true;
} else {
	$isDark = true;
	$isLoggedIn = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Find ticket - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>
	<?php
	if (isset($_SESSION["dark_mode"] )&&($_SESSION["dark_mode"] == "null")){
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	?>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/card.css">
	<link rel="stylesheet" href="css/find.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
	<?php $isLoggedIn ? include "../src/templates/navbarLoggedin.php" : include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
<main class="container">
	<div class="top">
		<h1>Find tickets</h1>
		<div class="filters">
			<p class="name">Filters</p>
			<div class="labels <?php echo isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"] != "null" ? '' : 'border-light'; ?>">
				<p class="label"> <?php echo isset($_SESSION["option"]) ? $_SESSION["option"] : ''; ?> </p>
				<p class="label"> <?php echo isset($_SESSION["date"]) ? $_SESSION["date"] : ''; ?> </p>
				<p class="label"> <?php echo isset($_SESSION["location"]) ? $_SESSION["location"] : ''; ?> </p>
			</div>
		</div>
	</div>
	<div class="search">
		<div class="results">
			<p><span id="amount"><?php echo isset($_SESSION["counter"]) ? $_SESSION["counter"] : 0; ?> </span> results found</p>
		</div>
	<a href="index.php" style="text-decoration: none;">	<button class="btn <?php echo isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"] ? '' : 'btn-light'; ?>" >
			<?php echo file_get_contents('assets/icons/search.svg'); ?>
			<p>Search again</p>
		</button></a>
	</div>
	<div class="tickets row g-4">
		<?php
		include "searchCard.php";
		?>
	</div>
</main>


	</main>

	
	<!-- Footer -->
	<?php include('../src/templates/footer.php') ?>

</body>

</html>