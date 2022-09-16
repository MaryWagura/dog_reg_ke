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
$Name=$_POST['Name'];
$Age=$_POST ['Age'];
$Color=$_POST ['Color'];
$OwnerID=$_POST['OwnerID'];
$Gender=$_POST ['gender'];
$Breed=$_POST['Breed'];
$Vaccines=$_POST ['Rabbis'];
$Vaccines=$_POST ['Parvovirus'];
$Vaccines=$_POST['Dewormer'];
$DogImage=$_POST['image'];


 
 $sql= "INSERT INTO petdetails(Name, Age, Color,OwnerID, Gender, Breed, Vaccines, DogImage )
VALUES ('$Name', '$Age', '$Color','$OwnerID', '$Gender','$Breed','$Vaccines','$DogImage')";

        if ($dbname->query($sql) === TRUE) {
    echo "Records entered successfully";
 header('Location:Homepage.php');
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}
$insert= $dbname->query("SELECT Name, Age, Color,OwnerID, Gender, Breed, Vaccines, DogImage FROM petdetails");


?>
