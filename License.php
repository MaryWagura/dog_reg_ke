<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$FirstName = $_SESSION['FirstName'];
$IDNumber = $_SESSION['IDNumber'];
$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB" . mysqli_error($conn));
$rows = mysqli_fetch_array($result);
if ($rows['FirstName'] == $FirstName && $rows['IDNumber'] == $IDNumber) {
    $_SESSION["FirstName"] = $rows['FirstName'];

    $_SESSION["IDNumber"] = $rows['IDNumber'];
} else {
    echo "Failed";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dog License</title>
  
    <script type="text/javascript">
        function printlayer(Layer) {
            var generator = window.open("");
            var layetext = document.getElementById(Layer);
            generator.document.write(layetext.innerHTML.replace("Print me"));
            generator.document.close();
            generator.print();
            generator.close();
        }
    </script>
</head>

<body>
    <h3>
        <a href="" id="print" onclick="javascript:printlayer('div-id-name')">Print License </a>
    </h3>
    <div class="container" id="div-id-name"> 
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
    <div style="border: 1px solid #d2d2d2; margin-bottom:20px; padding:20px;">
        <table border-spacing="0" cellpadding="0" cellspacing="0" style="margin-bottom: 10px; width:100%; font-family: 'Roboto', sans-serif; text-align:center;">
            <thead>
                <tr>
                    <td align="center"><img src="Coatofarms.jpg" style="height:100px;" />
                        <h4><strong>ORIGINAL</strong></h4>

                        <h3 style="margin-top:0px; font-weight: 500;  line-height: 1.1; fonts-size:16px;"></h3>
                        <strong>THE DOG REGISTRATION KE</strong>

                        <p style="margin-bottom:0px;">_____________________________________</p>
                        <strong>THE DOMESTIC AND ANIMAL ACT</strong><br><br>
                        <em>(Rule 11(1)(e))</em><br><br>
                        <strong>DOG LICENCE</strong><br><br>
                    </td>
                </tr>
            </thead>
            </div>
        </table>
        
        <?php

        $servername = "localhost";
        $username = "root1";
        $password = "password";
        $dbname = "dogregistrationke";
        $FirstName = $_SESSION['FirstName'];
        $IDNumber = $_SESSION['IDNumber'];
        $OwnerID = $_SESSION["OwnerID"];
        $_SESSION['DogLicenseNumber'];

        $DogLicenseNumber = $_SESSION["DogLicenseNumber"];

        $res = $conn->query("SELECT * FROM petdetails where OwnerID ='$OwnerID'") or die("Failed to query DB" . mysqli_error($conn));
        $rows = mysqli_fetch_array($res);
        $_SESSION['DogLicenseNumber'] = $rows["DogLicenseNumber"] . "<br><br>";
        echo "<b>License Number:KEN </b> <b>" . $rows["DogLicenseNumber"] . "</b><br><br>";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $result = $conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB" . mysqli_error($conn));
        $rows = mysqli_fetch_array($result);
        if ($rows['FirstName'] == $FirstName && $rows['IDNumber'] == $IDNumber) {
            $_SESSION["FirstName"] = $rows['FirstName'];
            $_SESSION["IDNumber"] = $rows['IDNumber'];
            echo "<i>The above license number is hereby awarded to </i><b>" . $rows["FirstName"] . "&#160" .  $rows['LastName']. "</b><i> of the National Identification Number </i><b> " . $rows["IDNumber"];
        } else {
            echo "Failed";
        }


        ?>

</body>

</html>