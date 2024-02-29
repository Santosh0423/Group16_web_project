
<?php
$servername = "localhost";
$username = "bibek23001";
$password = "14UVBi4n";
$dbname = "wp_bibek23001";
// create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("connection_failed: " . $conn->connect_error);
    
}
?>

