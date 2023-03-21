<html>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">

    <h1>Add Staff Details</h1>
    <hr>

    <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="qualification"><b>Qualification</b></label>
    <input type="text" placeholder="Enter Qualification" name="qualification" id="qualification" required>

    <label for="designation"><b>Designation:</b></label>
    <input type="text" placeholder="Enter Designation" name="designation" id="designation" required>
	<br>
	<label for="description"><b>Research Area:</b></label>
    <textarea class="txtara" rows="10" cols="174" name="research" id="research"></textarea>
	
	<br><label for="photo"><b>Photo:</b></label>
    <input type="file" placeholder="Upload Photo" name="photo" id="photo" required>
	<br>
    <button type="submit" class="registerbtn">Submit</button>
 </form>
</body>
</html>