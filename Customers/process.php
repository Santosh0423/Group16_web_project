<?php
include ("header.php"); 
include ("db.php");

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Validate form data
    if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["email_id"]) || empty($_POST["phone"]) || empty($_POST["password"]) || empty($_POST["confirm_password"]) || empty($_POST["address"])) {
        echo "Error: Please fill in all required fields";
    } else {
        // Assign form data to variables
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email_id = $_POST["email_id"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $address = $_POST["address"];

        // Perform additional form validation, such as validating email format
        if ($password !== $confirm_password) {
            echo "Error: Passwords do not match";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // SQL query to insert data into Customers table
            $sql = "INSERT INTO Customers (first_name, last_name, email_id, password, phone, address)
                    VALUES ('$first_name', '$last_name', '$email_id', '$hashed_password', '$phone', '$address')";

            // Execute the SQL query
            if ($conn->query($sql) === TRUE) {
                echo "Your data was recorded";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
} else {
    echo "Form has not been submitted";
}

include ("footer.php"); // Include the footer
?>