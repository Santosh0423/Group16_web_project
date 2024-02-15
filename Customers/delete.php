<?php
include 'header.php';
include 'db.php';
$a = $_GET['customers_id'];
$result = mysqli_query($conn,"SELECT * FROM Customers WHERE customers_id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="process.php">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
<br>
Email Id:<br>
<input type="text" name="email_id" value="<?php echo $row['email_id']; ?>">
<br>
Phone Number:<br>
<input type="number" name="phone" value="<?php echo $row['phone']; ?>">
<br>
Address:<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>">
<br>

<button type="submit" class="btn btn-primary" name="submit">Delete</button>
</form>
<?php 
if(isset($_POST['Delete'])){
    $query = mysqli_query($conn,"DELETE FROM Customers where customers_id='$a'");
    if($query){
        echo "Record Deleted with customers_id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>