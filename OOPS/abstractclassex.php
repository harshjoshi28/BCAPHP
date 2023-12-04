<?php
abstract class  AbstractClass {
	
    // Force Extending class  to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public   function  printOut() {
        print $this->getValue() . "<br>";
    }
	
	public $abc = 'sdsd';
	const abcd = 'sdsd';
}

class  ConcreteClass1  extends  AbstractClass {
    protected   function  getValue() {
        return "ConcreteClass 1";
    }

    public   function  prefixValue($prefix) {
        return "{$prefix}ConcreteClass 1";
    }
}

class  ConcreteClass2  extends  AbstractClass {
    public   function  getValue() {
        return "ConcreteClass 2";
    }

    public   function  prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 =  new  ConcreteClass1;
$class1->printOut();
echo  $class1->prefixValue('FOO_') ."<br>";

$class2 =  new  ConcreteClass2;
$class2->printOut();
echo  $class2->prefixValue('FOO_') ."<br>";
?>