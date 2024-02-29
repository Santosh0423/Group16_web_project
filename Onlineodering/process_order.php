<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment'];

    // Insert customer data
    $sql_customer = "INSERT INTO customers (name, email, address, phone) 
                     VALUES ('$name', '$email', '$address', '$phone')";

    if ($conn->query($sql_customer) === TRUE) {
        $customer_id = $conn->insert_id;
        echo "Customer data was recorded successfully. ";
    } else {
        echo "Error: " . $sql_customer . "<br>" . $conn->error;
        $conn->close();
        exit();
    }

    // Insert order data
    $order_date = date('Y-m-d H:i:s');
    $total_amount = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    $sql_order = "INSERT INTO orders (customer_id, order_date, total_amount, payment_method) 
                  VALUES ('$customer_id', '$order_date', '$total_amount', '$payment_method')";

    if ($conn->query($sql_order) === TRUE) {
        $order_id = $conn->insert_id;
        echo "Order data was recorded successfully. ";
    } else {
        echo "Error: " . $sql_order . "<br>" . $conn->error;
        $conn->close();
        exit();
    }

    // Insert order item data
    foreach ($_SESSION['cart'] as $item) {
        $item_name = $item['item_name'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        $sql_order_item = "INSERT INTO order_items (order_id, item_name, quantity, price) 
                           VALUES ('$order_id', '$item_name', '$quantity', '$price')";

        if ($conn->query($sql_order_item) !== TRUE) {
            echo "Error: " . $sql_order_item . "<br>" . $conn->error;
            $conn->close();
            exit();
        }
    }

    $conn->close();
}
?>