<?php 
class  MyClass
{
	const geet='constant value';
	function  showConstant() 
	{			
			echo   self::geet."1";
	}
}
echo  MyClass::geet."2";
$classname="MyClass";
echo  $classname::geet."3"; // As of PHP 5.3.0

$class = new  MyClass();
$class ->showConstant();
echo  $class::geet."4"; // As of PHP 5.3.0

//-----------------------------------------------------------------

class MyClass2
{
	public $abc = 'constant value';
	function showConstant()
	{
		$abc = 'hello';
		echo $this->abc;
	}	
}
$classname1 = new MyClass2();
$classname1->showConstant();

?>