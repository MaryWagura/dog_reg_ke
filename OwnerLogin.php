<?php
session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
if ($_SESSION{"ownerinformation"}==true) 
{
	echo "Welcome"."".$_SESSION["ownerinformation"];

}
else
{
	header('location:Profile.php');
}

?>
<a href="Logout.php">
