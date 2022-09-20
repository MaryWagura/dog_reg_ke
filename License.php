<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$FirstName=$_SESSION['FirstName'];
$IDNumber=$_SESSION['IDNumber'];
   $conn= new mysqli($servername, $username, $password,$dbname);
 
 $result=$conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {
 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $row['IDNumber'];
  
   
   
 }else
 {
 	echo "Failed";
 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>License</title>
    <script type="text/javascript">
        function printlayer(Layer)
        {
            var generator = window.open("");
            var layetext=document.getElementById(Layer);
            generator.document.write(layetext.innerHTML.replace("Print me"));
            generator.document.close();
            generator.print();
            generator.close();
        }
    </script>
</head>
<body>
    <h3>
    <a href="" id="print" onclick="javascript:printlayer('div-id-name')" >Print License </a>
</h3>
<div class="container" id="div-id-name"> </div>
	 <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
<div style="border: 1px solid #d2d2d2; margin-bottom:20px; padding:20px;">
<table border-spacing="0" cellpadding="0" cellspacing="0" style="margin-bottom: 10px; width:100%; font-family: 'Roboto', sans-serif; text-align:center;">
	<thead>
		<tr>
			<td align="center"><img src="coat of arms.jpg" style="height:100px;" />
			<h4><strong>ORIGINAL</strong></h4>

			<h3 style="margin-top:0px; font-weight: 500;  line-height: 1.1; fonts-size:16px;"></h3>
			<strong>THE DOG REGISTRATION KE</strong>

			<p style="margin-bottom:0px;">_____________________________________</p>
			<strong>THE DOMESTIC AND ANIMAL ACT</strong><br />
			<em>(Rule 11(1)(e))</em><br />
			<strong>DOG LICENCE</strong></td>
		</tr>
	</thead>
</table>
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$FirstName=$_SESSION['FirstName'];
$IDNumber=$_SESSION['IDNumber'];
$OwnerID=$_SESSION["OwnerID"];
$_SESSION['DogLicenseNumber'];

$DogLicenseNumber=$_SESSION["DogLicenseNumber"];

   $conn= new mysqli($servername, $username, $password,$dbname);
 $result=$conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {
 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $row['IDNumber'];
    echo "<b>First Name:</b> <b>".$row["FirstName"]."</b><br><br>";
    echo "<b>ID Number: </b> <b>" .$row["IDNumber"]."<br><br></b>";
    $res=$conn->query("SELECT * FROM petdetails where OwnerID ='$OwnerID'") or die("Failed to query DB".mysql_error());
   $row= mysqli_fetch_array($res);
      $_SESSION['DogLicenseNumber'] = $row["DogLicenseNumber"]."<br><br>";
     echo "<b>License Number: </b> <b>" .$row["DogLicenseNumber"]."</b>";
   
     }else
 {
 	echo "Failed";
 }


?>

</body>
</html>
   