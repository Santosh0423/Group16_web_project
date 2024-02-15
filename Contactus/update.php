
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "select * from ContactUs";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>ContactId</th>
<th>Name</th>
<th>DateOfContact</th>
<th>Message</th>

</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["ContactId"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["DateOfContact"]; ?></td>
<td><?php echo $row["Message"]; ?></td>
<td><a href="updatesingle.php?email_address=<?php echo $row['email_address']; ?>">Update</a></td>
<td><a href="delete.php?email_address=<?php echo $row['email_address']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$conn->close();
?>
</table>
<?php include 'footer.php' ?>
