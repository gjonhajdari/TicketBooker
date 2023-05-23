<?php
				require('../src/modules/db.php');
	
				if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_username'])) {
					$conn or die("Connection failed: ".mysqli_connect_error());
					$oldusername = $_SESSION['name'];
					$newusername = $_POST['newusername'];
					$errors = array();
	
					require_once "../src/modules/db.php";
					$stmt = $conn->prepare("SELECT * FROM `user` WHERE email = ?");
					$stmt->bind_param('s', $_SESSION["email"]);
					$stmt->execute();
					$result = $stmt->get_result();
					$user = $result->fetch_assoc();	
					if (empty($newusername)) {
						array_push($errors, "Change Username field is required to change your username");
					}else 
					{
						if($oldusername === $newusername){
						array_push($errors, "Old username and new username cannot be the same");
					}else{
						$stmt = $conn->prepare("UPDATE `user` SET name = ? WHERE id = ?");
						$stmt->bind_param('si', $newusername, $user['id']);
						$stmt->execute();
						echo "<div class='alert alert-success w-50 p-3'>Username changed successfully</div>";
					}
				}
				
		        if (count($errors) > 0) {
			foreach ($errors as $error) {
				echo "<div class='alert alert-danger w-50 p-3'>$error</div>";
			}
		}
    }
	

mysqli_close($conn);
?>