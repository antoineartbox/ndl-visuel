<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "../db/methods.php";
require "users_methods.php";
// Create new Db instance
$db = connectToDb();
$uid = $_SESSION["uid"];


// Process logout operations
logUserDisconnect($_SESSION["session_token"]);
logOutUser($uid);


// Then Return to homepage
echo "<script>location.href='../../';</script>";
