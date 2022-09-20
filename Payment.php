<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$_SESSION['DogLicenseNumber'];
$DogLicenseNumber="DogLicenseNumber";
$FirstName=$_SESSION['FirstName'];
$IDNumber=$_SESSION['IDNumber'];
$OwnerID=$_SESSION["OwnerID"];

$conn= new mysqli($servername, $username, $password,$dbname);
    $result=$conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 ?>
 <?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$DogLicenseNumber=$_SESSION["DogLicenseNumber"];

  $connection= new mysqli($servername, $username, $password,$dbname);
 $res=$connection->query("SELECT DogLicenseNumber FROM petdetails where OwnerID='$OwnerID' ") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($res);
   $_SESSION['DogLicenseNumber'] = $row["DogLicenseNumber"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Payment</title>
 </head>
 <body>
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
                       
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Payment Form</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="name"><b>Name:</label><br><br></b>
		    <input type="text" class="form-control" name="name" value="<?php echo $FirstName; ?>" required readonly><br><br> </div>
                                        <div class="form-group">
                                        	 <label for="IDNumber"><b>ID Number:</label><br><br></b>
		    <input type="text" class="form-control" name="IDNumber" value="<?php echo $IDNumber; ?>" required readonly><br><br>
		    <label for="DogLicenseNumber"><b>License Number:</label><br><br></b>
		    <input type="text" class="form-control" name="DogLicenseNumber" value=" KEN <?php echo $DogLicenseNumber;?>"required readonly><br><br>
		     <p><b>Amount to Pay: 2000</p></b>
		     <label for="phonenumber"><b>Input Your Phone Number</label><br><br></b>
		    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="07" required><br><br>	   
		
                                            
                                        <div class="form-group">
                                             <a href="pay.php">
                                        	 <input type="button" name="submitpay" id="submitpay" class="btnContactSubmit" value="Pay">
                                            </a></div>
                                        	 
                                               <div class="form-group">
                                               <a href="License.php">
                                               <input type="button" name="submit" id="submit" class="btnContactSubmit" value="License">
                                           </a></div>
                                               
                                        	 
                                           </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        </div>
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
 	

 	<div id="display">
 		<link rel="stylesheet" type="text/css" href="Payment.css">
 		

 	
 	 <div id="display2">
 	

		   

		   
		   
		   	<meta name="viewport" content="width=device-width, initial-scale=1">



		</div>
	</div>
	</form>
</div>
</label>

</form> 
</form>


 
 </body>
 </html>

