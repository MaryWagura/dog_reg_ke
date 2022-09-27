<!DOCTYPE html>
<html>
<head>
  <title>Terminate Licenses</title>
</head>
<body>
  <b><h3>Terminate License</h3></b>

  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
session_start();
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);

 $result=$dbname->query("SELECT * FROM ownerinformation") or die ("Couldn't connect".mysqli_error());
 $row= mysqli_fetch_array($result)
 ?>


 <div class="container">
   <?php 
    if (isset($_POST['submit'])) {
      $key=$_POST['KeyToDelete'];
   
   #to check if the record exists
      $check=$dbname->query("select * from ownerinformation where IDNumber='$key'") or die("the record does not exist").mysqli_error();
      if (mysqli_num_rows($check)>0) 
      {
         $querydelete=$dbname->query("delete from ownerinformation where IDNumber='$key'") or die("NOT DELETED!").mysql_error();?>
        <div class="alert alert-success">
          <p>Record Deleted successfully!</p>
        </div>
       
     <?php  
     header('Location:Terminate.php');
      }
      else 
      { ?>
        <div class="alert alert-warning">
        <p>Record does not exist!</p>
        </div>
        <?php
      }
    }
  ?>
  <table class="table table-condensed table bordered">
    <tr>
      <th>Number</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>ID Number</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Location</th>
    </tr>
    <?php
    $sr=1;
    while ($row=mysqli_fetch_array($result)) {
      var_dump($row);
      echo $row;
      echo "hi";
      
      ?>
     <tr>
     <form action="" method="post" role="form">
     <td><?php echo  $sr;?></td>
      <td><?php echo $row['FirstName'];?></td>
       <td><?php echo $row['LastName'];?></td>
        <td><?php echo $row['IDNumber'];?></td>
         <td><?php echo $row['PhoneNumber'];?></td>
          <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Gender'];?></td>
             <td><?php echo $row['Location'];?></td>
             <td>
               <input type="checkbox" name="KeyToDelete" value="<?php echo $row['IDNumber'];?>">
             </td>
             <td>
               <input type="SUBMIT" name="submit" class="btn btn-info">
             </td>

     </form>
     </tr>
     <?php $sr++;}
    
    ?>
  </table>
</div>
</body>
</html>	
<!-- Editable table -->
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