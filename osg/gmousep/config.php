<?php
/*Connect to Database*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
else
{
	echo("");
}
?>