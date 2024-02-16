<?php
include 'header.php';
include 'db.php';
//Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Process form data 
    $customers_id = isset($_POST["customers_id"]) ? $_POST["customers_id"] : '';
    $feedbackMessage = isset($_POST["feedbackMessage"]) ? $_POST["feedbackMessage"] : '';
    $timestamp = date('Y-m-d H:i:s');
   

    
    $sql = "INSERT INTO CustomersFeedback (customers_id, feedbackMessage, timestamp)
            VALUES ('$customers_id', '$feedbackMessage', 'timestamp')";

    if ($conn->query($sql) === TRUE) {
       echo "Your message is stored.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  
    $conn->close();
}
include 'footer.php';
?>