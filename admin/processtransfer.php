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

$Nid=$_POST['Nid'];
$Filenum=$_POST['Filenum'];
$From=$_POST['From'];
$To=$_POST['To'];
$dot=$_POST['dot'];

//Protecting form submitting an empty data

if (!$Nid || !$Filenum || !$From  || !$To || !$dot )
	{
	echo'<body bgcolor="green">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='transfer.php'>"."  ". "here"  . "</a>"  . "  " . "to Prisoners Transfer"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}
//It wiil insert a row to our recruit details`
$sql = "INSERT INTO `prison`.`transfer` (`National_id`,`File_num`, `From_prison`,`To_prison`,`Dateoftransfer`) 
	VALUES ('{$Nid}', '{$Filenum}', '{$From}', '{$To}', '{$dot}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "transfer.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>