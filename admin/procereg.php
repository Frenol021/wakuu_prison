<?php
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name="prison";
$tbl_name="transfer";

$con = mysqli_connect("localhost","root","","prison");


$sql="SELECT * FROM transfer";
$res=mysqli_query($con,$sql);

//we specify here the Database name we are using
//mysqli_select_db('prison');
$Nid=$_POST['Nid'];
$Fname=$_POST['Fname'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$county=$_POST['county'];
$Gender=$_POST['Gender'];
$education=$_POST['education'];
$status=$_POST['status'];
$offence=$_POST['offence'];
$di=$_POST['di'];
$Filenum=$_POST['Filenum'];
//Protecting form submitting an empty data

if (!$Nid || !$Fname  || !$dob  || !$address || !$county  || !$Gender || !$education || !$status  || !$offence || !$di || !$Filenum )
	{
	echo'<body bgcolor="green">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='registration.php'>"."  ". "here"  . "</a>"  . "  " . "to Prisoners registration"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

//It wiil insert a row to our prisoners`
$sql = "INSERT INTO `prison`.`registration` (`id`,`Full_Name`, `DOB`, `Address`, `County`,  `Gender`, `Education`, `Marital`, `Offence`, `Date_in`, `File_num`) 
	VALUES ('{$Nid}', '{$Fname}', '{$dob}', '{$address}', '{$county}', '{$Gender}', '{$education}', '{$status}', '{$offence}','{$di}', '{$Filenum}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($sql, $con);
if(! $retval )
{
  die('The data is already: ' . mysqli_error());
 
}

?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "registration.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>