<?php 
spl_autoload_register(function ($class_name){
	include "default/$class_name" . '.php';
});
 new constructertest1();
?>