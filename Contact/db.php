<?php
$servername ="localhost";
$username ="nitish23000";
$password ="PXSHAyOl";
$dbname ="wp_nitish23000";

//create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>