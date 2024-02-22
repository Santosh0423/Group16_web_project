<?php
include_once 'header.php';
require_once 'db.php'; 

// Query to select customer data
$sql = "SELECT * FROM Customers";
$result = $conn->query($sql);

// Display table headers
echo "<table class=\"table\">
<tr>
<th>Customers ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Phone</th>
<th>Address</th> 
<th>Update Password</th>
<th>Update</th>
<th>Delete</th>
</tr>";

// Display customer data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['customers_id'] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["email_id"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td><a href='password_update.php?customers_id=" . $row['customers_id'] . "'>Update Password</a></td>";
        echo "<td><a href='updatesingle.php?customers_id=" . $row['customers_id'] . "'>Update</a></td>";
        echo "<td><a href='delete.php?customers_id=" . $row['customers_id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No results</td></tr>";
}

// Close table
echo "</table>";

$conn->close();
include 'footer.php';
?>