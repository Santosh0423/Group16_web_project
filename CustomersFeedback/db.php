<?php
$servername ="php24-db-1";
$username ="project";
$password ="password";
$dbname ="project";

//create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>