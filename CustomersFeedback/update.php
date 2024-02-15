
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "SELECT * FROM Customersfeedback";
$result = $conn->query($sql);
echo "<table class=\"table\">
<tr>
<th>Feedback Id</th>
<th>Customers Id</th>
<th>Feedback Message</th>
<th>Date</th> 
<th>Update</th>
<th>Delete</th>
</tr>";
?>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><a href="updatesingle.php?feedback_id=<?php echo $row['feedback_id']; ?>"></a></td>   
<td><?php echo $row["customers_id"]; ?></td>
<td><?php echo $row["feedbackMessage"]; ?></td>
<td><?php echo $row["timestamp"]; ?></td>
<td><a href="updatesingle.php?feedback_id=<?php echo $row['feedback_id']; ?>">Update</a></td>
<td><a href="delete.php?feedback_id=<?php echo $row['feedback_id']; ?>">Delete</a></td>
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