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

if(isset($_POST['submit']))
{
$To=$_POST['To'];
$id=$_POST['id'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];
//It wiil insert a row to our leave details`
$sql = "INSERT INTO `prison`.`announce` (`to`,`Id`,`subject`,`message`) 
	     VALUES ('{$To}','{$id}', '{$Subject}', '{$Message}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query( $sql, $con );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error());
}}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "announce.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>