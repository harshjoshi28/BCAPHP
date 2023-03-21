<?php
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
foreach($cars as $b)
{
	print_r($b);
	echo "<br>";
}
?>