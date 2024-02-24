<?php
include 'header.php';
include 'db.php'; 

// Select all feedback from the CustomerFeedback table
$sql = "SELECT * FROM CustomersFeedback";
$result = $conn->query($sql);

// Check if there are any feedback records
if ($result->num_rows > 0) {
    // Output the feedback records in a table format
    echo "<table class=\"table\">
            <tr>
                <th>Feedback ID</th>
                <th>Customers ID</th>
                <th>Feedback</th>
                <th>Timestamp</th> 
            </tr>";
    // Loop through each feedback record and display it in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id={$row["feedback_id"]}'>{$row["feedback_id"]}</a></td>
                <td>{$row["customers_id"]}</td>
                <td>{$row["feedbackMessage"]}</td>
                <td>{$row["timestamp"]}</td>
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