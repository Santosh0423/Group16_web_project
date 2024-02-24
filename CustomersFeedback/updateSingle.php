<?php
include 'header.php';
include 'db.php';

if(isset($_GET['feedback_id'])) {
    $a = $_GET['feedback_id'];
    $result = mysqli_query($conn, "SELECT * FROM CustomersFeedback WHERE feedback_id= '$a'");
    $row = mysqli_fetch_array($result);
}
?>

<h1>Update Customer Data</h1>
<form method="post" action="process.php">
    <div><?php if(isset($message)) { echo $message; } ?></div>
            Customers Id: <br>
            <input type="text" name="customers_id" value="<?php echo $row['customers_id']; ?>" readonly><br>
            Feedback :<br>
            <input type="text" name="feedbackMessage" value="<?php echo $row['feedbackMessage']; ?>" readonly><br>
            Date:<br>
            <input type="text" name="timestamp" value="<?php echo $row['timestamp']; ?>" readonly><br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

<?php 
if(isset($_POST['submit'])) {
    $customers_id = $_POST['customers_id'];
    $feedbackMessage = $_POST['feedbackMessage'];
    $timestamp = $_POST['timestamp'];

    $query = mysqli_query($conn, "UPDATE CustomersFeedback SET customers_id='$customers_id', feedbackMessage='$feedbackMessage', timestamp='$timestamp', WHERE feedback_id='$a'");
    
    if($query) {
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'>Check your updated List</a>";
        // Redirect to update page after updating
        // header("location: update.php");
    } else {
        echo "Record Not modified";
    }
}

$conn->close();
include 'footer.php';
?>