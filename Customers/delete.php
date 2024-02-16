<?php
include 'header.php';
include 'db.php';

// Check if the customers_id parameter is set in the URL
if(isset($_GET['customers_id'])) {
    $a = $_GET['customers_id'];
    
    // Query the database to fetch the customer data
    $result = mysqli_query($conn,"SELECT * FROM Customers WHERE customers_id= '$a'");
    
    // Check if any row was fetched
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
?>

        <form method="post" action="process.php">
            <div><?php if(isset($message)) { echo $message; } ?></div>
            First Name: <br>
            <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
            Last Name :<br>
            <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
            Email Id:<br>
            <input type="text" name="email_id" value="<?php echo $row['email_id']; ?>"><br>
            Phone Number:<br>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
            Address:<br>
            <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
            <button type="submit" class="btn btn-primary" name="submit">Delete</button>
        </form>
<?php
    } else {
        echo "No record found for the given customers_id.";
    }
} else {
    echo "Invalid or missing customers_id parameter in the URL.";
}

$conn->close();
include 'footer.php';
?>