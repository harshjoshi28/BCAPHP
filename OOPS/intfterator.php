<?php
class tIterator_array implements Iterator {
  private $myArray;

  public function __construct( $givenArray ) {
    $this->myArray = $givenArray;
  }
  function rewind() {
	var_export(__METHOD__);
    return reset($this->myArray);
  }
  function current() {
	  var_export(__METHOD__);
    return current($this->myArray);
  }
  function key() {
	  var_export(__METHOD__);
    return key($this->myArray);
  }
  function next() {
	  var_export(__METHOD__);
    return next($this->myArray);
  }
  function valid() {
	  var_export(__METHOD__);
    return key($this->myArray) !== null;
  }
}
$it = new tIterator_array(['Hello','I','AM','STUDENT']);
echo "<pre>";
foreach($it as $key => $value) {
    var_export($key, $value);
    echo "<br>";
}
?>