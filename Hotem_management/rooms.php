<html>
	<head>
		<link rel="stylesheet" type="text/css" href="room.css">
</head>
<body>
	
</body>
</html>

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Name = $_POST['visitor_name'];
        $email = $_POST['visitor_email'];
		$phone = $_POST['visitor_phone'];
    $n_adults=$_POST['total_adults'];
    $n_children=$_POST['total_children'];
    $check_in_dt=$_POST['checkin'];
    $check_out_dt=$_POST['checkout'];
    $room_type=$_POST['room_preference'];
    $comments=$_POST['visitor_message'];

if($room_type=="Ultra Deluxe Pro Max"){
	$sql="SELECT `room_price` from roomtype where `room_type`='$room_type'";
	$res=mysqli_query($con, $sql);
	$row = mysqli_fetch_row($res);
	$rprice=$row[0];
}

else if($room_type=="Ultra Deluxe Pro"){
	$sql="SELECT `room_price` from roomtype where `room_type`='$room_type'";
	$res=mysqli_query($con, $sql);
	$row = mysqli_fetch_row($res);
	$rprice=$row[0];
}
else if($room_type=="Ultra Deluxe"){
	$sql="SELECT `room_price` from roomtype where `room_type`='$room_type'";
	$res=mysqli_query($con, $sql);
	$row = mysqli_fetch_row($res);
	$rprice=$row[0];
}


	

		if(!empty($Name)  && !empty($email) && !empty($phone) && !empty($n_adults) && !empty($n_children) && !empty($check_in_dt) && !empty($check_out_dt) && !empty($room_type) && !is_numeric($Name))
		{
			
			//save to database
			$rid = random_num(5);
			$query ="INSERT INTO `room`(`rid`, `Name`, `email`, `phone`, `n_adults`, `n_children`, `check_in_dt`, `chek_out_dt`, `room_type`,`rprice`, `comments`)
       VALUES ('$rid','$Name','$email','$phone','$n_adults','$n_children','$check_in_dt','$check_out_dt','$room_type','$rprice','$comments')";

			mysqli_query($con, $query);     

			echo "<div class='room'><h1 style='color:white'><center>ROOM TOKEN</center></h1><br>
			<h2><center>Hotel GoldenShore</center></h2>
			<center style='color:white'>ROOM ID:.$rid<br></center>
			<center style='color:white'>BUYER:.$Name <br></center>
			<center style='color:white'>ROOM PRICE:.$rprice</center><br>
			<center style='color:white'>Room Booked!!!</center><br></div>
			<div><center><button onclick='window.print()'>Print</button></center><br><br><br>
			<a href='home.html'><center><button>Back to HOME</button></a></center></div>";

			
			//header("Location: message.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<script type="text/javascript">
   var rprice = "<?php echo $rprice; ?>";
</script>
		</body>
		</html>

