<?php
$file=fopen("test.txt","r");
echo fgetc($file);
fclose($file);
?>