<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the item_name and size are set in the POST request
    if (isset($_POST["item_name"]) && isset($_POST["size"])) {
        $item_name = $_POST["item_name"];
        $size = $_POST["size"];

        // Check if the quantity is set and greater than 0
        if (isset($_POST["quantity"]) && $_POST["quantity"] > 0) {
            $quantity = $_POST["quantity"];
        } else {
            // If quantity is not set or invalid, set it to 1
            $quantity = 1;
        }

        // Check if the price is set in the POST request
        if (isset($_POST["price"])) {
            $price = $_POST["price"];
        } else {
            // If price is not set, display an error
            echo "Error: Price not set for the item.";
            exit;
        }

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

        // Redirect back to the menu page
        header("Location: index.php");
        exit;
    } else {
        // If item_name or size is not set, display an error
        echo "Error: Item name or size not set.";
        exit;
    }
} else {
    // If the request method is not POST, display an error
    echo "Error: Invalid request method.";
    exit;
}
?>
