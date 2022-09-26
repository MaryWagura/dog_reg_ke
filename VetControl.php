<?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";


$conn= new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);

   } 

 $OwnerID=$_POST["OwnerID"];
 $result=$conn->query("SELECT * FROM petdetails where OwnerID ='$OwnerID'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 

 if ($row['OwnerID']==$OwnerID) {

   $OwnerID=trim($_POST["OwnerID"]);
   echo "User Found";
}

$OwnerID=$_POST['OwnerID'];
$enthusiasm=$_POST['enthusiasm'];
$walk=$_POST['walk'];
$vaccine=$_POST['vaccine'];
$exercise=$_POST['exercise'];
$trained=$_POST['trained'];
$interacts=$_POST['interacts'];
$healthy=$_POST['healthy'];
$active=$_POST['active'];

$sql = "INSERT INTO inspection (OwnerID, enthusiasm, walk, vaccine
, exercise, trained, interacts, healthy, active)
VALUES ('$OwnerID', '$enthusiasm', '$walk', '$vaccine', '$exercise','$trained','$interacts','$healthy','$active')";
  if ($conn->query($sql) === TRUE) {
    header('Location:VetOfficer.php');
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 $insert = $conn->query("SELECT OwnerID,enthusiasm,walk,vaccine,exercise,trained,interacts,healthy,active FROM inspection
");
if ($row = mysqli_fetch_array($insert) == TRUE) {
  $results = $row[1];
  
  echo "$results<br>";
}
?>