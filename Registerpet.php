<!DOCTYPE html>
<html>
<head>
    <title>Register Pet</title>
    <link rel="stylesheet" type="text/css" href="Registerpet.css">
    <div id="Main">
</head>
<body>
    <form action="DBpet.php" method="post">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
                                <h3 class="register-heading">Input Your Dog's Details</h3>
                        
                       
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Name" placeholder="Name *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Age" placeholder="Age *" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Color" placeholder="Dog's Color*" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="OwnerID" placeholder="IDNumber*" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="M" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="F">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group1">
            <label for="Breed"><b>Breed</label><br></b>
            <select class="form-control" name="Breed" required>
                <option value="German Shepherd"><b>German Shepherd</option></b>
                <option value="Nepolian Mastiff"><b>Nepolian Mastiff</option></b>
                <option value="Rottweiler"><b>Rottweiler</option></b>
                <option value="The Rhodesian Ridgeback"><b>The Rhodesian Ridgeback</option></b>
                <option value="Labrador Retriever"><b>Labrador Retriever</option></b>
                <option value="The English Springer Spaniel"><b>The English Springer Spaniel</option></b>
                <option value="The Doberman Pinscher"><b>The Doberman Pinscher</option></b>
                <option value="Great Dane"><b>Great Dane</option></b>
                <option value="Basenji"><b>Basenji</option></b>
                <option value="Saint Bernard"><b>Saint Bernard</option></b>
                <option value="Golden Retriever"><b>Golden Retriever</option></b>
                <option value="Siberian Husky"><b>Siberian Husky</option></b>
                <option value="American Maltese"><b>American Maltese</option></b>
                <option value="Chihuahua"><b>Chihuahua</option></b>
                <option value="Pomerian"><b>Pomerian</option></b>
                <option value="Maltes"><b>Maltese</option></b>
                <option value="Australian Terrier"><b>Australian Terrier</option></b>
                <option value="Japanese Spitz"><b>Japanese Spitz</option></b>
            </select><br><br>
          </div>
          <div class="form-group">
            <label for="Vaccine"><b>Tick the vaccine administered to your dog according to your dog's vaccine book.</label><br>
                <input type="checkbox" name="Rabbis" value="Rabbis"><b> Rabbis</b><br>
                <input type="checkbox" name="Parvovirus" value="Parvovirus"><b>Parvovirus</b><br>
                <input type="checkbox" name="Dewormer" value="Dewormer"><b> Dewormer<br></b><br>
            </div>
           <div class="form-group">
            <label for="Image"><b>Upload the dog's image</label><br>
            <input type="file" name="image" required><br><br><br>   

          </div>
          <div class="form-group">  
            <input type="submit" class="btn btn-primary" name="submitReg" value="SUBMIT">
           <a href="Homepage.php">
        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
