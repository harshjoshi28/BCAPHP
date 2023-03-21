<?php
//ob_start();
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
   
$ins = "insert into faculty(name,qualification,designation,research,photo) values ('".$_POST['name']."','".$_POST['qualification']."','".$_POST['designation']."','".$_POST['research']."','".$img_nm."')";
$a = mysqli_query($con,$ins);
if($a)
{
	header("location:form.php");
	echo "record inserted.";
}
else
{
	echo "record not inserted";
}
?>