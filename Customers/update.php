
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "SELECT * FROM Customers";
$result = $conn->query($sql);
echo "<table class=\"table\">
<tr>
<th>Customers Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Phone</th>
<th>Address</th> 
<th>Update</th>
<th>Delete</th>
</tr>";
?>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><a href="updatesingle.php?customers_id=<?php echo $row['customers_id']; ?>"></a></td>   
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["email_id"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><a href="updatesingle.php?customers_id=<?php echo $row['customers_id']; ?>">Update</a></td>
<td><a href="delete.php?customers_id=<?php echo $row['customers_id']; ?>">Delete</a></td>
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