<?php
require "config.php";

$id = $_REQUEST['id'];
$fnm = $_REQUEST['fnm'];
$lnm = $_REQUEST['lnm'];
$country = $_REQUEST['country'];
$msg = $_REQUEST['msg'];
$rd1 = $_REQUEST['rd1'];

$update = "UPDATE `reg1` SET `fnm`='$fnm',`lnm`='$lnm',`country`='$country',`msg`='$msg',`rd1`='$rd1' WHERE `id`='$id'";

$result = mysqli_query($con,$update);
header("location:details.php");
?>