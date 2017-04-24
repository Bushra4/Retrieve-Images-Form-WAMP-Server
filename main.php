<html>
<title>Student images </title>
<body>
<form enctype="multipart/form-data" action="storeinfo.php" method="POST">
<table border=0 align= center bgcolor=black width=100%>
<tr><td colspan=2><h2>&nbsp</h2></td></tr>
</table>

<table border=0 align=center bgcolor=grey>
<tr><td colspan=2><h2>Enter Student Images</h2></td></tr>
<tr>
<td>Name</td><td><input type=varchar name="name"></td>
</tr>
<tr>
<td>Image</td><td><input type=file name="image"></td>
</tr>
<tr>
<td height="56"></td><td><input type=submit name="submit" value="Save"></td>
</tr>
</table>
</form>
</body>
</html>