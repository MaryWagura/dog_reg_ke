<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION PAGE</title>
    <link rel="stylesheet" type="text/css" href="RegisterAdmin.css">
    <div id="Main">
</head>
<body>
    <form action="DBconnection.php" method="post">
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="Registerme.css">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>THE DOG REGISTRATION KE</h3>
                        <h3>Welcome</h3>

                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                           
                           </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading"<h3>Input Your Details</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                         <div class="form-group">
		    <label for="Firstname"><b>First Name</label><br><br></b>
		    <input type="text" class="form-control" name="Firstname" placeholder="Enter First Name" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="Lastname"><b>Last Name</label><br><br></b>
		    <input type="text" class="form-control" name="Lastname" placeholder="Enter Last Name" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="idnumber"><b>ID Number</label><br><br></b>
		    <input type="text" class="form-control" name="idnumber" placeholder="Enter your ID number" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="phonenumber"><b>Phone Number</label><br><br></b>
		    <input type="phonenumber" class="form-control" name="phonenumber" placeholder="+254" required><br><br>	   
		  </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">
		    <label for="email"><b>Email</label><br><br></b>
		    <input type="email" class="form-control" name="email" placeholder="example@domain.com" required><br><br>   
		  </div>
		  
		   <div class="form-group">
		    <label for="gender"><b>Gender</label><br><br></b>
		    <select class="form-control" name="gender" required>
		    	<option value="M">Male</option>
		    	<option value="F">Female</option>
		    </select><br><br>
		  </div>
		   <div class="form-group">
		   	
		    <label for="Location"><b>Location</label><br><br></b>
		    <input type="text" class="form-control" name="Location" placeholder="Input city residence" required><br><br>	   
		  </div>
		   <div class="form-group">	
		   	<input type="submit" class="btn btn-primary" name="submitReg" value="SUBMIT">
		   <a href="Registerpet.php">
		</a>
		  </div>
		  </div>	
                           
                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
       