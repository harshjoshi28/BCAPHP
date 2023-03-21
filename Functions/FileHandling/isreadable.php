<?php
$file = "test.txt";
if(is_readable($file))
  {
  echo ("file is readable");
  }
else
  {
  echo ("file is not readable");
  }
?>