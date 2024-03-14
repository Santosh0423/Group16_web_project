<?php
include ("header.php");
include ("db.php");

// Check if the customers_id parameter is set in the URL
if(isset($_GET['customers_id'])) {
    $a = $_GET['customers_id'];
    
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Perform deletion operation
        $sql = "DELETE FROM Customers WHERE customers_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $a);
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        // Close the prepared statement
        $stmt->close();
        // Close the database connection
        $conn->close();
        exit();
    }
} else {
    echo "Invalid or missing customers_id parameter in the URL.";
}

// Display the form only if the record was not successfully deleted
if (!isset($_POST['submit']) || (isset($_POST['submit']) && $stmt->error)) 
?>
<form method="post">
    <p>Are you sure you want to delete this record?</p>
    <button type="submit" class="btn btn-danger" name="submit">Delete</button>
</form>
<?php


include ("footer.php");
?>