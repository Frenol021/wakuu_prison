<html>
<head>
<title>Court form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="0" bgcolor="#FFFFFF" align="center" width="54%">
<tr bgcolor="#FF0000">
<td align="center">
<font size="5">
<a href="userpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>
<form action="processcourt.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nationalid" placeholder="Enter your national id No" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum" placeholder="Enter file Number" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date Of Trial:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" placeholder="Enter the Date of Trial" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Sentence:</b></td>
        <td> <select name="sentence">
		 <option>2 Weeks</option>
        <option>1 to 3 Months</option>
		<option>1year</option>
		<option>5 to 1o Years</option>
        <option>15 Above</option>
		<option>Life Sentence</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Court Location:</b></td>
        <td> <select name="location">
		 <option>Milimani Court</option>
        <option>Nyamage Court</option>
		<option>Jogoo Court</option>
		<option>Kwale Court</option>
        <option>Kilgoris Court</option>
		<option>Shanzu Court</option></td></tr>

      <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>
<td height="21" colspan="2" align="center" bgcolor="#FF0000">&copy; WAKUU PRISON SYSTEM By Antony, Dennis, Jean and John.</td>
</tr>
</table>
</body>
</html>