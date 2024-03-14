<?php
include 'header.php';
include 'db.php';
if(isset($_GET['booking_id'])){
$a = $_GET['booking_id'];
$result = mysqli_query($conn,"SELECT * FROM TableBooking WHERE booking_id= '$a'");
$row= mysqli_fetch_array($result);}
?>
<h1>Update  Data</h1>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>" required>
<br>
Last Name :<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"  required>
<br>
Email :<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"required>
<br>
Phone Number: <br>
<input type="text" name="phone_number"  value="<?php echo $row['phone_number']; ?>"required>
<br>
Reservation Date: <br>
<input type="date" name="reservation_date"  value="<?php echo $row['reservation_date']; ?>"required>
<br>
Reservation Time: <br>
<input type="time" name="reservation_time"  value="<?php echo $row['reservation_time']; ?>"required>
<br>
Table Number: <br>
<input type="number" name="table_number" min="1" max="10" value="<?php echo $row['table_number']; ?>" required>
<br>
Number Of Person: <br>
<input type="number" name="number_persons" min="1" max="10" value="<?php echo $row['number_persons']; ?>" required>
<br>
Reservation Type:
    <select name="reservation_type" required>
        <option value="normal">Normal</option>
        <option value="special">Special Occasion</option> 
        <option value="business">Business Meeting</option>
    </select><br><br>


<button type="Update" class="btn btn-primary" name="Update">Update</button>
</form>

<?php 
if(isset($_POST['Update'])){
    # it now updates only fname, your task is to update all other fields in your team
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $table_number = $_POST['table_number'];
    $number_persons = $_POST['number_persons'];
    $reservation_type = $_POST['reservation_type'];
   

    $query = mysqli_query($conn,"UPDATE TableBooking set first_name='$first_name' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set last_name='$last_name' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set email='$email' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set phone_number='$phone_number' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set reservation_date='$reservation_date' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set reservation_time='$reservation_time' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set table_number='$table_number' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set number_persons='$number_persons' where booking_id='$a'");
    $query = mysqli_query($conn,"UPDATE TableBooking set reservation_type='$reservation_type' where booking_id='$a'");
  


    if($result){

        echo "Record has been updated Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header('location:updatesingle.php);
      

    }
    else { echo "Record Not notified";}
    }
$conn->close();
include 'footer.php';
?>

