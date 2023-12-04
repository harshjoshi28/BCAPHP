<?php
class BaseClass
{
	function __construct()
	{
		echo "Base Class Constructer<br>";
	}
}
class SubClass extends BaseClass
{
	function __construct(...$abc)
	{
		parent::__construct();
		echo "SubClass Constructer<br>$abc[1]<br>";
	}
}
class OtherClass extends SubClass
{	
	function __construct(...$abc)
	{
		parent::__construct(...$abc);						
		echo "OtherClass Constructer<br>$abc[0]";
	}
	function __destruct()
	{
			echo "<br>I am done";
	}
	function abcd()
	{
		echo "<br>abcd";
	}
}



$test = new OtherClass("Hello I Came to Disturb You.","Hello I Came to Disturb Again.");
$test->abcd();


?>