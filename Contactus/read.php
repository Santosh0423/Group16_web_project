<?php
include 'header.php'; 
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM ContactUs";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class=\"table\">
                <tr>
                    <th>ContactId</th>
                    <th>Name</th>
                    <th>DateOfContact</th>
                    <th>Message</th>
                </tr>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["ContactId"]}</td>
                <td>{$row["Name"]}</td>
                <td>{$row["DateOfContact"]}</td>
                <td>{$row["Message"]}</td>
              </tr>";
    }

    echo "</table>";
} else {
    // Display a message if no results are found
    echo "no results";
}
// close the connection when done
$conn->close();
 include 'footer.php';
 ?>