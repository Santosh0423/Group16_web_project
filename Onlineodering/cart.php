<?php
session_start();
include 'header.php';

// Check if there's a cancellation action requested
if (isset($_GET['action']) && $_GET['action'] === 'cancel' && isset($_GET['item_key'])) {
    $item_key = $_GET['item_key'];
    // Check if the item exists in the cart
    if (isset($_SESSION['cart'][$item_key])) {
        // Remove the item from the cart
        unset($_SESSION['cart'][$item_key]);
        // Refresh the page to reflect the changes
        exit();
    }
}

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    echo "<h2>Shopping Cart</h2>";
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Item Name</th>";
    echo "<th>Size</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Total</th>";
    echo "<th>Action</th>"; // New column for cancel action
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $total_price = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        echo "<tr>";
        echo "<td>{$item['item_name']}</td>";
        echo "<td>{$item['size']}</td>";
        echo "<td>{$item['price']} €</td>";
        echo "<td>{$item['quantity']}</td>";
        $item_total = $item['price'] * $item['quantity']; // Calculate total price for this item
        echo "<td>{$item_total} €</td>"; // Display total price for this item
        echo "<td><a href='{$_SERVER['PHP_SELF']}?action=cancel&item_key={$key}'>Cancel</a></td>"; // Cancel option with link
        echo "</tr>";
        $total_price += $item_total; // Update total price
    }
    echo "</tbody>";
    echo "</table>";
    echo "<p>Total Price: {$total_price} €</p>";

    echo "<form action='purchase.php' method='post'>";
    echo "<input type='submit' value='Purchase'>";
    echo "</form>";

}
include 'footer.php';
?>
