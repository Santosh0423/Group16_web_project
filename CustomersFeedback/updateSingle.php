<?php
include 'header.php';
include 'db.php';

// Check if feedback_id is set in the URL
if(isset($_GET['feedback_id'])) {
    $a = $_GET['feedback_id'];
    $result = mysqli_query($conn, "SELECT * FROM CustomersFeedback WHERE feedback_id= '$a'");
    $row = mysqli_fetch_array($result);
}

// Check if the form was submitted
if(isset($_POST['submit'])) {
    $customers_id = $_POST['customers_id'];
    $feedbackMessage = $_POST['feedbackMessage'];
    $timestamp = $_POST['timestamp'];

    // Update the record in the database
    $query = mysqli_query($conn, "UPDATE CustomersFeedback SET customers_id='$customers_id', feedbackMessage='$feedbackMessage', timestamp='$timestamp' WHERE feedback_id='$a'");
    
    if($query) {
        // Display success message and redirect
        echo "Record Updated Successfully <br>";
        echo "<a href='update.php'>Click here for the updated List</a>";
        exit; // Stop further execution
    } else {
        echo "Unable to modify";
    }
}
?>

<h1>Update Customer Data</h1>
<form method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?></div>
    Customers Id: <br>
    <input type="text" name="customers_id" value="<?php echo $row['customers_id']; ?>" readonly><br>
    Feedback :<br>
    <!-- Remove the "readonly" attribute to allow editing -->
    <input type="text" name="feedbackMessage" value="<?php echo $row['feedbackMessage']; ?>"><br>
    Date:<br>
    <input type="text" name="timestamp" value="<?php echo $row['timestamp']; ?>" readonly><br>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

<?php 
$conn->close();
include 'footer.php';
?>