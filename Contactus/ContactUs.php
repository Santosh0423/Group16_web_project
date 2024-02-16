<?php
include 'header.php';
?>

<form method="post" name="Contact_Us_form" action="process.php">
    Name: <input type="text" name="Name"><br><br>
    Date Of Contact: <input type="date" name="DateOfContact"><br><br>
    Message: <input type="text" name="Message"><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
include 'footer.php';
?>
