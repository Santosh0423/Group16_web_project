<?php
session_start();
include 'db.php'; 
include 'header.php'; 

if(isset($_POST['submit'])) {
   
    if(isset($_GET['order_id'])) {
       
        $order_id = $_GET['order_id'];
        
        // Retrieve form data
        $totalAmount = $_POST['totalAmount'];
        $paymentMethod = $_POST['paymentMethod'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        // Update order details in the database
        $sql_update_order = "UPDATE orders SET total_amount=?, payment_method=? WHERE order_id=?";
        $stmt_order = $conn->prepare($sql_update_order);
        $stmt_order->bind_param("dsi", $totalAmount, $paymentMethod, $order_id);

        if ($stmt_order->execute()) {
            // Update customer details
            $sql_update_customer = "UPDATE customers SET name=?, email=?, address=?, phone=? WHERE customer_id=?";
            $stmt_customer = $conn->prepare($sql_update_customer);
            $stmt_customer->bind_param("ssssi", $name, $email, $address, $phone, $customer_id);
            $stmt_customer->execute();

            // Update order item details
            foreach($_POST['item_id'] as $key => $item_id) {
                $item_name = $_POST['itemName'][$key];
                $quantity = $_POST['quantity'][$key];
                $price = $_POST['price'][$key];

                $sql_update_order_item = "UPDATE order_items SET item_name=?, quantity=?, price=? WHERE item_id=?";
                $stmt_order_item = $conn->prepare($sql_update_order_item);
                $stmt_order_item->bind_param("sidi", $item_name, $quantity, $price, $item_id);
                $stmt_order_item->execute();
            }
            
            echo "Order information updated successfully";
        } else {
            echo "Error updating order information: " . $conn->error;
        }
    } else {
        echo "Order ID not provided";
    }
}

if(isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    $sql = "SELECT o.*, c.name AS customer_name, c.email, c.address, c.phone, oi.item_id, oi.item_name, oi.quantity, oi.price
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            JOIN order_items oi ON o.order_id = oi.order_id
            WHERE o.order_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
?>
        <!-- Display the update form -->
        <div class="container">
            <h2>Update Order Information</h2>
            <form action="updatesingle.php?order_id=<?php echo $order_id; ?>" method="POST">
               
                <label for="totalAmount">Total Amount:</label>
                <input type="text" id="totalAmount" name="totalAmount" value="<?php echo $row['total_amount']; ?>" required><br><br>
                <label for="paymentMethod">Payment Method:</label>
                <select id="paymentMethod" name="paymentMethod" required>
                    <option value="credit_card" <?php if ($row['payment_method'] == 'credit_card') echo 'selected'; ?>>Credit Card</option>
                    <option value="paypal" <?php if ($row['payment_method'] == 'paypal') echo 'selected'; ?>>PayPal</option>
                    <option value="cash_on_delivery" <?php if ($row['payment_method'] == 'cash_on_delivery') echo 'selected'; ?>>Cash on Delivery</option>
                </select><br><br>

                <!-- Customer details -->
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['customer_name']; ?>" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
                <label for="address">Address:</label>
                <textarea id="address" name="address" required><?php echo $row['address']; ?></textarea><br><br>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required><br><br>

                <!-- Order item details -->
                <h2>Update Order Items</h2>
                <?php do { ?>
                    <input type="hidden" name="item_id[]" value="<?php echo $row['item_id']; ?>">
                    <label for="itemName">Item Name:</label>
                    <input type="text" id="itemName" name="itemName[]" value="<?php echo $row['item_name']; ?>" required><br><br>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity[]" value="<?php echo $row['quantity']; ?>" required><br><br>
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price[]" value="<?php echo $row['price']; ?>" required><br><br>
                <?php } while($row = $result->fetch_assoc()); ?>
                
               

                <button type="submit" name="submit">Update</button>
            </form>
        </div>
<?php
    } else {
        echo "No order found with order_id: $order_id";
    }
} else {
    echo "Order ID not provided";
}

include 'footer.php';
?>
