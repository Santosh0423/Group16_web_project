<?php
include 'header.php';
include 'db.php';

// Check if the Email_address parameter is set in the URL
if(isset($_GET['Email_address'])) {
    $a = $_GET['Email_address'];

    // Query the database to fetch the contact data
    $result = mysqli_query($conn, "SELECT * FROM ContactUs WHERE Email_address = '$a'");
    
    // Check if any row was fetched
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Check if the form is submitted
        if(isset($_POST['Delete'])) {
            // Handle the deletion here
            $deleteQuery = mysqli_query($conn, "DELETE FROM ContactUs WHERE Email_address = '$a'");

            if($deleteQuery) {
                echo "Record with Email_address: $a deleted successfully.";
                // Redirect to a page or perform any other actions after deletion
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
?>
        <div class="container">
            <form action="delete.php?Email_address=<?php echo $a; ?>" method="POST">
                <div class="title">
                    Delete 
                </div>

                <div class="form">
                <div class="input_field">
                        <label>Name</label>
                        <input type="text" class="input" name="name" value="<?php echo $row['Name']; ?>" >
                    </div>

                    <div class="input_field">
                        <label>Email address</label>
                        <input type="text" class="input" name="emailaddress" value="<?php echo $row['Email_address']; ?>" >
                    </div>

                    <div class="input_field">
                        <label>Phone number</label>
                        <input type="text" class="input" name="phonenumber" value="<?php echo $row['Phone_number']; ?>" >
                    </div>

                    <div class="input_field">
                        <label>DateOfContact</label>
                        <input type="date" class="input" name="dateofcontact" value="<?php echo $row['DateOfContact']; ?>" >
                    </div>

                    <div class="input_field">
                        <label>Message</label>
                        <textarea class="input" name="message"><?php echo $row['Message']; ?></textarea>
                    </div>

                    <div class="input_field">
                        <input type="hidden" name="Email_address" value="<?php echo $a; ?>">
                        <input type="submit" value="Delete" class="btn" name="Delete">
                    </div>
                </div>
            </form>
        </div>
<?php
    } else {
        echo "No record found for the given Email_address.";
    }
}

$conn->close();
include 'footer.php';
?>
