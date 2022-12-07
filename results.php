<!DOCTYPE html>
<html lang="en">
<head>
  <title>Results View</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
        body{
        margin: 0px;
        border: 0px;
          background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq7ck7sTzC7wPS7VbcGXDzpQH5pB4njWvKN7Bw2pRHpLkpexu58Q&s");
    }
    #header
    {
        width: 100%;
        height: 120px;
        background:black;
        color: white;

    }
    
    #data
    {
        height: 700px;
        color: black;
        font-size: 25px;
    }
   
    ul li
    {
         padding: 20px;
         border-bottom: 2px solid grey;
    }
    ul li:hover
    {
        background:#d32f2f;
        color: white;
    }
   
        table.striped-columns tbody td:nth-of-type(even),
table.striped-columns th:nth-of-type(even){
    background: rgb(235, 227, 209);
}
table.border {
    border-collapse: collapse;
    border-spacing: 0;
}
table.border td,
table.border th {
    border: 1px solid grey;
    padding: 3px;
}
   
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body  style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <img style="height:30% ;width: 70%;" src="Admin.jpeg" alt="AdminLogo" id="AdminLogo">
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="VetOfficer.php" class="w3-bar-item w3-button">Home</a>
    <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
   
  
</nav>



<!-- !PAGE CONTENT! -->
<div style="margin-left:250px">


      <h3><b>THE DOG REGISTRATION KE</b></h3>
   
    <div style="margin-left: 30px;" class="col-sm-9">
      <form action="ResultControl.php" method="post">
<p>Enter The ID number below to get results</p>
ID Number: <input type="text" name="OwnerID" required>
 <p></p>
 <input  type="submit" value="Submit">
 </form>

<?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
// Create connection
$conn= new mysqli($servername, $username, $password,$dbname);

   $OwnerID = $_POST['OwnerID'];
$result= mysqli_query($conn,"SELECT enthusiasm,walk,vaccine,exercise,trained,interacts,healthy,active FROM inspection WHERE OwnerID = '$OwnerID' ");
   
    $value=array();
 if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $value[]=$row;
        }
           }
   
    foreach ($value as $data ) {
      $sum = array_sum($data) ;
    }
    
   if($sum>=30){
        echo $sum." : Pass";
        echo '<script>alert("The Dog Owner passed the Inpection Test!")</script>';
        echo'<script>window.location="VetOfficer.php"</script>';
    }else{
    echo $sum;
    echo '<script>alert("The Dog Owner Failed the Inspection Test")</script';
    echo '<script>window.location="Profile.php"</script';
}
?>

    </div>

</div>
  
</body>
</html>