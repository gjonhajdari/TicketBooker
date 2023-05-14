<?php

//TODO write code for destorying session

require('signup.php');
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
//Done

//TODO logout design


?>