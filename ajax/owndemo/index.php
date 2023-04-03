<html>
<body>
<script>
function demo()
{
	var a= new XMLHttpRequest();
	a.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById("txtp").innerHTML = this.responseText;
		}
	};
	a.open("GET","test.txt",true);
	a.send();
}
</script>
<form>
<button type="button" onclick="demo()">Click</button>
<p id="txtp"></p>
</form>   
</body>
</html>