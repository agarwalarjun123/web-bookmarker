<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
include("../../../htconfig/dbconfig.php");
 header("Access-Control-Allow-Origin: *");

?>
<div  id="d1">
<?php
session_start();
//print_r($_SESSION);
$id=$_SESSION["ID"];
$user=$_SESSION["username"];
$pass=$_SESSION["password"];

$query="select * from websites where ID=".$id.";";

$z=mysqli_query($dbConnected,$query);
if(!empty($z)){
echo "<h3>Your Saved Webpages</h3>";
$i=1;
while($row=mysqli_fetch_array($z,MYSQLI_NUM))
{
	echo "$i)<a style='text-decoration:none;' href='$row[1]'>$row[1]</a><br>";
	$i++;


}

}
else
{
	header("Location:index.htm");
}
 
?>
</div>
<a class='btn btn-success' id="f2" href="add.htm">ADD BOOKMARK</a>
<a class='btn btn-success'  href='index.htm'>LOGOUT</a>
