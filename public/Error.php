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


<head>
  <style>
    a{
      text-decoration: none;
    }
    a:visited {
    color: inherit;
    }
    </style>
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
  <link rel="stylesheet" href="css/error.css">
  <script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>

</head>

<body>

<script>
    $(document).ready(function(){
        $('.backbutton').click(function(){
            var previouspage=document.referrer;
            window.location.href=previouspage;
        })
    })

</script>
    <div class="container">

    <div class="containerimg">
    <img src="assets/icons/notfound.svg" alt="">

    </div>

    <div class="containertext"> 
        <p id="text1"> 
           Opps! Page not found. 
        </p>
        <p id="text2">
            The page you are looking for doesn't exist or might've been removed
        </p>
    </div>

    <div class="containerbuttons">
        <button class="backbutton" >
            <div class="backbuttonimg">
                <img src="assets/icons/arrow.svg" alt="">
            </div>
         
            <div>
                Go back 
            </div>
        </button>

        <button class="homebutton">
            <div class="homebuttonimg">
                <img src="assets/icons/home.svg" alt="">
            </div>
            <div>
            <a href="index.php"> Jump to the home page</a>
            </div>
        </button>

    </div>







































    </div>



</body>