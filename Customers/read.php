<?php
include 'header.php';
include 'db.php'; 
$sql =  "SELECT * FROM Customers";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\">
<tr>
<th><h3>Customers Id</h3></th>
<th><h3>First Name</h3></th>
<th><h3>Last Name</h3></th>
<th><h3>Email ID</h3></th>
<th><h3>Phone</h3></th>
<th><h3>Address</h3></th> 
</tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr>
        <td><a href='updatesingle.php?id=$row[customers_id]'>$row[customers_id]</a></td>
        <td>{$row["first_name"]}</td> 
        <td>{$row["last_name"]}</td>
        <td>{$row["email_id"]}</td>
        <td>{$row["phone"]}</td>
        <td>{$row["address"]}</td>
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