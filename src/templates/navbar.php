<!-- Navigation bar -->
<nav class="navbar <?php echo $isDark ? '' : 'navbar-light'; ?>">
	<div class="navbar-content">
		<a class="navbar-logo" href="index.php">
			<?php echo file_get_contents('assets/icons/Logo.svg') ?>
		</a>
		<div class="middle">
			<a href="index.html" class="link">Home</a>
			<a href="aboutus.html" class="link">About</a>
			<a href="contact.html" class="link">Contact</a>
		</div>
		<div class="right">
			<a href="signup.html" class="link">Sign Up</a>
			<a href="login.html" class="link" id="login">Log In</a>
		</div>
		<i class="fa-solid fa-bars-staggered" id="burger-menu"></i>
	</div>
</nav>