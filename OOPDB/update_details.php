<?php
$con = new mysqli("localhost","root","","test");
$id=$_REQUEST['id'];
$nm = $_REQUEST['nm'];
$email = $_REQUEST['email'];
$cno = $_REQUEST['cno'];
$update = "update `demo` SET `nm`='$nm', `email`='$email', `cno`='$cno' where `id`='$id'";
$res = $con->query($update);
header("location:detail.php");
?>