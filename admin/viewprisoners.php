<html>
<head>
  <title>View Prisoners  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='green' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prison";
$tbl_name="registration";


$con = mysqli_connect("localhost","root","","prison");

$sql="SELECT * FROM registration";
$res=mysqli_query($con,$sql);

echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='red'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>Date in</th>
<th width='10%'>File Number</th>
</tr>";

   while($row=mysqli_fetch_array ($res))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='10%'>".$row ['DOB']."</td>";
echo  "<td width='10%'>".$row ['Address']. "</td>";
echo  "<td width='10%'>".$row ['County']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='10%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";
echo  "<td width='10%'>".$row ['Date_in']."</td>";
echo  "<td width='10%'>".$row ['File_num']."</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="deleteprisoners.php" target="_parent">Delete prisoners <b>|</b></a>
		</td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='RED' height='1'>
					&copy; 2022
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					WAKUU PRISON SYSTEM
            </td>
          </tr>
	</table>
</body>
</head>
</html>