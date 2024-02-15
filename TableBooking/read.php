<?php
include 'header.php';
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM TableBooking";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Booking Id</th>
                    <th>Table Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>                                       
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Reservation Date</th>
                    <th>Reservation Time</th>
                    


                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?booking_id=$row[booking_id]'>$row[booking_id]</a></td>
                <td>{$row['table_number']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['reservation_date']}</td>
                <td>{$row['reservation_time']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
include 'footer.php';
?>
