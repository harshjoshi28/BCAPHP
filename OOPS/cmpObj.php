<?php
 class BOX
 {
	 public $name = "Hello";
 }
 
 $box = new BOX();
 //$box->name= "Hello";
 
 $box_ref = $box;
 //DUPLICATE
 //$box_ref->name="Sorry";
 
 $box_clone = clone $box;
 //$box_clone->name="NO";
 
 $box_change = clone $box;
 //$box_change->name="Hello";
 
 $another_box = new BOX();
 //$another_box->name="New";
 
 echo $box === $box_ref?'true<br>':'false<br>';
 echo $box === $box_clone?'true<br>':'false<br>';
 echo $box === $box_change?'true<br>':'false<br>';
 echo $box === $another_box?'true<br>':'false<br>';
 
 
?>
