<?php
include 'header.php';
include 'db.php';
$a = $_GET['email_id'];
$result = mysqli_query($conn,"SELECT * FROM Customers WHERE email_id= '$a'");
$row= mysqli_fetch_array($result);
?>

<h1>Update  Data</h1>
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
Phone Number: <br>
<input type="number" name="phone_number"  value="<?php echo $row['phone_number']; ?>">
<br>
Address: <br>
<input type="text" name="address"  value="<?php echo $row['address']; ?>">
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $first_name = $_POST['first_name'];
    $query = mysqli_query($conn,"UPDATE Customers set first_name='$first_name' where email_id='$a'");
    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
include 'footer.php';
?>