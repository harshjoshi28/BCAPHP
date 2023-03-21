<?php
$file="demo.txt";
if(is_writable($file))
{
  echo "file is writeable.";
}
else
{
  echo "file is not writeable";
}
?>