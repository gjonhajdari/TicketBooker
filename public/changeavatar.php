<?php
				
                require('../src/modules/db.php');

				if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_avatar'])) {
                $user_id = $_SESSION['id'];
				$selected_avatar = $_POST['avatar'];
                $stmt = $conn->prepare("UPDATE `user` SET avatar = ? WHERE id = ?");
                $stmt->bind_param('si', $selected_avatar, $user_id);
                $stmt->execute();
				$_SESSION['avatar'] = $selected_avatar;

				}
				?>