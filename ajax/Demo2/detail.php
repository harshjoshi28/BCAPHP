<?php
include "connection.php";
$q = intval($_GET['q']);
$sql="SELECT * FROM `ajax` WHERE `id` = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
</tr>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['fnm'] . "</td>";
    echo "<td>" . $row['lnm'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>