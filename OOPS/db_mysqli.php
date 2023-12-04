<?php	
class db_conn
{
	function __construct()
	{
		$con = mysqli_connect("localhost","root","","test")or die(mysql_error());
		//mysql_select_db("test")or die(mysql_error());
			$sql = "select * from `users`";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			echo "<center>";
			
			while($row = mysqli_fetch_array($res))
			{
				echo "<h2>".$row['id'];
				echo "<h2>".$row['name'];
				echo "<h2>".$row['email'];
				echo "<h2>".$row['address'];
			}
			
		}
	}	
}
$database = new db_conn();
?>
