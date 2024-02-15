<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['item_name'], $_POST['size'], $_POST['quantity'], $_POST['price'])) {
        $item_name = $_POST['item_name'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        // Create an array to store item details
        $item = array(
            "item_name" => $item_name,
            "size" => $size,
            "price" => $price,
            "quantity" => $quantity
        );

        // Check if the cart session variable is set
        if (!isset($_SESSION["cart"])) {
            // If cart is not set, initialize it as an empty array
            $_SESSION["cart"] = array();
        }

        // Add the item to the cart
        $_SESSION["cart"][] = $item;
    }

    // Redirect back to the menu page
    header("Location: index.php");
    exit;
} else {
    // If the request method is not POST, display an error
    echo "Error: Invalid request method.";
    exit;
}
?>