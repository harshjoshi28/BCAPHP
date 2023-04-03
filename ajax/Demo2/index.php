<html>
<head>
<script>
function showUser(str)
{
    if (str == "")
	{
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
	else
	{ 
		if (window.XMLHttpRequest)
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            a = new XMLHttpRequest();
        }
		
		a.onreadystatechange = function()
		{
			if (this.readyState == 4 && this.status == 200)
			{
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		};
        a.open("GET","detail.php?q="+str,true);
        a.send();
    }
}
</script>
</head>
<body>
<form method="GET" name="frm1">
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="1">Harsh Joshi</option>
  <option value="2">Prakash Gohil</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
</body>
</html>