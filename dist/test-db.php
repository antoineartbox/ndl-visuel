<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */


$servername = "149.202.68.162";
$username = "ndlqc_artbox";
$password = "F4pkl+FQoPGT";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndlqc_anciens");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create database

$conn->close();
