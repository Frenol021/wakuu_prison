<html>
<head>
  <title>COURT CASE VIEW  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='darkgrey' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prison";
$tbl_name="court";

$con = mysqli_connect("localhost","root","","prison");


$sql="SELECT * FROM transfer";
$res=mysqli_query($con,$sql);

echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>COURT CASE</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='10%'>Date of Trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>

</tr>";

   while($row=mysqli_fetch_array ($res))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='10%'>".$row ['File_number']."</td>";
echo  "<td width='10%'>".$row ['Dateoftrial']."</td>";
echo  "<td width='10%'>".$row ['Sentence']. "</td>";
echo  "<td width='10%'>".$row ['Location']."</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="deletecourt.php" target="_parent">Delete <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
					&copy; 2022 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					WAKUU PRISON SYSTEM
            </td>
          </tr>
	</table>
</body>
</head>
</html>