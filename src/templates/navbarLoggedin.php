<?php
//TODO add users variables in the project using sessions
//TODO link logout page
// require('signup.php');
// if(!empty($_SESSION['id'])){
// 	$id = $_SESSION["id"];
// 	$result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
// 	$row = mysqli_fetch_assoc($result);

// }else{
// 	header("Location: login.php");
// }

?>
<nav 
	class="navbar <?php
						echo $isDark ? '' : ' navbar-light';
						echo !$isLoggedIn ? '' : ' navbar-logged';
					?>">
	<div class="navbar-content">
		<a class="navbar-logo" href="index.php">
			<?php echo file_get_contents('assets/icons/logo.svg') ?>
		</a>
		<div class="middle">
			<a href="index.php" class="link">Home</a>
			<a href="about.php" class="link">About</a>
			<a href="contact.php" class="link">Contact</a>
		</div>
		<div class="right">
			<img id="profile-picture" src="assets/images/profiles/profile-picture-<?php echo $avatar; ?>.jpg" alt="" width="40" height="40" style="border-radius: 50%;">
			<p class="name"><?php echo $full_name; ?></p>
		</div>

		<div class="dropdown">
			<div class="top">
				<div class="info">
					<img src="assets/images/profiles/profile-picture-<?php echo $avatar; ?>.jpg" alt="" width="50" height="50" style="border-radius: 50%;">
					<?php echo $full_name; ?>
				</div>
		
				<hr>
			</div>
	
			<div class="options">
				<a href="profile.php" class="option">
					<?php echo file_get_contents('assets/icons/profile.svg') ?>
					<p>Profile</p>
				</a>
				<a href="createTicket.php" class="option">
					<?php echo file_get_contents('assets/icons/create.svg') ?>
					<p>Create Ticket</p>
				</a>
				<a href="editProfile.php" class="option">
					<?php echo file_get_contents('assets/icons/settings.svg') ?>
					<p>Settings</p>
				</a>
				<a href="#" class="option">
					<?php echo file_get_contents('assets/icons/logout.svg') ?>
					<p>Log out</p>
				</a>
			</div>
		</div>
		
		<i class="fa-solid fa-bars-staggered" id="burger-menu"></i>
	</div>

</nav>