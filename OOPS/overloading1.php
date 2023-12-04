<?php
class  PropertyTest
{
    private  $data = array();
    public   function  __set($name, $value)
    {
        echo  "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public   function  __get($name)
    {
        echo  "Getting '$name'\n";        
        return $this->data[$name];        
    }

    public   function  __isset($name)
    {
        echo  "Is '$name' set?\n";
        return isset($this->data[$name]);
    }
    
    public   function  __unset($name)
    {
        echo  "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

}

echo  "<pre>\n";
$obj =  new  PropertyTest;
$obj->a = 1;
echo  $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));

?>
