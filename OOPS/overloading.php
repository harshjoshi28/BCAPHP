<?php 
class Overloading
{
	private $data = array();
	function __set($name,$value)
	{
		echo "<br>Your $name is $value";
		$this->data[$name] = $value; 
	}
	function __get($name)
	{
		echo "<br>Your can count $name.";
		return $this->data[$name];
	}	
	function __isset($name)
	{
		echo "<br>Is $name set ?";
		return isset($this->data[$name]);
	}
	function __unset($name)
	{
		echo "<br> $name unset.";
		unset($this->data[$name]);
	}	
}
echo "<pre>";
$test = new Overloading;
$test->age=15;
echo $test->age;
var_dump(isset($test->age));
unset($test->age);
var_dump(isset($test->age));
?>