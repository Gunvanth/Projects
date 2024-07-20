<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: room.php");
						die;
					}
				}
			}
			
			echo "<script type='text/javascript'>";
			echo "alert('WRONG USERNAME OR PASSWORD');";
	    	echo "</script>";		
	}else
		{
			echo "<script type='text/javascript'>";
			echo "alert('WRONG USERNAME OR PASSWORD');";
	    	echo "</script>";			}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="about.html">Contact</a></li>
        <li><a href="matter.html">About</a></li>
      </ul> 
    <h2>Welcome to HOTEL</h2><br> 

	<div class="box">
		
		<form method="post" >
			<h2>LOGIN</h2>
			<label><b>User Name 
        </b>    
        </label> <br>   
			<input id="user_name" type="text" name="user_name"><br><br>
			<br><br>    
        <label><b>Password
        </b>    
        </label>     <br> 
			<input id="password" type="password" name="password"><br><br>

			<input id="button" type="submit" class="btn" value="Login"><br><br>
			<br><br><a href="signup.php">Click to Signup</a><br><br>

			<br><br><a href="adminlogin.php">Login here, ADMINS!!!</a><br><br>

		</form>
	</div>
</body>
</html>