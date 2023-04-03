<?php
$a = array("Peter"=>"25","John"=>"35");
echo json_encode($a);
echo "<br>";
$b = '{"Peter":"25","John":"35"}';
var_dump(json_decode($b));
echo "<br>";
$c = "Hello";
var_dump($c);
?>