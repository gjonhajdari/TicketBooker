<?php
				require_once('../src/modules/db.php');
	
				if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
					$conn or die("Connection failed: ".mysqli_connect_error());
					$oldpassword = $_POST['oldpassword'];
					$confirmpassword = $_POST['confirmpassword'];
					$newpassword = $_POST['newpassword'];
					$errors = array();
	
					require_once "../src/modules/db.php";
					// Retrieve user data based on username or email
					$stmt = $conn->prepare("SELECT * FROM `user` WHERE email = ?");
					$stmt->bind_param('s', $_SESSION["email"]);
					$stmt->execute();
					$result = $stmt->get_result();
					$user = $result->fetch_assoc();
	
					if (empty($oldpassword) || empty($confirmpassword) || empty($newpassword)) {
						array_push($errors, "All fields are required");
					}else if(strlen($newpassword) < 8) {
						array_push($errors, "Password must be at least 8 characters long");
					}else if($oldpassword === $newpassword){
						array_push($errors, "Old password and new password cannot be the same");
					}else if($newpassword !== $confirmpassword) {
						array_push($errors, "Passwords don't not match");
					}else if ($user && password_verify($oldpassword, $user['password'])) {
					// Old password is correct, update the password
						$hashed_password = password_hash($newpassword, PASSWORD_DEFAULT);
						$stmt = $conn->prepare("UPDATE `user` SET password = ? WHERE id = ?");
						$stmt->bind_param('si', $hashed_password, $user['id']);
						$stmt->execute();
						echo "<div class='alert alert-success w-50 p-3'>Password changed successfully</div>";
					}else {
					// Old password is incorrect
					array_push($errors, "You provided the wrong password");
				}
		if (count($errors) > 0) {
			foreach ($errors as $error) {
				echo "<div class='alert alert-danger w-50 p-3'>$error</div>";
			}
		}
	}

mysqli_close($conn);
?>