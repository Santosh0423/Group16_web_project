<?php
include 'header.php';
include 'db.php';
if(isset($_GET['table_id'])){
$a = $_GET['table_id'];
$result = mysqli_query($conn,"SELECT * FROM TableBooking WHERE table_id= '$a'");
$row= mysqli_fetch_array($result);}
?>

<h1>Update  Data</h1>
<form method="post" action="process.php">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
<br>
Email :<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br>
Phone Number: <br>
<input type="varchar" name="phone"  value="<?php echo $row['phone']; ?>">
<br>
Reservation Date: <br>
<input type="text" name="reservation_date"  value="<?php echo $row['resevation_date']; ?>">
<br>
Reservation Time: <br>
<input type="text" name="reservation_time"  value="<?php echo $row['reservation_time']; ?>">
<br>
Table Number: <br>
<input type="text" name="first_name"  value="<?php echo $row['table_number']; ?>">
<br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php 
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $first_name = $_POST['first_name'];
    $query = mysqli_query($conn,"UPDATE TableBooking set first_name='$first_name' where table_id='$a'");
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