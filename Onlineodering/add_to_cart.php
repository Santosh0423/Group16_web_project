<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (isset($_POST["item_name"]) && isset($_POST["size"])) {
        $item_name = $_POST["item_name"];
        $size = $_POST["size"];

        
        if (isset($_POST["quantity"]) && $_POST["quantity"] > 0) {
            $quantity = $_POST["quantity"];
        } else {
           
            $quantity = 1;
        }
        if (isset($_POST["price"])) {
            $price = $_POST["price"];
        } else {
            
            echo "Error: Price not set for the item.";
            exit;
        }

       
        $item = array(
            "item_name" => $item_name,
            "size" => $size,
            "price" => $price,
            "quantity" => $quantity
        );

       
        if (!isset($_SESSION["cart"])) {
            
            $_SESSION["cart"] = array();
        }

        $_SESSION["cart"][] = $item;

        header("Location: index.php");
        exit;
    } else {
        
        echo "Error: Item name or size not set.";
        exit;
    }
} else {
    
    echo "Error: Invalid request method.";
    exit;
}
?>