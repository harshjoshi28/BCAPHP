<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
	<td>Qualification</td>
	<td>Designation</td>
	<td>Research</td>
    <td>Profile Photo</td>
  </tr>

<?php

$con = mysqli_connect("localhost","root","","test");

$records = mysqli_query($con,"select * from `faculty`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
	<td><?php echo $data['qualification']; ?></td>
	<td><?php echo $data['designation']; ?></td>
	<td><?php echo $data['research']; ?></td>
    <td><?php echo "<img src='uploads/".$data['photo']."' height='100px' width='100px'>"; ?></td>
  </tr>	
<?php
}
?>
</table>
<?php mysqli_close($con);?>
</body>
</html>