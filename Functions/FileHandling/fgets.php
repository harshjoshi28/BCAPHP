<?php
$file=fopen("test.txt","r");
echo fgets($file);
fclose($file);
?>