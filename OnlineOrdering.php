<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Online Food Ordering</h1>

<div class="container">
    <form action="order.php" method="POST">
        <h2>Order Items:</h2>
        <label for="veg_pizza_size">Veg Pizza:</label>
        <select id="veg_pizza_size" name="veg_pizza_size">
            <option value="small">Small</option>
            <option value="big">Big</option>
        </select>
        <input type="number" name="veg_pizza_quantity" min="0" placeholder="Quantity"><br><br>

        <label for="chicken_pizza_size">Chicken Pizza:</label>
        <select id="chicken_pizza_size" name="chicken_pizza_size">
            <option value="small">Small</option>
            <option value="big">Big</option>
        </select>
        <input type="number" name="chicken_pizza_quantity" min="0" placeholder="Quantity"><br><br>

        <label for="burger_size">Burger:</label>
        <select id="burger_size" name="burger_size">
            <option value="small">Small</option>
            <option value="big">Big</option>
        </select>
        <input type="number" name="burger_quantity" min="0" placeholder="Quantity"><br><br>

        <label for="salad">Salad:</label>
        <input type="number" name="salad_quantity" min="0" placeholder="Quantity"><br><br>

        <h2>Contact Information:</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</div>

</body>
</html>


