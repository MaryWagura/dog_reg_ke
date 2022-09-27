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


 $result=$conn->query("SELECT * FROM ownerinformation ") or die("Failed to query DB".mysqli_error($conn));

 

  
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
body{
    background: -webkit-linear-gradient(left, #5F0763, #E17EE6);
}
.emp-profile{
    padding: 5%;
    margin-right: 5%;
    margin-left: 5%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 30%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.profile-img{
    margin-left: 120%;
}
        table{
            border-collapse: collapse;
             width: 100%;
            margin-bottom: 30px;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Homepage.php">Home</a></li>
      <li><a href="OwnerResults.php">Results</a></li>
       <li><a href="Registerpet.php">Register Pet</a></li>
      <li><a href="Logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                       <div class="profile-img">
                        <center> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwh5sBr0LLuApAZNKH_nvYphVcqYXs_J_6V3uv_7KBGibyyQu-&s" alt=""/>
                          
                        </div>
                        <h3 style="  color: #0062cc;">Welcome User!</h3>
                    </div>
                   
                  
                </div>
              
                      
                    
                        <div class="tab-content profile-tab" id="myTabContent">
                           
                                            <div style="overflow-x:auto;">
                                                <table>
      
        <tr>
             <th>ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Location</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_array($result))
            {
                 if($rows['IDNumber']==$IDNumber){
                
                ?>

                <tr>
                    <td><?php echo $rows['IDNumber'];?></td>
                    <td><?php echo $rows['FirstName'];?></td>
                    <td><?php echo $rows['LastName'];?></td>
                    <td><?php echo $rows['PhoneNumber'];?></td>
                    <td><?php echo $rows['Email'];?></td>
                    <td><?php echo $rows['Gender'];?></td>
                    <td><?php echo $rows['Location'];?></td>
                </tr>
                <?php
            }
        }
                ?>
            
        
    </table>
         
                                      
                                </div>

                            </div>
                             
        
          
                        </div>

                    
          
   
 


</body>
</html>