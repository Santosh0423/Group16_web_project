<?php
session_start();

// Check if item_key is provided and is a valid integer
if(isset($_GET['item_key']) && is_numeric($_GET['item_key'])) {
    $item_key = (int)$_GET['item_key'];

    // Check if the item exists in the cart
    if(isset($_SESSION['cart'][$item_key])) {
        // Remove the item from the cart
        unset($_SESSION['cart'][$item_key]);
    }
}

// Redirect back to the shopping cart page
header("Location: shopping cart.php");
exit();
?>
