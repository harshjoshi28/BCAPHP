<?php
class objRef
{
	public $hi = 5;
}
$a = new objRef();
$b = $a;  // Copy. 


echo "a=". $a->hi . "<br>";
echo "b=". $b->hi . "<br>";

echo "a=". $a->hi=3 . "<br>";
echo "b=". $b->hi=10 . "<br>";

$a = null;

echo "a=".$a->hi. "<br>";
echo "b=".$b->hi. "<br>";

?>