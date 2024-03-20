<?php
include_once("header.php");
require_once("db.php");

if (isset($_POST['Update'])) {
    $Email_address = $_POST['Email_address'];
    $Message = $_POST['Message'];

    // Update the 'Message' field in the database
    $query = mysqli_query($conn, "UPDATE ContactUs SET Message='$Message' WHERE Email_address='$Email_address'");

    if ($query) {
        echo "Record Updated Successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Rest of your existing code to fetch and display data goes here
$sql = "SELECT * FROM ContactUs";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .table-container {
            max-width: 900px;
            margin: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="table-container">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email_address</th>
            <th>Phone_number</th>
            <th>DateOfContact</th>
            <th>Message</th>
            <th>Operator</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Email_address"]; ?></td>
                    <td><?php echo $row["Phone_number"]; ?></td>
                    <td><?php echo $row["DateOfContact"]; ?></td>
                    <td><?php echo $row["Message"]; ?></td>
                    <td class="action-buttons">
                        <a href="updatesingle.php?Email_address=<?php echo $row['Email_address']; ?>">Update</a>
                        <a href="delete.php?Email_address=<?php echo $row['Email_address']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='6'>Sorry we have no any results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>

<?php include("footer.php"); ?>
</body>
</html>
