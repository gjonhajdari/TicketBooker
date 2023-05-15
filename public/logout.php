<?php

require('C:\XAMPP\htdocs\TicketBooker\src\modules\db.php');
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");

?>