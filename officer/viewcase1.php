<html>
<head>
  <title>Case file Prisoners  officer</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prison";
$tbl_name="court";

//mysqli_select_db("$db_name")or die("cannot connect");
//$sel= mysql_query("select * from $tbl_name");

$con = mysqli_connect("localhost","root","","prison");

$sql="SELECT * FROM court";
$res=mysqli_query($con,$sql);

echo"<table align='center'  bgcolor='GREEN' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>COURT INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Fie Number</th>
<th width='10%'>Date of trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
</tr>";

      while($row=mysqli_fetch_array ($res))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['National_id']."</td>";
echo  "<td width='7%'>".$row ['File_number']."</td>";
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
			<td align="center"><a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
			<a href="deletecase.php" target="_parent">Delete prisoners <b>|</b></a>
			</td>
		
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