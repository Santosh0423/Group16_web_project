<?php
include 'header.php';
include 'db.php';
//Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Process form data
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : '';
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : '';
    $email_id = isset($_POST["email_id"]) ? $_POST["email_id"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';
   

    
    $sql = "INSERT INTO Customers (first_name, last_name, email_id, phone, address)
            VALUES ('$first_name', '$last_name', '$email_id', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
       echo "Your data was recorded";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  
    $conn->close();
}
include 'footer.php';
?>
