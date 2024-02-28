<?php
include ("header.php");
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .table-container {
            max-width: 820px;
            margin: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            max-width: 200px; /* Adjust max-width based on your design */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .action-buttons {
            display: flex;
            gap: 3px;
        }

        .action-buttons a {
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="table-container">
    <?php
    // SQL query to retrieve data from the 'ContactUs' table
    $sql = "SELECT * FROM ContactUs";

    // Execute the SQL query and store the result
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>                                      
                        <th>Email_address</th>
                        <th>Phone_number</th>
                        <th>DateOfContact</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>";

        // Loop through the result set and display data in rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Name']}</td>
                    <td>{$row['Email_address']}</td>
                    <td>{$row['Phone_number']}</td>
                    <td>{$row['DateOfContact']}</td>
                    <td>{$row['Message']}</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        // Display a message if no results are found
        echo "No results";
    }

    // Close the connection when done
    $conn->close();
    ?>
</div>

<?php include ("footer.php"); ?>
</body>
</html>
