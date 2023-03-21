<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
foreach($age as $a=>$b)
{
	print_r($a.$b);
	echo "<br>";
}
?>