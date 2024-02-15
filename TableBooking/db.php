<?php
$servername = "php24-db-1";
$username = "Group16";
$password = "password";
$dbname = "Group16";

// create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("connection_failed: " . $conn->connect_error);
    
}
?>