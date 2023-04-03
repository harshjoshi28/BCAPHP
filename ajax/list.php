<?php
include "connection.php";
$q = intval($_GET['q']);
$sql="SELECT * FROM ajax WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
?>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
while($row = mysql_fetch_assoc($result))
{
?>
<table>
    <tr>
    <td><?php $row['fnm']; ?> </td>
	<td><?php $row['lnm']; ?> </td>
	<td><?php $row['age']; ?> </td>
	<td><?php $row['city']; ?> </td>
	<?php } ?>
    </tr>
	</table>
</body>
</html>