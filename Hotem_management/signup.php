<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div id="box">
		
		


<ul>
	<li><a href="home.html">Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="about.html">Contact</a></li>
	<li><a href="matter.html">About</a></li>
  </ul> 
  <div class="box">
  <form method="post">
<h2>Welcome to HOTEL</h2><br> 

<h2>SIGN UP</h2>
<label><b>User Name 
        </b>    
        </label> <br>
			<input id="user_name" type="text" name="user_name"><br><br>
			
			<label><b>Password
        </b>    
        </label>     <br> 
			<input id="password" type="password" name="password"><br><br>

			<input id="button" type="submit" class="btn" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>