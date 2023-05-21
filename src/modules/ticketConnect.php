<style>
		#button, #button1, #button2 {
		padding: 1rem 2rem;
		font-size: 1.25rem;
		border: none;
		border-radius: 1rem;
		width: 100%;
		background-color: var(--accent);
		font-weight: 600;
		cursor: pointer;
		transition: 300ms;
		color: var(--background);
		margin-top: 30px;
		}

		#button:hover, #button1:hover, #button2:hover {
		transform: translateY(-5px);
		}
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
require_once("db.php");

if (isset($_POST['submit']) && $_SESSION["login"] == true) {
    $what = $_POST['what'];
    $location = $_POST['where'];
    $date = $_POST['when_date'];
    $time = $_POST['when_time'];
    $event_title = $_POST['title'];
    $description = $_POST['description'];

    // Check if any of the fields are emptyz
    if (empty($what) || empty($location) || empty($date) || empty($time) || empty($event_title) || empty($description)) {
        echo "<div class='alert alert-danger w-50 p-3'>Please fill in all the required fields.</div>";
    } else {
        $currentDate = date('Y-m-d');
        $currentTime = date('H:i');
        $selectedDateTime = $date . ' ' . $time;

        if ($date < $currentDate || ($date == $currentDate && $time < $currentTime)) {
            echo "<div class='alert alert-danger w-50 p-3'>Invalid date or time. Please select a future date and time.</div>";
        } else {
            $sql = "INSERT INTO ticket (`option`, location, date, time, event_title, description) 
            VALUES (?, ?, ?, ?, ?, ?)";
         
            $stm = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stm, $sql)) {
                mysqli_stmt_bind_param($stm, "ssssss", $what, $location, $date, $time, $event_title, $description);
                if (mysqli_stmt_execute($stm)) {
                    mysqli_stmt_close($stm);
                    mysqli_close($conn);
                    echo '<script>window.location.href = "../public/createTicket.php";</script>';
                    exit;
                } else {
                    die("Error executing the statement: " . mysqli_error($conn));
                }
            } else {
                die("Error preparing the statement: " . mysqli_error($conn));
            }
        }
    }
}

mysqli_close($conn);
?>