<?php
include 'header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM ContactUs WHERE ContactId= '$a'");
$row= mysqli_fetch_array($result);
?>

<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
ContactId: <br>
<input type="text" name="ContactId"  value="<?php echo $row['ContactId']; ?>">
<br>
Name :<br>
<input type="text" name="Name" value="<?php echo $row['Name']; ?>">
<br>
DateOfContact:<br>
<input type="text" name="DateOfContact" value="<?php echo $row['DateOfContact']; ?>">
<br>
Message:<br>
<input type="text" name="Message" value="<?php echo $row['Message']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>

<?php 
if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM ContactUs where ContactId='$a'");
    if($query){
        echo "Record Deleted with ContactId: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
include 'footer.php';
?>