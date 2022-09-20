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
    echo $sum." : Fail";
    echo '<script>alert("Please contact the veterinary offices to book another appointment")</script';
    echo '<script>window.location="Profile.php"</script';
}
?>