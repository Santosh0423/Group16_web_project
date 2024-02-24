<?php
include 'header.php';
include 'db.php';

// Check if the booking_id parameter is set in the URL
if(isset($_GET['booking_id'])){
    $a = $_GET['booking_id'];

    $sql_delete = "DELETE FROM TableBooking WHERE booking_id= '$a'";
    $result = mysqli_query($conn, $sql_delete);

    if($result){
        echo "Data has been deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

$conn->close();
include 'footer.php';
?>
