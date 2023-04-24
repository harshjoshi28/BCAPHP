<?php
$con = new mysqli("localhost","root","","test");
$id=$_REQUEST['id'];
$sql = "delete from `demo` where `id`='$id'";
$res = $con->query($sql);
header("location:detail.php");
?>