<?php
include 'header.php'
?>

<h1> Online Table Booking </h1>
<form method="post" name="table_booking_form" action="process.php">
    
    First Name: <input type="text" name="first_name" required> <br><br>
    Last Name: <input type="text" name="last_name" required> <br><br>
    Email: <input type="email" name="email" required> <br><br>
    Phone Number: <input type="text" name="phone_number" required> <br><br>
    Reservation Date: <input type="date" name="reservation_date" required> <br><br>
    Reservation Time: <input type="time" name="reservation_time" required> <br><br>
    Table Number: <input type="number" name="table_number" min="1" max="10" required > <br><br>
    Number Of Person: <input type="number" name="number_persons" min="1" max="10" required > <br><br>
    
    Reservation Type:
    <select name="reservation_type" required>
        <option value="normal">Normal</option>
        <option value="special">Special Occasion</option> 
        <option value="business">Business Meeting</option>
    </select><br><br>
    
    


    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
include 'footer.php'
?>



