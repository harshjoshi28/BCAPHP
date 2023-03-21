<?php
$file = fopen("test.txt","r");
$data=fgets($file,2);
echo ftell($file);
fclose($file);
?>