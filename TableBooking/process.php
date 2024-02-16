<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $table_number = $_POST['table_number'];

    // Connect to the database server
    include 'db.php'; // Assuming 'db.php' contains the database connection code

    // Write SQL statement to insert data
    $sql = "INSERT INTO TableBooking (first_name, last_name, phone_number, email, reservation_date, reservation_time, table_number)
            VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$reservation_date', '$reservation_time', '$table_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Your data was recorded";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted";
}
?>




