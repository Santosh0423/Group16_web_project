<?php
include 'header.php';
include 'db.php';

if (isset($_POST['submit'])) {
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : '';
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : '';
    $email_id = isset($_POST["email_id"]) ? $_POST["email_id"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    $confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';

    // Perform form validation
    // Example: check if required fields are filled, validate email format, etc.
    // Add your validation logic here.

    if ($password !== $confirm_password) {
        echo "Error: Passwords do not match";
        exit; // Stop further execution
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO Customers (first_name, last_name, email_id, password, phone, address)
            VALUES ('$first_name', '$last_name', '$email_id', '$hashed_password', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
       echo "Your data was recorded";
       // Redirect the user after successful submission
       // header("Location: thank_you.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

include 'footer.php';
?>