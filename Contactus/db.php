<?php
$servername = "php024-php-1";
$username = "Group16";
$password = "password";
$dbname = "Group16";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
