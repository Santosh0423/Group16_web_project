<?php
include 'header.php';
include 'db.php'; 
$sql =  "SELECT * FROM CustomerFeedback";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\">
<tr>
<th>Feedback ID</th>
<th>Customers ID</th>
<th>Feedback</th>
<th>timestamp</th> 
</tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr>
        <td><a href='updatesingle.php?id=$row[feedback_id]'>$row[feedback_id]</a></td>
        <td>{$row["cus_id"]}</td>
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