<?php 
class Department
{
	protected static $x=10;
	public function myFunction()
	{
		echo static::$x;
	}
}
class HR extends Department
{
	protected static $x=20;
}
class Marketing extends Department
{
	protected static $x=30;
}

$test = new Marketing;
$test->myFunction();

?>