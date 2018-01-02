<?php
header("Access-Control-Allow-Origin: *");

include("../../../htconfig/dbconfig.php");
 //include("form.htm");

session_start();

$user=$_GET["user"];
$pass=$_GET["pass"];

 //validation of username and password
$validate="select * from user where USERNAME='".$user."' and PASSWORD='".$pass."';";
$m=mysqli_query($dbConnected,$validate);
echo $validate;
$z=mysqli_fetch_array($m,MYSQLI_NUM);
if(!empty($z)){

	$_SESSION["username"]=$user;
	$_SESSION["password"]=$pass;
	$_SESSION["ID"]=$z[0];
	//setcookie("id",$z[0],time()+300,"/");
	//echo $_SESSION["id"];
	//print_r($_SESSION);
	header("Location:details.php");




}
else 
{
	//echo "dd";
	header("Location:index.htm");
}
?>

