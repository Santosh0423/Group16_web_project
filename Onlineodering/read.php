<?php
include 'header.php';
include 'db.php'; 


if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM order_items WHERE item_id = $delete_id";
    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


$sql = "SELECT oi.item_id, oi.order_id, oi.item_name, oi.quantity, oi.price, o.order_date, o.total_amount, o.payment_method, c.name AS customer_name, c.email, c.address, c.phone
        FROM order_items oi
        INNER JOIN orders o ON oi.order_id = o.order_id
        INNER JOIN customers c ON o.customer_id = c.customer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Order Items</h2>";
    echo "<table class=\"table\">
            <tr>
                <th>Item Id</th>
                <th>Order Id</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Payment Method</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row["item_id"]}</td>
                <td>{$row["order_id"]}</td> 
                <td>{$row["item_name"]}</td>
                <td>{$row["quantity"]}</td>
                <td>{$row["price"]}</td>
                <td>{$row["order_date"]}</td>
                <td>{$row["total_amount"]}</td>
                <td>{$row["payment_method"]}</td>
                <td>{$row["customer_name"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["address"]}</td>
                <td>{$row["phone"]}</td>
                <td><a href='updatesingle.php?order_id={$row["order_id"]}'>Update</a>
                |  
                    <a href='read.php?delete_id={$row["item_id"]}'>Delete</a></td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No results found in order items.</p>";
}

$conn->close();
include 'footer.php';
?>