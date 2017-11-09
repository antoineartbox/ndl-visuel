<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17-11-08
 * Time: 11:11
 */


$servername = "127.0.0.1";
$username = "ndlqc_alumni";
$password = "uQQ{^tIf#Q3$";

// Create connection
$conn = new mysqli($servername, $username, $password, "ndlqc_www_alumni");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {

	echo "<h1>If you see a dog, you are well connected to the DB <3 <3</h1>";
	echo "<img src='https://i.imgflip.com/4a8he.jpg'>";
}


// Create database

$conn->close();
