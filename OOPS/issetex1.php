<?php
class Test
{
	//public $prop;
	function __set($name,$value)
	{
		echo "<br>Your $name is $value";
		$name = $value; 
	}
	
	public function __isset($name) {		
        echo "Non-existent property is '$name'";
		return isset($name);
    }
}

$obj = new Test;
var_dump(isset($obj->prop)); // prints "Non-existent property 'prop'" and return false
?>