<?php
include 'header.php';
include 'db.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Process form data 
    $customers_id = isset($_POST["customers_id"]) ? intval($_POST["customers_id"]) : 0; // Ensure integer value
    $feedbackMessage = isset($_POST["feedbackMessage"]) ? $_POST["feedbackMessage"] : '';
    $timestamp = date('Y-m-d H:i:s'); // Include time in the timestamp
   
    // Check if the customer ID exists in the Customers table
    $check_customer_sql = "SELECT * FROM Customers WHERE customers_id = ?";
    $check_customer_stmt = $conn->prepare($check_customer_sql);
    if ($check_customer_stmt) {
        $check_customer_stmt->bind_param("i", $customers_id);
        $check_customer_stmt->execute();
        $check_customer_result = $check_customer_stmt->get_result();

        if ($check_customer_result->num_rows > 0) {
            // Customer ID exists, proceed with inserting feedback
            $insert_feedback_sql = "INSERT INTO CustomersFeedback (customers_id, feedbackMessage, timestamp)
                                    VALUES (?, ?, ?)";
            $insert_feedback_stmt = $conn->prepare($insert_feedback_sql);
            if ($insert_feedback_stmt) {
                $insert_feedback_stmt->bind_param("iss", $customers_id, $feedbackMessage, $timestamp);
                if ($insert_feedback_stmt->execute()) {
                    echo "Your message is stored.";
                } else {
                    echo "Error inserting feedback: " . $insert_feedback_stmt->error;
                }
                $insert_feedback_stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } else {
            // Customer ID does not exist
            echo "Error: Customer ID does not exist.";
        }
        $check_customer_stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    $conn->close();
}

include 'footer.php';
?>