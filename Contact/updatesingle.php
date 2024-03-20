<?php
include("header.php");
include("db.php");

$row = []; // Initialize $row

if(isset($_GET['Email_address'])){
   $a = $_GET['Email_address'];
   $result = mysqli_query($conn, "SELECT * FROM ContactUs WHERE Email_address = '$a'");

   if ($result) {
      $row = mysqli_fetch_array($result);
   } else {
      die("Error: " . mysqli_error($conn)); // Print the error message
   }
}
?>

<div class="container">
    <form action="update.php" method="POST">
        <div class="title">
            Update Details 
        </div>

        <div class="form">
            <div class="input_field">
                <label>Name</label>
                <input type="text" class="input" name="name" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>">
                <input type="hidden" name="original_name" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>">
            </div>

            <div class="input_field">
                <label>Email address</label>
                <input type="text" class="input" name="emailaddress" value="<?php echo isset($row['Email_address']) ? $row['Email_address'] : ''; ?>">
                <input type="hidden" name="original_email" value="<?php echo isset($row['Email_address']) ? $row['Email_address'] : ''; ?>">
            </div>

            <div class="input_field">
                <label>Phone number</label>
                <input type="text" class="input" name="phonenumber" value="<?php echo isset($row['Phone_number']) ? $row['Phone_number'] : ''; ?>">
                <input type="hidden" name="original_phonenumber" value="<?php echo isset($row['Phone_number']) ? $row['Phone_number'] : ''; ?>">
            </div>

            <div class="input_field">
                <label>DateOfContact</label>
                <input type="date" class="input" name="dateofcontact" value="<?php echo isset($row['DateOfContact']) ? $row['DateOfContact'] : ''; ?>">
                <input type="hidden" name="original_dateofcontact" value="<?php echo isset($row['DateOfContact']) ? $row['DateOfContact'] : ''; ?>">
            </div>

            <div class="input_field">
                <label>Message</label>
                <textarea class="input" name="Message" required><?php echo isset($row['Message']) ? $row['Message'] : ''; ?></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="hidden" name="Email_address" value="<?php echo $a; ?>">
                <input type="submit" value="Update" class="btn" name="Update">
            </div>
        </div>
    </form>
</div>

<?php
if(isset($_POST['Update'])){
    $Email_address = $_POST['Email_address'];
    $Message = $_POST['Message'];

    echo "Email Address: $Email_address<br>";
    echo "Message: $Message<br>";

    $query = mysqli_query($conn, "UPDATE ContactUs SET Message='$Message' WHERE Email_address='$Email_address'");

    if($query){
        echo "Record Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
    } else {
        echo "Record Not modified: " . mysqli_error($conn);
    }
}

$conn->close();
include 'footer.php';
?>
