<?php
include 'header.php';
include 'db.php'; 
$sql = "select * from Customers";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email ID</th>
<th>Phone</th>
<th>Address</th> 
</tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr>
        <td>". $row["first_name"]."</td> 
        <td>". $row["last_name"] ."</td>
        <td>" . $row["email_id"] . "</td>
        <td>". $row["phone_number"]. "</td>
        <td>". $row["address"]."</td>
        </tr>";
    }
    echo "</table>";
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}


$conn->close();
include 'footer.php';
?>