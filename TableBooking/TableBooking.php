<?php
include 'header.php'
?>
<h1> Online Table Booking </h1>
<form method="post" name="table_booking_form" action="process.php">
    
    First Name: <input type="text" name="first_name"> <br><br>
    Last Name: <input type="text" name="last_name"> <br><br>
    Email: <input type="email" name="email"> <br><br>
    Phone Number: <input type="text" name="phone_number"> <br><br>
    Reservation Date: <input type="date" name="reservation_date" required> <br><br>
    Reservation Time: <input type="time" name="reservation_time" required> <br><br>
    Table Number: <input type="number" name="table_number" min="1" max="10" required > <br><br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
include 'footer.php'
?>




