<?php
class demoSleepWakeup {
    
    public $arrayM=array(1, 2, 3, 4);

    
    public function __sleep() {		
        return array('arrayM');		
    }
	
    public function __wakeup() {		
		echo "array restarted ";
    }
}

$obj = new demoSleepWakeup();
$serializedStr = serialize($obj);
echo "<pre>";
var_dump($serializedStr);
var_dump(unserialize($serializedStr));
echo "</pre>";
?>