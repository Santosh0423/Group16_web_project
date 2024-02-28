<?php
include_once 'header.php';
require_once 'db.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the user's ID from the URL parameter
    $customers_id = $_GET['customers_id'];

    // Retrieve the new password and confirm password from the form
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the new password and confirm password
    if ($new_password !== $confirm_password) {
        echo "Error: New password and confirm password do not match";
    } else {
        // Hash the new password for security
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password in the database using prepared statement
        $update_sql = "UPDATE Customers SET password = ? WHERE customers_id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("si", $hashed_password, $customers_id);
        if ($stmt->execute()) {
            echo "Password updated successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }
        // Close the prepared statement
        $stmt->close();
    }
}
?>

<!-- HTML form for password update -->
<form method="post">
    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password" required><br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <button type="submit" name="submit">Update Password</button>
</form>

<?php include 'footer.php'; ?>