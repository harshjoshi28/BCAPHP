<?php
if(file_exists("demo.txt"))
{
   $filename="demo.txt";
   $file=fopen($filename,"w");
   fwrite($file,"Hello, Geetanjali.");
   fclose($file);
   echo "File Content Changed.";
}
else
{
	echo "file not found.";
}
?>