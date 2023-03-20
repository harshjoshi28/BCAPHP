<?php
require "config.php";
$id = $_REQUEST['id'];
$delete = "DELETE FROM `reg1` WHERE `id`='$id'";
$result = mysqli_query($con,$delete);
header("location:details.php");
?>