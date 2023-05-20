<?php
include '../src/modules/db.php';
session_start();
if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
  // Redirect to sign-in page
  header("Location: login.php");
  exit();
}