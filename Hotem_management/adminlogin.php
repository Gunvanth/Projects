

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

			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: dashboard.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Admin@Hotel</title>
</head>
<body>
    <h2>Welcome to HOTEL</h2><br> 
    <ul>
        <li><a href="home.html">Home</a></li>
    </ul>

	<div class="box">
		
		<form method="post" action="adminlogin.php" >
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

    
</body>
</html>