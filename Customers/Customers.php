<?php
include 'header.php'
?>
<form method="post" name="user_reg_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    First Name: <input type="text" name="first_name"> <br><br>
    Last Name: <input type="text" name="last_name"> <br><br>
    Email Id: <input type="email" name="email_id"> <br><br>
    Phone: <input type="text" name="phone_number"> <br><br>
    Address: <input type="text" name="address"> <br><br>
    <input type="submit" value="submit">  <br><br>
</form>
<?php
//Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : '';
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : '';
    $email_id = isset($_POST["email_id"]) ? $_POST["email_id"] : '';
    $phone = isset($_POST["phone_number"]) ? $_POST["phone_number"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';

    echo "<h3>Your data was recorded</h3>";
}
?>
<?php
include 'footer.php'
?>