<?php

 session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";

if (isset($_POST['submit'])) {
$FirstName=$_POST['FirstName'];
$IDNumber=$_POST ['IDNumber'];

   $dbname= new mysqli($servername, $username, $password,$dbname);
 
 $result=$dbname->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB");
 $row= mysqli_fetch_array($result);

 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {

   $IDNumber=trim($_POST["IDNumber"]);

 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $IDNumber;
 	$_SESSION["OwnerID"] = $row['IDNumber'];
	 if ($_SESSION["IDNumber"]=$row['IDNumber'])
	 {
    echo "Login Successful Welcome ".$row['FirstName'] ;
    header("Refresh: 1; url=Profile.php");
 
}else
{
	echo "Login Failed. The username does not exist";
	header("Refresh: 1; url=Login.php");

}
 }
 ?>

<?php

 $servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$FirstName=$_POST['FirstName'];
$IDNumber=$_POST ['IDNumber'];

$conn= new mysqli($servername, $username, $password,$dbname);
     $result=$conn->query("SELECT * FROM admindetails where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB");
 $row= mysqli_fetch_array($result);

 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {

   $IDNumber=trim($_POST["IDNumber"]);

 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $IDNumber;
 	$_SESSION["OwnerID"] = $row['IDNumber'];
 	if ($_SESSION["IDNumber"]='44556677')
 	{
		echo "Login Successful Welcome ".$row['FirstName'] ;
 
		header("Refresh: 1; url=Admin.php");
   
 	}
	 else
	 {
		 echo "Login Failed. The username does not exist";
		 header("Refresh: 1; url=Login.php");
	
	 }
}


?>
<?php
 $servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$FirstName=$_POST['FirstName'];
$IDNumber=$_POST ['IDNumber'];
 $conn= new mysqli($servername, $username, $password,$dbname);
 
     $result=$conn->query("SELECT * FROM vetdetails where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB");
 $row= mysqli_fetch_array($result);

 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {

   $IDNumber=trim($_POST["IDNumber"]);

 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $IDNumber;
 	$_SESSION["OwnerID"] = $row['IDNumber'];
 	if ($_SESSION["IDNumber"]='123456')
 	{   
		echo "Login Successful Welcome ".$row['FirstName'] ;

 		 header("Refresh: 1; url=VetOfficer.php");
   
 	}
	 else
	 {
		 echo "Login Failed. The username does not exist";
		 header("Refresh: 1; url=Login.php");
	
	 }
     
 }
}



?>

