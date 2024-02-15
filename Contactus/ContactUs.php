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
//Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $ContactId = isset($_POST["ContactId"]) ? $_POST["ContactId"] : '';
    $Name = isset($_POST["Name"]) ? $_POST["Name"] : '';
    $DateOfContact = isset($_POST["DateOfContact"]) ? $_POST["DateOfContact"] : '';
    $message = isset($_POST["Message"]) ? $_POST["Message"] : '';
    
    echo "ContactId: $ContactId<br>";
    echo "Name: $Name<br>";
    echo "DateOfContact: $DateOfContact<br>";
    echo "Message: $message<br>";
}


include 'footer.php'
?>