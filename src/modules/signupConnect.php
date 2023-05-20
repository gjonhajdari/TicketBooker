<style>
	.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  width: 100%;
  
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

<?php 
		use PHPMailer\PHPMailer\PHPMailer;

		require_once '../phpmailer/src/Exception.php';
		require_once '../phpmailer/src/PHPMailer.php';
		require_once '../phpmailer/src/SMTP.php';
		
		
require_once('../src/modules/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'  &&  isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$email_confirm = $_POST['email_confirm'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		$errors = array();
           
		 if (empty($_POST['user_type']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['email_confirm']) || empty($_POST['password']) || empty($_POST['password_confirm']) || empty($_POST['checkbox']) ) {
			
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
				$mail ->Body = "Thank you ". $_POST["name"] ." for joining the TicketBooker site. ";
			
				$mail ->send();
			
			  
			}

            $user_type = $_POST['user_type'];
			$checkbox = $_POST['checkbox'];
            $sql = "INSERT INTO user (user_type, name, email, password, checkbox) VALUES ( ?, ?,?, ? ,?)";
            $statement = mysqli_stmt_init($conn);
            $prepareStatemant = mysqli_stmt_prepare($statement,$sql);
            if ($prepareStatemant) {
                mysqli_stmt_bind_param($statement,"sssss", $user_type,$name, $email, $hashed_password, $checkbox);
                mysqli_stmt_execute($statement);
                echo "<div class='alert alert-success w-50 p-3'>You are registered successfully.</div>";
				header('location: login.php');
            }else{
                die("Something went wrong");
            }
           }
	}	  
 mysqli_close($conn);
?>