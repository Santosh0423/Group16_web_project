<?php
$servername = "localhost";
$username = "Group16";
$password = "c5p2iCLh"; 
$dbname = "Group16";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
