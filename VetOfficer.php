<?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<title>Vet Officer Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        margin: 0px;
        border: 0px;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq7ck7sTzC7wPS7VbcGXDzpQH5pB4njWvKN7Bw2pRHpLkpexu58Q&s");
    }

    #header {
        width: 100%;
        height: 120px;
        background: black;
        color: white;

    }

    #data {
        height: 700px;
        color: black;
        font-size: 25px;
    }

    ul li {
        padding: 20px;
        border-bottom: 2px solid grey;
    }

    ul li:hover {
        background: #d32f2f;
        color: white;
    }

    table.striped-columns tbody td:nth-of-type(even),
    table.striped-columns th:nth-of-type(even) {
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

    .w3-sidebar a {
        font-family: "Roboto", sans-serif
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .w3-wide {
        font-family: "Montserrat", sans-serif;
    }
</style>

<body style="max-width:1200px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <img style="height:30% ;width: 70%;" src="Admin.jpeg" alt="AdminLogo" id="AdminLogo">
        </div>
        <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
            <a href="results.php" class="w3-bar-item w3-button">View results</a>
            <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>


    </nav>


    <div style="margin-left:250px">


        <h3><b>THE DOG REGISTRATION KE</b></h3>

        <form action="VetControl.php" method="post">
            <center>
                <h3>Hello Vet Officer</h3>
            </center>
            Enter Dog owner ID Number: <input type="text" name="OwnerID" required>
            <p> </p>

            <?php
            $servername = "localhost";
            $username = "root1";
            $password = "password";
            $dbname = "dogregistrationke";
            $OwnerID = "OwnerID";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $result = $conn->query("SELECT * FROM petdetails where OwnerID ='$OwnerID'") or die("Failed to query DB" . mysqli_error($conn));
            $row = mysqli_fetch_array($result);

            if ($row['OwnerID'] == $OwnerID) {

                $OwnerID = trim($_POST["OwnerID"]);
                echo "User Found";
            }

            ?>
            <h3>Overall Assesment</h3>
            <table style="margin-left: 30px;" class="striped-columns border">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Waste Disposal</td>
                        <td><input type="radio" value="1" name="enthusiasm" /></td>
                        <td><input type="radio" value="2" name="enthusiasm" /></td>
                        <td><input type="radio" value="3" name="enthusiasm" /></td>
                        <td><input type="radio" value="4" name="enthusiasm" /></td>
                        <td><input type="radio" value="5" name="enthusiasm" /></td>
                    </tr>
                    <tr>
                        <td>Fire Safety</td>
                        <td><input type="radio" value="1" name="walk" /></td>
                        <td><input type="radio" value="2" name="walk" /></td>
                        <td><input type="radio" value="3" name="walk" /></td>
                        <td><input type="radio" value="4" name="walk" /></td>
                        <td><input type="radio" value="5" name="walk" /></td>
                    </tr>
                    <tr>
                        <td>Disease Risk Management</td>
                        <td><input type="radio" value="1" name="vaccine" /></td>
                        <td><input type="radio" value="2" name="vaccine" /></td>
                        <td><input type="radio" value="3" name="vaccine" /></td>
                        <td><input type="radio" value="4" name="vaccine" /></td>
                        <td><input type="radio" value="5" name="vaccine" /></td>
                    </tr>
                    <tr>
                        <td>Electricity safety</td>
                        <td><input type="radio" value="1" name="exercise" /></td>
                        <td><input type="radio" value="2" name="exercise" /></td>
                        <td><input type="radio" value="3" name="exercise" /></td>
                        <td><input type="radio" value="4" name="exercise" /></td>
                        <td><input type="radio" value="5" name="exercise" /></td>
                    </tr>

                    <tr>
                        <td>Ventilation</td>
                        <td><input type="radio" value="1" name="trained" /></td>
                        <td><input type="radio" value="2" name="trained" /></td>
                        <td><input type="radio" value="3" name="trained" /></td>
                        <td><input type="radio" value="4" name="trained" /></td>
                        <td><input type="radio" value="5" name="trained" /></td>
                    </tr>

                    <tr>
                        <td>Exercise facilities</td>
                        <td><input type="radio" value="1" name="interacts" /></td>
                        <td><input type="radio" value="2" name="interacts" /></td>
                        <td><input type="radio" value="3" name="interacts" /></td>
                        <td><input type="radio" value="4" name="interacts" /></td>
                        <td><input type="radio" value="5" name="interacts" /></td>
                    </tr>

                    <tr>
                        <td>Sleeping areas</td>
                        <td><input type="radio" value="1" name="healthy" /></td>
                        <td><input type="radio" value="2" name="healthy" /></td>
                        <td><input type="radio" value="3" name="healthy" /></td>
                        <td><input type="radio" value="4" name="healthy" /></td>
                        <td><input type="radio" value="5" name="healthy" /></td>
                    </tr>

                    <tr>
                        <td>Food and water hygiene</td>
                        <td><input type="radio" value="1" name="active" /></td>
                        <td><input type="radio" value="2" name="active" /></td>
                        <td><input type="radio" value="3" name="active" /></td>
                        <td><input type="radio" value="4" name="active" /></td>
                        <td><input type="radio" value="5" name="active" /></td>
                    </tr>
                </tbody>

            </table>
            <center>

                <input type="submit" value="Submit">
            </center><br>
        </form>

        <center> <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Africa%2FNairobi&title=Dog%20Registration%20KE%20Vaccination%20Calendar&src=d2FndXJhbWFyaWVAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4tZ2Iua2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe></center>
    </div>


</body>

</html>