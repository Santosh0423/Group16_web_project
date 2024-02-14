
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "select * from Customers";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Phone Number</th>
<th>Address</th> 
<th>Edit</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["email_id"]; ?></td>
<td><?php echo $row["phone_number"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><a href="updatesingle.php?email_id=<?php echo $row['email_id']; ?>">Update</a></td>
<td><a href="delete.php?email_id=<?php echo $row['email_id']; ?>">Delete</a></td>
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