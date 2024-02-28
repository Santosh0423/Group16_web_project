<?php
include("header.php");
include("db.php");
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data

    $Name = $_POST['name'];
    $Email_address = $_POST['emailaddress'];
    $Phone_number = $_POST['phonenumber'];
    $DateOfContact = $_POST['dateofcontact'];
    $Message = $_POST['message'];

    // Connect to the database serve
    // Write SQL statement to insert data
    $sql = "INSERT INTO ContactUs ( Name, Email_address, Phone_number, DateOfContact, Message)
            VALUES ('$Name', '$Email_address', '$Phone_number', '$DateOfContact', '$Message')";

    if ($conn->query($sql) === TRUE) {
        echo "Your data has been recorded sucessfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case when the form is not submitted
    echo "Form has not been submitted yet";
}
include("footer.php");
?>
