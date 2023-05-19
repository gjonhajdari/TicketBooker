<?php
include '../src/modules/db.php';
session_start();

if ($_SESSION['id']) {
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM `user` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$isDark = $user['dark_mode'];
	$avatar = $user['avatar'];
	$full_name = $user['name'];
	$user_type = $user['user_type'];
	$isLoggedIn = true;
} else {
	$isDark = true;
	$isLoggedIn = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<!-- Navigation bar -->
<?php include "../src/templates/navbarLoggedin.php"; ?>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Bootstrap" href="Bootstrap">
  <title>FAQ</title>
  <?php
  if ($_SESSION["dark_mode"] == "null") {
    echo "<link rel='stylesheet' href='css/palette-light.css'>";
  } else {
    echo "<link rel='stylesheet' href='css/palette-dark.css'>";
  }
  ?>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/createTicket.css">
  <link rel="stylesheet" href="css/error.css">
  <script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>






</head>

<body>

    <div class="container">
        <div class="containerimage">
            <img src="assets/icons/notfound.svg" alt="">
        <div class="secondcontainer">

        <p class="secondcontainerp1">
            Opps! Page not found.
            <p class="secondcontainerp2">
                The page you are looking for doesn't exist or might've been removed
            </p>
        </p>
        </div>
        <div>
        
        </div>








    </div>

</body>