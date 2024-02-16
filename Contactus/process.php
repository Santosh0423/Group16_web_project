<?php
if(isset ($_POST['submit'])) {

    $contactid = $_POST['ContactId'];
    $Name = $_POST['Name'];
    $DateOfContact = $_POST['DateOfContact'];
    $Message = $_POST['Message'];

include 'db.php';

$sql = "insert into Contact us(ContactId, Name, DateOfContact, Message)
     values('$ContactId', '$Name', '$DateOfContact', '$Message' )";


     if($conn->query($sql) ===True) {
        echo"Your data has been Recorded sucessfully";


     }
else{
    echo"Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();
}

?>