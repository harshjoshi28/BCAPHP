<?php
class MagicMethods
{
	public $value1;
	public $value2;
	
/*  __construct()
	__destruct()
	__get()
	__set()
	__isset()
	__unset()
	__call()
	__callStatic()
	__invoke()
	__clone()
	__toString()
	__sleep()
	__wakeUp()
	__set_state()
	__debugInfo()
*/
	
	function __invoke()
	{
		echo "<Br>This is completely out of Bounds.";
	}
	function __clone()
	{
		echo '<br>I M John\'s Copy';
	}
	function __toString()
	{
		return '<br>Here goes notihng';
	}
	function __debugInfo()
	{
		echo "<pre>";
		return ["Hello",'sdsdsd',"I am new "];
		echo "</pre>";
	}
	function __set_state($args)
	{
		$test3 = new MagicMethods;
		$test3->value1 = $args['value1'];
		$test3->value2 = $args['value2'];
		return $test3;
	}
}

$test = new MagicMethods;
$test->value1 = 15;
$test->value2 = 'sdsdsd';
$str = var_export($test,true);
eval($str.";");
var_dump($str);
var_dump(new MagicMethods);
//echo serialize($test);
$test();
$test1 = clone $test;
echo $test1;

?>