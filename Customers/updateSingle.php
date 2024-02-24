<?php
include 'header.php';
include 'db.php';

if(isset($_GET['customers_id'])) {
    $a = $_GET['customers_id'];
    $result = mysqli_query($conn, "SELECT * FROM Customers WHERE customers_id= '$a'");
    $row = mysqli_fetch_array($result);
}
?>

<h1>Update Customer Data</h1>
<form method="post" action="process.php">
    <div><?php if(isset($message)) { echo $message; } ?></div>
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
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php 
if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = mysqli_query($conn, "UPDATE Customers SET first_name='$first_name', last_name='$last_name', email_id='$email_id', phone='$phone', address='$address' WHERE customers_id='$a'");
    
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