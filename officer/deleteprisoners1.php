<html>
<head>
  <title>Delete prisoners</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1250' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php
ob_start();
//$link=mysql_connect("localhost","root","");
//mysql_select_db("prison",$link);
//$result=mysql_query("select * from registration");
$link = mysqli_connect("localhost","root","","prison");

$sql="SELECT * FROM registration";
$res=mysqli_query($link,$sql);

?>


<?php

//To delete:
if(isset($_POST["delete"])){
$id=$_POST["id"];
$delete=mysqli_query($id,"delete from registration where id='$_POST[id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteprisoners1.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='GREEN' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='#green'>
<th>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>Date in</th>
<th width='10%'>File Number</th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($res)){

print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[Full_Name]</td>
<td>$row[DOB]</td>
<td>$row[Address]</td>
<td>$row[County]</td>
<td>$row[Gender]</td>
<td>$row[Education]</td>
<td>$row[Marital]</td>
<td>$row[Offence]</td>
<td>$row[Date_in]</td>
<td>$row[File_num]</td>

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
		  <td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Panel Panel <b>|</b></a>
			<a href="viewprisoners1.php" target="_parent">View <b>|</b></a>
			</td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>
					&copy; 2022 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					WAKUU PRISON SYSTEM
            </td>
          </tr>
	</table>
</body>
</head>
</html>

