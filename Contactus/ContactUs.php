<?php
include 'header.php'
?>
<form method="post" name="Contact_Us_form" action="process.php">
    Contact Id: <input type="text" name="ContactId"> <br><br>
     Name: <input type="text" name="Name"> <br><br>
    Date Of Contact: <input type="text" name="DateOfContact"> <br><br>
    Message: <input type="text" name="Message"> <br><br>
    <button type="submit">Submit</button>

</form>

<?php
include 'footer.php'
?>