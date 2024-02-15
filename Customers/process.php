<?php
include 'header.php';
include 'db.php';
//Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Process form data
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : '';
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : '';
    $email_id = isset($_POST["email_id"]) ? $_POST["email_id"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
    $address = isset($_POST["address"]) ? $_POST["address"] : '';
   

    
    $sql = "INSERT INTO Customers (first_name, last_name, email_id, phone, address)
            VALUES ('$first_name', '$last_name', '$email_id', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
       echo "Your data was recorded";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if(isset($_POST['Delete'])){
        $query = mysqli_query($conn,"DELETE FROM Customers where customers_id='$a'");
        if($query){
            echo "Record Deleted with customers_id: $a <br>";
            echo "<a href='update.php'> Check your updated List </a>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

  
    $conn->close();
}
include 'footer.php';
?>
