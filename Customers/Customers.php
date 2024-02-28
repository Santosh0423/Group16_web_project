<?php
include 'header.php'
?>
<form method="post" name="user_reg_form" action="process.php">
    First Name: <input type="text" name="first_name"> <br><br>
    Last Name: <input type="text" name="last_name"> <br><br>
    Email Id: <input type="email" name="email_id"> <br><br>
    Password: <input type="password" name="password"> <br><br>
    Confirm Password: <input type="password" name="confirm_password"> <br><br>
    Phone: <input type="text" name="phone"> <br><br>
    Address: <input type="text" name="address"> <br><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php
include 'footer.php'
?>