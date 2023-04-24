<?php
$con = new mysqli("localhost","root","","test");
$id=$_REQUEST['id'];
$sql = "select * from `demo` where `id`='$id'";
$res=$con->query($sql);
$row = $res->fetch_assoc();
?>
<html>
<body>
<form action="update_details.php?id=<?php echo $id; ?>" method="POST">
<center>
Name:<input type="text" name="nm" value="<?php echo $row['nm']; ?>"><br>
Email:<input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
Contact:<input type="number" name="cno" value="<?php echo $row['cno']; ?>"><br>
<input type="submit" name="submit" value="Send">
<input type="reset" name="clear" value="Clear">
</center>
</form>
</body>
</html>