
<h1>Online Ordering</h1>

<div class="container">
    <form action="order.php" method="POST">
        <label for="item">Select Item:</label>
        <select id="item" name="item" required>
            <option value="burger">Burger</option>
            <option value="pizza">Pizza</option>
            <option value="salad">Salad</option>
        </select><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</div>