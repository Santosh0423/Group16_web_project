<?php
include 'header.php';
include 'db.php'; 

// Fetch data from order_items table
$sql = "SELECT * FROM order_items";
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
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[item_id]'>$row[item_id]</a></td>
                <td>{$row["order_id"]}</td> 
                <td>{$row["item_name"]}</td>
                <td>{$row["quantity"]}</td>
                <td>{$row["price"]}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No results found in order items.</p>";
}

// Fetch data from customers table
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Customers</h2>";
    echo "<table class=\"table\">
            <tr>
                <th>Customer Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[customer_id]'>$row[customer_id]</a></td>
                <td>{$row["name"]}</td> 
                <td>{$row["email"]}</td>
                <td>{$row["address"]}</td>
                <td>{$row["phone"]}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No results found in customers.</p>";
}

// Fetch data from orders table
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Orders</h2>";
    echo "<table class=\"table\">
            <tr>
                <th>Order Id</th>
                <th>Customer Id</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Payment Method</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[order_id]'>$row[order_id]</a></td>
                <td>{$row["customer_id"]}</td> 
                <td>{$row["order_date"]}</td>
                <td>{$row["total_amount"]}</td>
                <td>{$row["payment_method"]}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No results found in orders.</p>";
}

$conn->close();
include 'footer.php';
?>
