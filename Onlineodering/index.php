<?php
include 'header.php'
?>

<div class="main-menu">
    <div class="container">
        <div class="row">
            <!-- First Item: Momo -->
            <div class="col-md-6">
                <div class="menu-item">
                    <h2>Momo</h2>
                    <div class="menu-item-details">
                        <h3>Veg Momo</h3>
                        <img src="images/momo.jpg" alt="Veg Momo">
                        <p>Price:
                            <span class="price">Large: €10.56</span>
                            <span class="price">Medium: €8.99</span>
                            <span class="price">Small: €5.95</span>
                        </p>
                        <form action="order.php" method="POST">
                            <input type="hidden" name="item_name" value="Veg Momo">
                            <input type="hidden" name="source" value="index">
                            <input type="hidden" name="price" value="10.56">
                            <select name="size">
                                <option value="large">Large</option>
                                <option value="medium">Medium</option>
                                <option value="small">Small</option>
                            </select>
                            <input type="number" name="quantity" min="1" placeholder="Quantity" required>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Second Item: Biryani -->
            <div class="col-md-6">
                <div class="menu-item">
                    <h2>Biryani</h2>
                    <div class="menu-item-details">
                        <h3>Chicken Biryani</h3>
                        <img src="images/chicken biryani.jpg" alt="Chicken Biryani">
                        <p>Price:
                            <span class="price">Large: €11.23</span>
                            <span class="price">Medium: €8.98</span>
                            <span class="price">Small: €7.25</span>
                        </p>
                        <form action="order.php" method="POST">
                            <input type="hidden" name="item_name" value="Chicken Biryani">
                            <input type="hidden" name="source" value="index">
                            <input type="hidden" name="price" value="11.23">
                            <select name="size">
                                <option value="large">Large</option>
                                <option value="medium">Medium</option>
                                <option value="small">Small</option>
                            </select>
                            <input type="number" name="quantity" min="1" placeholder="Quantity" required>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Third Item: Tea -->
            <div class="col-md-6">
                <div class="menu-item">
                    <h2>Beverages</h2>
                    <div class="menu-item-details">
                        <h3>Tea</h3>
                        <img src="images/Tea.jpg" alt="Tea">
                        <p>Price:
                            <span class="price">Black Tea: €6</span>
                            <span class="price">White Tea: €8</span>
                        </p>
                        <form action="order.php" method="POST">
                            <input type="hidden" name="item_name" value="Tea">
                            <input type="hidden" name="source" value="index">
                            <input type="hidden" name="price" value="6">
                            <select name="size">
                                <option value="big">Big</option>
                                <option value="small">Small</option>
                            </select>
                            <input type="number" name="quantity" min="1" placeholder="Quantity" required>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Fourth Item: Selroti -->
            <div class="col-md-6">
                <div class="menu-item">
                    <h2>Local Foods</h2>
                    <div class="menu-item-details">
                        <h3>Selroti</h3>
                        <img src="images/selrotii.jpg" alt="Selroti">
                        <p>Price:
                            <span class="price">Large: €12.99</span>
                            <span class="price">Medium: €9.85</span>
                            <span class="price">Small: €5.75</span>
                        </p>
                        <form action="order.php" method="POST">
                            <input type="hidden" name="item_name" value="Selroti">
                            <input type="hidden" name="source" value="index">
                            <input type="hidden" name="price" value="12.99">
                            <select name="size">
                                <option value="large">Large</option>
                                <option value="medium">Medium</option>
                                <option value="small">Small</option>
                            </select>
                            <input type="number" name="quantity" min="1" placeholder="Quantity" required>
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Cart and Purchase buttons -->
<div class="buttons-container">
    <a href="cart.php" class="btn btn-primary">View Cart</a>
    <a href="purchase.php" class="btn btn-success">Purchase</a>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
include 'footer.php'
?>