<?php
$dark_mode = '';
    include_once('../src/modules/db.php');
    session_start();

    if ($_SESSION['login']) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM `user` WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $isDark = $user['dark_mode'];
        $avatar = $user['avatar'];
        $full_name = $user['name'];
        $user_type = $user['user_type'];
    } else {
        $isDark = false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 Page Not Found</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
	if ($_SESSION["login"] && $_SESSION["login"]==true && $_SESSION["dark_mode"] == "null") {
		echo "<link rel='stylesheet' href='css/palette-light.css'>";
	} else {
		echo "<link rel='stylesheet' href='css/palette-dark.css'>";
	}
	?>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/error.css">
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>

<body>

    <!-- Navigation bar -->
    <?php ($_SESSION["login"]) ? include '../src/templates/navbarLoggedin.php' : include '../src/templates/navbar.php'; ?>

    <div class="container">
        <div class="image">
            <?php echo file_get_contents('assets/icons/notfound.svg'); ?>
        </div>
        <div class="text">
            <h1>Opps! There are no tickets.</h1>
            <p>There are no tickets with the information you requested or you are not logged in!</p>
        </div>
        <div class="buttons <?php if ($_SESSION["login"] && $_SESSION["login"] == true) {
            echo $_SESSION['dark_mode'] ? '' : 'border-light';
        } ?>">
            <button id="back">
                <?php echo file_get_contents('assets/icons/arrow.svg'); ?>
                Go back
            </button>
            <a href="index.php" id="home">
                <?php echo file_get_contents('assets/icons/home.svg'); ?>
                Jump to the home page
            </a>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#back').click(function() {
                const previouspage = document.referrer;
                window.location.href = previouspage;
            })
        })
    </script>

</body>

</html>