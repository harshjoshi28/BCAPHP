<?php 
error_reporting(0);
class visible_properties
{
	public $public = 'Admin Staff';
	private $private = 'private';
	protected $protected = 'protected';	
	function __construct()	
	{
		echo $this->private . ' inside class <br>';
		echo $this->protected  . ' inside class <br>';
	}
	protected function testing()
	{
		echo "<br>For Testing<br>";
	}
}

class visible_properties2 extends visible_properties
{
	
	function __construct()
	{
		
		parent::__construct();
		echo $this->private . ' inside class2 <br>';
		echo $this->protected  . ' inside class2 <br>';
		parent::testing();
	}
	
}

$test = new visible_properties2();
echo $test->public . ' Outside Class ';
$test->testing();
//echo $test->private;
//echo $test->protected;
?>