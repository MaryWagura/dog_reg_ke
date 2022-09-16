<?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
// Create connection
$dbname= new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($dbname->connect_error) {
    die("Connection failed: " . $dbname->connect_error);
} 
$FirstName=$_POST['Firstname'];
$LastName=$_POST ['Lastname'];
$IDNumber=$_POST ['idnumber'];
$PhoneNumber=$_POST['phonenumber'];
$Email=$_POST ['email'];
$Gender=$_POST ['gender'];
$Location=$_POST ['Location'];




    $sql = "INSERT INTO ownerinformation(FirstName, LastName, IDNumber, PhoneNumber, Email,  Gender, Location)
VALUES ('$FirstName', '$LastName', '$IDNumber', '$PhoneNumber','$Email','$Gender','$Location')";

        if ($dbname->query($sql) === TRUE) {
    echo "Records entered successfully";
 header('Location:Registerpet.php');
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}
$insert= $dbname->query("SELECT FirstName, LastName, IDNumber, PhoneNumber, Email,  Gender, Location FROM ownerinformation");
?>




