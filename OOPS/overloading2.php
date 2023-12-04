<?php
class Overloading
{
	function __call($name,$args)
	{
		echo "$name does not exists.";
		
		echo "<pre>";
			print_r ($args);
		echo "</pre>";
	}
	static function __callStatic($name,$args)
	{
		echo "$name does not exists.";
		
		echo "<pre>";
			print_r ($args);
		echo "</pre>";
	}
	
}
$test = new Overloading;
$test->anything('123',123);
$test::anything('123',123);

?>