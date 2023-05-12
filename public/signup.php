<?php $isDark = false; ?>

<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up - TicketBooker</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='../assets/Favicon.svg'>
	<?php
	if ($isDark == true) {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	}
	?>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/signup.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>

	<style>
	.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  width: 50%;
  
  margin-right: auto;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}
</style>
<body>

	<!-- Navigation Bar -->
	<?php include "../src/templates/navbar.php"; ?>


	<!-- Main content -->
	<main>
		<br><br><br>
		<h1>Create an account</h1> <br>
		<h6>Already have one? <a href="login.html" id="a">Log in</a></h6>
		<br>


		<?php 
		use PHPMailer\PHPMailer\PHPMailer;

		require_once '../phpmailer/src/Exception.php';
		require_once '../phpmailer/src/PHPMailer.php';
		require_once '../phpmailer/src/SMTP.php';
		
		
require_once('../src/modules/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'  &&  isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());
		
		$name_buss = $_POST['name_buss'];
		$email = $_POST['email'];
		$email_confirm = $_POST['email_confirm'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		$errors = array();
           
		 if (empty($_POST['user_adm']) || empty($_POST['name_buss']) || empty($_POST['email']) || empty($_POST['email_confirm']) || empty($_POST['password']) || empty($_POST['password_confirm']) || empty($_POST['checkbox']) ) {
			
			//echo "<div class='alert alert-danger w-50 p-3'>All fields are required</div>";
             array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
		   if ($email!==$email_confirm) {
            array_push($errors,"Password does not match");
           }
           if ($password!==$password_confirm) {
            array_push($errors,"Password does not match");
           }
           require_once "../src/modules/db.php";
           $sql = "SELECT * FROM `user` WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger w-50 p-3'>$error</div>";
            }
           }else{
			if(isset($_POST["submit"])){
				$mail = new PHPMailer(true);
					
				$mail -> isSMTP();
				$mail ->Host = 'smtp.gmail.com';
				$mail ->SMTPAuth = true;
				$mail -> Username = 'vera.llugiqi03@gmail.com';
				$mail ->Password = 'egjqnnlylmrxujoh';
				$mail -> SMTPSecure = 'ssl';
				$mail->Port = 465;
			
				$mail -> setFrom('vera.llugiqi03@gmail.com');
				$mail -> addAddress($_POST["email"]);
			
				$mail->Subject = "Registration Succesful";
				$mail ->Body = "Thank you ". $_POST["name_buss"] ." for joining the TicketBooker site. ";
			
				$mail ->send();
			
			  
			}

            $user_adm = $_POST['user_adm'];
			$checkbox = $_POST['checkbox'];
            $sql = "INSERT INTO user (user_adm, name_buss, email, password, checkbox) VALUES ( ?, ?,?, ? ,?)";
            $statemant = mysqli_stmt_init($conn);
            $prepareStatemant = mysqli_stmt_prepare($statemant,$sql);
            if ($prepareStatemant) {
                mysqli_stmt_bind_param($statemant,"sssss", $user_adm,$name_buss, $email, $hashed_password, $checkbox);
                mysqli_stmt_execute($statemant);
                echo "<div class='alert alert-success w-50 p-3'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
	}	  
 mysqli_close($conn);
?>



		<!-- ../src/modules/signupConnection.php -->
		<form action="" method="POST" class="<?php echo $isDark ? '' : 'border-light'; ?>">
		<div>
		<input type="radio" name="user_adm" value="ADMINISTRATOR"/>Administrator</td> 
		<input type="radio" name="user_adm" value="USER"/>User</td> 
		</div>	
		
		<div>
				<input name="name_buss" id="email" type="text" placeholder="First name or Business name" />
			</div>

			<br>
			<div class="Email">
				<input type="email" name="email" id="email" placeholder="Email address">
			</div>
			<br>
			<div class="Email">
				<input type="email" name="email_confirm" id="email" placeholder="Confirm email address">
			</div>
			<br>
			<div class="Password">
				<input type="password" name="password" id="password" placeholder="Password">
				<span>
					<!-- <i class="fa fa-eye" id="font" onclick="togglePw()" aria-hidden="true"></i> -->
				</span>
			</div>
			<br>
			<div class="Password">
				<input type="password" name="password_confirm" id="password" placeholder="Confirm Password">
				<span>
					<!-- <i class="fa fa-eye" id="fonti" onclick="togglepw()" aria-hidden ="true">  </i> -->
				</span>
			</div>

			<br>

			<div class="check">

				<p id="agree">
					<input type="checkbox" name="checkbox" id="checkbox" value="AGREE"> I agree to the
					<a href="../assets/PRIVACY_POLICY.pdf" target="_blank" class="footer-linkss">Privacy Policy</a>&
					<a href="../assets/TERMS_AND_CONDITIONS.pdf" target="_blank" class="footer-links">Terms of Use</a>
				</p>


			</div>
			<input type="submit" name="submit" id="submit" class="btn">

		</form>
	</main>
	<br><br><br>



	<!-- Main content -->
	<!--
	<div class="main">

		<div class="content">
			<div class="headers">
				<h1>Create an account</h1>
				<p>
					Already have one?
					<a href="login.php">Log in</a>.
				</h2>
			</div>

			<form action="../src/modules/signupFunction.php" method="POST">

				<div class="user-type">
					<label>
						<input type="radio" name="user-type" value="INDIVIDUAL">
						Individual
					</label>
					<label>
						<input type="radio" name="user-type" value="BUSINESS">
						Business
					</label>
				</div>

				<input type="text" name="name" required="required" placeholder="Name" class="input">

				<input type="email" name="email" required="required" placeholder="Email address" class="input">

				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password" required="required" placeholder="Password" class="input" id="passwordInput1">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-1"></i>
				</div>
				
				<div class="password <?php echo $isDark ? '' : 'border-light'; ?>">
					<input type="password" name="password-confirm" required="required" placeholder="Confirm password" class="input" id="passwordInput2">
					<i class="fa-solid fa-eye-slash toggle-visibility" id="toggle-visibility-2"></i>
				</div>
			
				<div id="checkbox">
					<input type="checkbox" name="checkbox" id="check">
					<p>
						I agree to the <a href="assets/extra/TERMS_AND_CONDITIONS.pdf">Terms of Use</a> & <a href="assets/extra/PRIVACY_POLICY.pdf	">Privacy Policy</a>
					</p>
				</div>
			<input type="submit" name="submit" id="button" class="btn">
			</form>
		</div>

	</div> -->

	<!-- Footer -->
	<?php include "../src/templates/footer.php"; ?>

</body>

</html>
