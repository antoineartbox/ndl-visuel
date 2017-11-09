<?php

$servername = "127.0.0.1";
$username = "ndlqc_alumni";
$password = "uQQ{^tIf#Q3$";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndlqc_www_alumni");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create database

$conn->close();
