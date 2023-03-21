<?php
$con = mysqli_connect("localhost","root","","test");

	if(isset($_FILES['photo']))
	{
      $errors= array();
      $file_name = $_FILES['photo']['name'];
      $file_size =$_FILES['photo']['size'];
      $file_tmp =$_FILES['photo']['tmp_name'];
      $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
	  move_uploaded_file($file_tmp,"uploads/".$file_name);   
   }
   
   $img_nm= $_FILES['photo']['name'];
   
$ins = "insert into faculty(photo) values ('".$img_nm."')";
$a = mysqli_query($con,$ins);
if($a)
{
	header("location:form.php");
}
else
{
	echo "record not inserted";
}
?>