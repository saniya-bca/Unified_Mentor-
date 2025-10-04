<?php
$host = "localhost:3307"; // port specify kiya
$user = "root";           // XAMPP default
$pass = "";               // password blank
$db   = "fitpro";         // tumhara DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>
