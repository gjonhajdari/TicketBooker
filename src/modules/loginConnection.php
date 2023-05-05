<?php

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());
	
	if (isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `signup` WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$row = mysqli_fetch_assoc($result);
			$hashed_password = $row['password'];
			if (password_verify($password, $hashed_password)) {
				echo "Login successful";
				session_start();
				$_SESSION['email'] = $email;
				header('location:../../public/index.php');
				session_destroy();
			} else {
				echo "Invalid data";
			}
		} else {
			echo "Error: " . mysqli_error($conn);
		}

	}
};

mysqli_close($conn);

?>
