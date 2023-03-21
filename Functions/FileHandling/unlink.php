<?php
$file="demo.txt";
if(!unlink($file))
{
	echo "File Delete.";
}
else
{
	echo "File Not Delete.";
}
?>