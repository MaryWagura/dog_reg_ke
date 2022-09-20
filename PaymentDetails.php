 <?php
 session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$OwnerID=$_SESSION["OwnerID"];

  $connection= new mysqli($servername, $username, $password,$dbname);
 $res=$connection->query("SELECT DogLicenseNumber FROM petdetails where OwnerID='$OwnerID' ") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($res);
 $DogLicenseNumber = $row['DogLicenseNumber'];
 $_SESSION['DogLicenseNumber'] = $DogLicenseNumber;
 

$servername = "localhost";
 $username = "root1";
 $password = "password";
 $dbname = "dogregistrationke";
 $FirstName=$_SESSION['FirstName'];
 $IDNumber=$_SESSION['IDNumber'];

 $DogLicenseNumber=$_SESSION["DogLicenseNumber"];

 $LicenseNumber=$_SESSION["LicenseNumber"];


   #$conn= new mysqli($servername, $username, $password,$dbname);
    $result=$connection->query("SELECT LicenseNumber FROM paymentdetials where LicenseNumber='$DogLicenseNumber' ") or die("Failed to query DB".mysql_error());
    if (mysqli_num_rows($result) > 0) {
    	echo 'License is valid';
    }else{
    	header("Location: Payment.php");
    }
   
 $row= mysqli_fetch_array($result);

 // if ($LicenseNumber==$LicenseNumber) {
 // 	echo "License is valid!";
 // }
 // else
 // {
 // 	header("Location: Payment.php");
 // }
 
 ?>
