<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address']; // corrected field name
    $phone = $_POST['phone'];
    
    // Connect to the database server
    include 'db.php';
    
    // Write SQL statement to insert data
    $sql = "INSERT INTO customers (name, email, address, phone) 
            VALUES ('$name', '$email', '$address', '$phone')";
            

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Your data was recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();

}
?>