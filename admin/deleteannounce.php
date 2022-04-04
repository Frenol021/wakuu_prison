<html>
<head>
  <title>Delete Announce Details</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='darkgrey' width='1200' cellpadding='8' cellspacing='0' height='200'>
         
         
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php
ob_start();
$link = mysqli_connect("localhost","root","","prison");

$sql="SELECT * FROM announce";
$res=mysqli_query($link,$sql);

//$link=mysql_connect("localhost","root","");
//mysqli_select_db("prison",$link);
//$result=mysql_query("select * from announce");
?>


<?php
//To delete:
if(isset($_POST["delete"])){
$Id=$_POST["Id"];
$delete=mysql_query("delete from announce where Id='$_POST[Id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteannounce.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteleave.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE ANNOUNCEMENT DETAILS</b></caption>
<tr bgcolor='#CCCCCC'>
<th>To.</th>
<th>Id.</th>
<th>Subject</th>
<th>Message</th>
</tr>";
$i=1;
while($row=mysqli_fetch_array($res)){
print "<form method=POST>";
print"<tr bgcolor='white'>

<td>$i<input type=\"hidden\" name=\"Id\" value=\"$row[Id]\"></td>
<td>$row[to]</td>

<td>$row[subject]</td>
<td>$row[message]</td>


<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="viewannounce.php" target="_parent">View announce<b>|</b></a>
			</td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>
					&copy;2022
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					WAKUU PRISON SYSTEM
            </td>
          </tr>
	</table>
</body>
</head>
</html>


