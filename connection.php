<?php
$host="localhost";
$user="root";
$pass="";
$db="corephp";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo "Not Connected With Database";
}
?>
