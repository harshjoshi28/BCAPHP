<?php
require "config.php";
$sql = "SELECT * FROM `reg1`";
$result = mysqli_query($con,$sql);
?>
<html>
	<body>
		<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Country</th>
			<th>Message</th>
			<th>Gender</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
		while($data = mysqli_fetch_assoc($result))
		{
		?>
		<tr>
		<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['fnm']; ?></td>
				<td><?php echo $data['lnm']; ?></td>
					<td><?php echo $data['country']; ?></td>
						<td><?php echo $data['msg']; ?></td>
							<td><?php echo $data['rd1']; ?></td>
							
		<td><a href="update.php?id=<?php echo $data['id']; ?>">Update</a></td>
		<td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
		</table>
	</body>
</html>