
<!DOCTYPE html>
<html>
<head>

	<title>YOU ARE LOGGED OUT</title>
	<style>
		body{
			background-image: url();
		}
	</style>
</head>

<?php 
	
	session_start();
	session_destroy();
	header("location:Login.php");


?>
</html>