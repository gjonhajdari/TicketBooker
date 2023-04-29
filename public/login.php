<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/login.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

	<!-- Navigation bar -->
	<nav class="navbar">
		<div class="navbar-content">
			<a href="index.html">
				<img src="../assets/Logo.svg" alt="TicketBooker logo" class="logo" width="35" height="35">
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

	<!-- Main content -->
	<div class="main">

		<div class="content">
			<div class="headers">
				<h1>Welcome back!</h1>
				<p>
					Don't have an account?
					<a href="signup.html">Sign up</a>.
				</h2>
			</div>
	
			<form action="php/loginConnection.php" method="POST">
				<input type="email" name="email" required="required" placeholder="Email address" class="input">
	
				<div id="password">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput">
					<i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
					<!-- <span><i class="fa-solid fa-eye" id="eye" onclick="myfunction()"></i></span>  -->
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check">
					<p>Remember me</p>
				</div>
	          <input type="submit" name="submit" id="button"  class="btn">
			</form>
		</div>

	</div>
	
	<!-- Footer -->
	<footer>
		<p id="copyright">Copyright &copy; 2023 TicketBooker. All rights reserved</p>
		<div class="icons">
			<a href="https://www.instagram.com" target="_blank">
				<img src="../assets/Instagram.svg" alt="Instagram" class="icon">
			</a>
			<a href="https://www.twitter.com" target="_blank">
				<img src="../assets/Twitter.svg" alt="Twitter" class="icon">
			</a>
			<a href="https://www.linkedin.com" target="_blank">
				<img src="../assets/Linkedin.svg" alt="Linkedin" class="icon">
			</a>
		</div>
		<div class="links">
			<a href="../assets/PRIVACY_POLICY.pdf" target="_blank" class="footer-link">Privacy Policy</a>
			<a href="../assets/TERMS_AND_CONDITIONS.pdf" target="_blank" class="footer-link">Terms of Use</a>
		</div>
	</footer>

</body>

</html>