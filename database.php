<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_showroom";

// Create connection
$conn = new PDO("mysql:host=" .$servername. "; dbname=" . $dbname, $username, $password);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }