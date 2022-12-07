<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
 <style>
 	body{
 		margin: 0px;
 		border: 0px;
 	}
 	#header
 	{
 		width: 100%;
 		height: 120px;
 		background:purple;
 		color: white;
 	}
 	
 	#data
 	{   float: center;
 		height: 200px;
 		color: black;
 		font-size: 25px;

 	}
 	#sidebar
 	{
 		float: center;
 		
 	}
 	#AdminLogo
 	{
 		width: 50px;
 		height: 50px;
 		border-radius: 50px;
 		float: center;

 	}
 	ul li
 	{
         padding: 20px;
         border-bottom: 2px solid grey;
 	}
 	ul li:hover
 	{
 		background:purple;
 		color: white;
 	}
 	#Main
 	{
 		background-image: url(https://images.unsplash.com/photo-1587300003388-59208cc962cb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);
 	}
 </style>
</head>
<body>
	
	<div id="header">
		<img src="Admin.jpeg" alt="AdminLogo" id="AdminLogo"> <br><h3>THE DOG REGISTRATION KE</h3>
	</div>
	<div id="Main">
		<div id="data"><br>
		<center><h3>Hello Admin</h3></center>
	</div>

	<div id="sidebar">
		<ul> 
			<a href="Terminate.php"><li>Terminate License</li></a>
			<a href="ViewData.php"><li>View Data</li></a>
		</ul>
	</div>
	<div class="form-group"><br>
	<a href="Homepage.php">	
	<div id="button"></div>	    
			   <button type = "submit" class="button">Logout</button>
<a href="Logout.php"> </a>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: purple;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
</style>
			    	


</html>