<html>
<head>
<script>
function demo(str)
{
    if(str.length==0)
	{ 
        document.getElementById("txtHint").value = "";       
    }
	else
	{
        var a = new XMLHttpRequest();
        a.onreadystatechange = function()
		{
            if (this.readyState == 4 && this.status == 200)
			{
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
		// start method for ajax.
        a.open("GET", "user.php?q=" + str, true);
        a.send();
    }
}
</script>
</head>
<body>
<form> 
Name:<input type="text" onkeyup="demo(this.value)">
</form>
Hint: <span id="txtHint"></span>
</body>
</html>