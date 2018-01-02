
<?php
session_start();
include("../../../htconfig/dbconfig.php");
$url=$_GET["url"];

$Id=$_SESSION["ID"];
$query="insert into websites(ID,Website)values('$Id','$url');";
$a=mysqli_query($dbConnected,$query);
if($a){
header("Location:details.php");
}
else {
	
header("Location:form.htm");
	}



?>
