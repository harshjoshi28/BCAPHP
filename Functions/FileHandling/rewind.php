<?php
$file = fopen("test.txt","r");
echo rewind($file);
//echo fgets($file);
fclose($file);
?>