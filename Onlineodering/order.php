<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['item_name'], $_POST['size'], $_POST['quantity'], $_POST['price'])) {
        $item_name = $_POST['item_name'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

       
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
    }

    
    header("Location: index.php");
    exit;
} else {
    
    echo "Error: Invalid request method.";
    exit;
}
?>