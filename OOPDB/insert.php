<?php

$con = new mysqli("localhost","root","","test");

if(isset($_REQUEST['submit']))
{
	if(($_REQUEST['nm'] == "") ||($_REQUEST['email'] == "") || ($_REQUEST['cno'] == "") )
	{
		echo "Fill all Field.";
	}
	else
	{
		$nm = $_REQUEST['nm'];
		$email = $_REQUEST['email'];
		$cno = $_REQUEST['cno'];
		$sql = "insert into `demo`(`nm`,`email`,`cno`) values('$nm','$email','$cno')";
		if($con->query($sql) === TRUE)
		{
			echo "Inserted.";
		}
		else
		{
			echo "Not Inserted.";
		}
	}
}
?>