<?php
session_start();
include 'header.php';
?>
<div class="container">
    <h1>Review Your Order</h1>
    <!-- Display cart items here -->
    <div class="cart-items">
        <!-- Iterate through cart items and display details -->
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <div class="item">
                <p>Name: <?php echo $item['item_name']; ?></p>
                <p>Quantity: <?php echo $item['quantity']; ?></p>
                <p>Price: <?php echo '$' . number_format($item['price'], 2); ?></p>
                <p>Subtotal: <?php echo '$' . number_format($item['price'] * $item['quantity'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>

    <h2>Enter Your Information</h2>
    <!-- Personal information form -->
    <form action="checkout.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <h2>Select Payment Option</h2>
        <input type="radio" id="credit_card" name="payment" value="credit_card" required>
        <label for="credit_card">Credit Card</label><br>
        <input type="radio" id="paypal" name="payment" value="paypal" required>
        <label for="paypal">PayPal</label><br>
        <input type="radio" id="cash_on_delivery" name="payment" value="cash_on_delivery" required>
        <label for="cash_on_delivery">Cash on Delivery</label><br><br>

        <button type="submit">Place Order</button>
    </form>
 </div>
        </div>
        <?php
 include 'footer.php';
?>