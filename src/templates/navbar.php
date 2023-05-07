<nav class="navbar <?php echo $isDark ? '' : 'navbar-light'; ?>">
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
			<a href="signup.php" class="link">Sign Up</a>
			<a href="login.php" class="link" id="login">Log In</a>
		</div>
		<i class="fa-solid fa-bars-staggered" id="burger-menu"></i>
	</div>
</nav>