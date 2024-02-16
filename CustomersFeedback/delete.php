<?php
include 'header.php';
include 'db.php';

// Check if the customers_id parameter is set in the URL
if(isset($_GET['feedback_id'])) {
    $a = $_GET['feedback_id'];
    
    // Query the database to fetch the customer data
    $result = mysqli_query($conn,"SELECT * FROM CustomersFeedback WHERE feedback_id= '$a'");
    
    // Check if any row was fetched
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
?>

        <form method="post" action="process.php">
            <div><?php if(isset($message)) { echo $message; } ?></div>
            Customers Id: <br>
            <input type="text" name="customers_id" value="<?php echo $row['customers_id']; ?>"><br>
            Feedback :<br>
            <input type="text" name="feedbackMessage" value="<?php echo $row['feedbackMessabe']; ?>"><br>
            Date:<br>
            <input type="text" name="timestamp" value="<?php echo $row['timestamp']; ?>"><br>
            <button type="submit" class="btn btn-primary" name="submit">Delete</button>
        </form>
<?php
    } else {
        echo "No record found for the given feedback_id.";
    }
} else {
    echo "Invalid or missing feedback_id parameter in the URL.";
}

$conn->close();
include 'footer.php';
?>