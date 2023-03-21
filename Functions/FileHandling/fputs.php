<?php
$file = fopen("demo.txt","w");
echo fputs($file,"Hello World");
fclose($file);
?>