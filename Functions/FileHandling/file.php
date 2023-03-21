<?php
    $filename="demo.txt";
    $file=fopen($filename,"r");
    $filesize=filesize($filename);
    $filetext=fread($file,$filesize);
	//$file2=fwrite($file,"Demo");
    fclose($file);
    echo "$filetext.<br>";
	echo $filesize;
?>