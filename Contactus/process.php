<?php
if(isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $DateOfContact = $_POST['DateOfContact'];
    $Message = $_POST['Message'];

    include 'db.php';

    $sql = "INSERT INTO ContactUs (Name, DateOfContact, Message)
            VALUES ('$Name', '$DateOfContact', '$Message')";

    if($conn->query($sql) === TRUE) {
        echo "Your data has been recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
