<?php 
session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$conn= new mysqli($servername, $username, $password,$dbname);
$OwnerID = $_SESSION["OwnerID"];
$IDNumber = $_SESSION["IDNumber"];
$FirstName=$_SESSION["FirstName"];
$_SESSION['DogLicenseNumber'];
$DogLicenseNumber=$_SESSION["DogLicenseNumber"];
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Results View</title>

</head>
<body>
    <link rel="stylesheet" type="text/css" href="OwnerResults.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        ?>
        <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">THE DOG REGISTRATION KE</a>
                        </li>
                        <li class="nav-item">
                           
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">RESULTS</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <P>INPUT YOUR ID NUMBER BELOW:</P>
                                        <div class="form-group">
                                               <form action="ResultControlOwner.php" method="POST">
                                            <input type="text" name="OwnerID" class="form-control" placeholder="Your ID NUMBER: *" value="" required=""/>
                                         <input type="submit" class="btnContactSubmit" value="Submit">
                                       
                                              </form>
                                             
                                           </div> 
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

