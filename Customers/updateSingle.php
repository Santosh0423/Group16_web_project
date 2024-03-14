<?php
include 'header.php';
include 'db.php';

$message = ''; // Variable to store any message to be displayed

if(isset($_GET['customers_id'])) {
    $a = $_GET['customers_id'];
    $result = mysqli_query($conn, "SELECT * FROM Customers WHERE customers_id= '$a'");
    $row = mysqli_fetch_array($result);
}

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Update database record
    $query = mysqli_query($conn, "UPDATE Customers SET first_name='$first_name', last_name='$last_name', email_id='$email_id', phone='$phone', address='$address' WHERE customers_id='$a'");
    
    if($query) {
        $message = "Record Updated Successfully";
    } else {
        $message = "Record Not Updated";
    }
}

?>

<h1>Update Customer Data</h1>

<?php if(empty($message)) { ?>
<form method="post" action="">
    First Name: <br>
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
    Last Name: <br>
    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
    Email Id: <br>
    <input type="text" name="email_id" value="<?php echo $row['email_id']; ?>"><br>
    Phone Number: <br>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
    Address: <br>
    <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
<?php } else { ?>
<p><?php echo $message; ?></p>
<p><a href="update.php">Click here for the updated List</a></p>
<?php } ?>

<?php 
$conn->close();
include 'footer.php';
?>
