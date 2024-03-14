<?php
include 'header.php'
?>
<form method="post" name="user_reg_form" action="process.php">
    First Name: <input type="text" name="first_name" required> <br><br>
    Last Name: <input type="text" name="last_name" required> <br><br>
    Email Id: <input type="email" name="email_id" required> <br><br>
    Password: <input type="password" name="password" required> <br><br>
    Confirm Password: <input type="password" name="confirm_password" required> <br><br>
    Phone: <input type="text" name="phone" required> <br><br>
    Address: <input type="text" name="address" required> <br><br>
    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
</form>
<?php
include 'footer.php'
?>