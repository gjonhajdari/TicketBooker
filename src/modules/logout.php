<?php

session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['login'] = false;
header("Location: index.php");

?>