<?php
include 'header.php';
include 'db.php';
$a = $_GET['email_id'];
$result = mysqli_query($conn,"SELECT * FROM Customers WHERE email_id= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="Customers.php">
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
<input type="number" name="phone_number" value="<?php echo $row['phone_number']; ?>">
<br>
Address:<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM Customers where email_id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>