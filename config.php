<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";  // Default password for XAMPP
$dbname = "legal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
