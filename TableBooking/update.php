
<?php
include_once 'header.php';
require_once 'db.php'; 
$sql = "select * from TableBooking";
$result = $conn->query($sql);?>
<table class="table">
<tr>
<th>Booking Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email </th>
<th>Phone Number</th>
<th>Reservation date</th> 
<th>Reservation time</th>
<th>Table Number</th> 
<th>Update</th>
<th>Delete</th>
</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["booking_id"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone_number"]; ?></td>
<td><?php echo $row["reservation_date"]; ?></td>
<td><?php echo $row["reservation_time"]; ?></td>
<td><?php echo $row["table_number"]; ?></td>
<td><a href="updatesingle.php?email_id=<?php echo $row['booking_id']; ?>">Update</a></td>
<td><a href="delete.php?email_id=<?php echo $row['booking_id']; ?>">Delete</a></td>
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