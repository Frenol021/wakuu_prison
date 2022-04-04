<html>
<head>
  <title>View Announce Details by Officer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='green' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prison";
$tbl_name="announce";


$con = mysqli_connect("localhost","root","","prison");


$sql="SELECT * FROM announce";
$res=mysqli_query($con,$sql);

echo"<table align='center' bgcolor='black' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>ANNOUNCE  DETAILS</h3></caption>
<tr bgcolor='green'>
<th width='3%'>To</th>
<th width='10%'>Id</th>
<th width='15%'>Subject</th>
<th width='10%'>Message</th>
</tr>";

     while($row=mysqli_fetch_array ($res))
{
echo "<tr bgcolor='white'>";
echo  "<td width='3%'>".$row ['to']."</td>";
echo  "<td width='10%'>".$row ['Id']."</td>";
echo  "<td width='10%'>".$row ['subject']."</td>";
echo  "<td width='10%'>".$row ['message']. "</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
			<a href="deleteannounce1.php" target="_parent">Delete <b>|</b></a>
			</td>
		
		
          </tr>
          <tr>
            <td align='center' bgcolor='red' height='1'>
					&copy; 2022 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					WAKUU PRISON SYSTEM By Antony, Dennis, Jean and John.
            </td>
          </tr>
	</table>
</body>
</head>
</htm