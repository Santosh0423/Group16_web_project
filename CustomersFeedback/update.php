<?php
include_once 'header.php';
require_once 'db.php';

// Select all feedback from the Customersfeedback table
$sql = "SELECT * FROM CustomersFeedback";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    // Display error message and exit if query fails
    echo "Error: " . $conn->error;
    exit;
}

// Check if there are any feedback records
if ($result->num_rows > 0) {
    // Output the feedback records in a table format
    echo "<table class=\"table\">
            <tr>
                <th>Feedback ID</th>
                <th>Customers ID</th>
                <th>Feedback Message</th>
                <th>Date</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>";
    // Loop through each feedback record and display it in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["feedback_id"]}</td>
                <td>{$row["customers_id"]}</td>
                <td>{$row["feedbackMessage"]}</td>
                <td>{$row["timestamp"]}</td>
                <td><a href='updatesingle.php?feedback_id={$row["feedback_id"]}'>Update</a></td>
                <td><a href='delete.php?feedback_id={$row["feedback_id"]}'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    // If there are no feedback records, display a message
    echo "No results";
}

// Close the database connection
$conn->close();

include 'footer.php';
?>