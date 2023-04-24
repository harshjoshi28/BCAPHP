<?php
$con = new mysqli("localhost","root","","test");
$sql = "select * from demo";
$res  = $con->query($sql);
?>
<html>
<body>
<table border="1" align="center">
<tr>
<th>Name</th>
<th>Email</th>
<th>Contact</th>
<th>Update</th>
<th>Delete</th>
</tr>
<?php
if($res->num_rows > 0)
{
	while($row=$res->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['nm']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['cno']; ?></td>
<?php $id=$row['id']; ?>
<td><a href="update.php?id=<?php echo $id; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
</tr>
<?php 
} 
}
else
{
	echo "Zero Records.";
}
 ?>
</table>
</body>
</html>