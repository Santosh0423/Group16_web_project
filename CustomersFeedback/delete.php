<?php
include 'header.php';
include 'db.php';

// Check if the feedback_id parameter is set in the URL
if(isset($_GET['feedback_id'])) {
    $feedback_id = $_GET['feedback_id'];
    
    // Query the database to fetch the feedback data
    $result = mysqli_query($conn, "SELECT * FROM CustomersFeedback WHERE feedback_id = '$feedback_id'");
    
    // Check if any row was fetched
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Check if the form has been submitted
        if(isset($_POST['submit'])) {
            // Perform deletion operation
            $delete_query = "DELETE FROM CustomersFeedback WHERE feedback_id = '$feedback_id'";
            if(mysqli_query($conn, $delete_query)) {
                $message = "Record deleted successfully.";
                exit(); 
            } else {
                $message = "Error deleting record: " . mysqli_error($conn);
            }
        }
?>

        <form method="post">
            <div><?php if(isset($message)) { echo $message; } ?></div>
            Customers Id: <br>
            <input type="text" name="customers_id" value="<?php echo $row['customers_id']; ?>" readonly><br>
            Feedback :<br>
            <input type="text" name="feedbackMessage" value="<?php echo $row['feedbackMessage']; ?>" readonly><br>
            Date:<br>
            <input type="text" name="timestamp" value="<?php echo $row['timestamp']; ?>" readonly><br>
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
