<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);



 $result=$dbname->query("SELECT * FROM ownerinformation ") or die("Failed to query DB".mysqli_error($dbname));

 


  
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>WELCOME TO DOG REGISTRATION KE</title>
    <style type="text/css">
        table{
            border:2px solid red;
            background-color: #FFC;
        }
        th
        {
            border-bottom:5px solid #0000;
        }
        td
        {
            border-bottom: 2px solid #666;
        }
    </style>
</head>
<body>
    <p><h3>VIEW DATA</h3></p>
  
      <div id="Logout">
     <a href="Logout.php">
        <div class="form-group">    
    <input type="Logout" class="btn btn-primary" name="Logout" value="Logout">
        </a>
          </div>
      </div>
    <table align="left" border="1px" style="width: 600px; line-height:40px;">
        <tr>
            
            <th colspan="8"><h2>Customer Details</h2></th>
        </tr>
        <tr>
             <th>ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Loction</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_array($result))
      
            {
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
                ?>
            
        
    </table>


</body>
</html>
<?php
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);



 $result=$dbname->query("SELECT * FROM petdetails ") or die("Failed to query DB".mysqli_error($dbname));

 

  
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>VIEW DATA</title>
    <style type="text/css">
        table{
            border:2px solid purple;
            background-color: white;

        }
        th
        {
            border-bottom:5px solid purple;
        }
        td
        {
            border-bottom: 2px solid purple;
        }
    </style>
</head>
<body>
      </div>
    <table align="center" border="1px" style="width: 600px; line-height:40px;">
        <tr>
            
            <th colspan="8"><h2>Pet Details</h2></th>
        </tr>
        <tr>
             <th>Name</th>
            <th>Age </th>
            <th>Color</th>
            <th>Gender</th>
            <th>Breed</th>
            <th>Vaccines</th>
            <th>DogImage</th>
            <th>Owner ID</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_array($result))
        
            {
                ?>

                <tr>
                    <td><?php echo $rows['Name'];?></td>
                    <td><?php echo $rows['Age'];?></td>
                    <td><?php echo $rows['Color'];?></td>
                    <td><?php echo $rows['Gender'];?></td>
                    <td><?php echo $rows['Breed'];?></td>
                    <td><?php echo $rows['Vaccines'];?></td>
                    <td><?php echo $rows['DogImage'];?></td>
                    <td><?php echo $rows['OwnerID'];?></td>
                </tr>
                <?php

            }
                ?>
            
        
    </table>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
  }
  .table-wrapper {
    width: 700px;
    margin: 30px auto;
        background: #fff;
        padding: 20px;  
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
    }
  .table-title .add-new i {
    margin-right: 4px;
  }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
    cursor: pointer;
        display: inline-block;
        margin: 0 5px;
    min-width: 24px;
    }    
  table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
  table.table td a.add i {
        font-size: 24px;
      margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
  table.table .form-control.error {
    border-color: #f50000;
  }
  table.table td .add {
    display: none;
  }
</style>

</head>

</html>                            