<?php
$servername = "web-dev-env-main-db-1";
$username = "Group16";
$password = "password"; 
$dbname = "Group16";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

         