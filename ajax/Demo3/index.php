<html>
<body>
<script>
function demo()
{
  var a = new XMLHttpRequest();
  a.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
	{
      document.getElementById("test").innerHTML = this.responseText;
    }
  };
  a.open("GET","test.txt",true);
  a.send();
}
</script>
<p id="test"></p>
<button type="button" onclick="demo()">Geetanjali</button>
</body>
</html>