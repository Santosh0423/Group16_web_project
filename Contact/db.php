<?php
$servername ="php024-db-1";
$username ="group16";
$password ="password";
$dbname ="group16";

//create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>