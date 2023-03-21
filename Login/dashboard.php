<?php
require "config.php";
session_start();
if(!isset($_SESSION['unm']))
{
	header("location:dashboard.php");
}
?>
<?php
echo $_SESSION['unm'];
?>
<h1 align="center">Welcome</h1>
<a href="logout.php">Logout</a>