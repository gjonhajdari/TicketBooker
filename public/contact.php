<?php 
	session_start();
	$isDark = true;
	$isLoggedIn = true;
	$avatar = 10;
	$full_name = 'Gjon Hajdari';

?>


<?php

require_once('../src/modules/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());

	if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['message'])) {
		$fname = $_POST['name'];
		$femail = $_POST['email'];
		$fmessage = $_POST['message'];

		$sql = "INSERT INTO `contact`(`name`,`email`,`message`)
				VALUES(?,?,?)";
		$stm = mysqli_stmt_init($conn);
            $prepareStm = mysqli_stmt_prepare($stm,$sql);
            if ($prepareStm) {
                mysqli_stmt_bind_param($stm,"sss", $fname,$femail, $fmessage);
                mysqli_stmt_execute($stm);
                
            }else{
                die("Something went wrong");
            }

		
	}
}
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact - TicketBooker</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='assets/icons/favicon.svg'>
	<?php
		if (($_SESSION["login"]==true) && ($_SESSION['dark_mode'] != "null")) {
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		} else if(($_SESSION["login"]==true) && ($_SESSION['dark_mode'] == "null")){
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
		}else{
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
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
	<?php $_SESSION["login"] ? include "../src/templates/navbarLoggedin.php" : include "../src/templates/navbar.php"; ?>

	<!-- Main content -->
	<div class="main">
		
		<div class="content">
			<div class="headers">
				<h1>
					Got anything for us?
					<br class="hidden"> Leave a <span> message!</span>
				</h1>
				<p>Or contact us via Instagram, Linkedin or Customer Support.</p>
			</div>

			<form action="#" method="POST">
				<div class="inputs <?php echo $isDark ? '' : 'border-light'; ?>">
					<div class="info">
						<input type="text" name="name" id="name" required="required" placeholder="Full name" class="input">
						<input type="email" name="email" id="email" required="required" placeholder="Email address" class="input">
					</div>
					<textarea name="message"  id="message" placeholder="Your message" cols="30" rows="10"></textarea>
				</div>
				<input type="submit" name="submit" id="submit" class="btn" onclick="check();" value="Send message">
			</form>
		</div>
	</div>

	<script>
		function check(){
			var name = document.getElementById('#name').value();
			var email = document.getElementById('#email').value();
			var message = document.getElementById('#message').value();

			$.ajax({
				type: 'POST',
				url: 'pro.php',
				data: { name: name, email: email, message: message },
				success: function(response){
					$('#result').html(response);
					if(response == 'go')
					{
						alert(response);
					}
				}
			});

		}

	</script>

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>