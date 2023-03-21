<?php
$a=array("demo","test","Alpha","Gema","Delta");
$file=fopen("demo.csv","w");
foreach($a as $b)
{
	fputcsv($file,explode(',',$b));
}
fclose($file);
?>