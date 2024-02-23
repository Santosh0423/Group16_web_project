<?php
$servername ="localhost";
$username ="ajit22000";
$password ="ulhwbI9Q";
$dbname ="wp_ajit22000";

//create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>