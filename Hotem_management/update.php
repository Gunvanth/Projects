<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$room_id = $_POST['new_roomid'];
        $new_room_price=$_POST['new_price'];
        	if(!empty($room_id))
            {
    
                $query1 = "select * from roomtype where `room_id` = '$room_id' limit 1";
                $result = mysqli_query($con, $query1);
    
                if($result)
                {
                    if($result && mysqli_num_rows($result) === 1)
                    {
                        
                        $query="UPDATE `roomtype` SET `room_price`='$new_room_price' WHERE `room_id`='$room_id'";
                        mysqli_query($con, $query);  
                        
                        echo "$room_id ";
                        echo "$new_room_price";
                        echo "new room added";
                        echo "<a href='home.html'><center><button>HOME</button></a></center>";
                        die;
                       
                    }
                }
                echo "update the existing rooms!!!";
            } 
        
        else{
            echo "update existing rooms!!!";
            echo "<a href='home.html'><center><button>HOME</button></a></center>";
            die;
        }
		
		}
        else
		{
			echo "Please enter some valid information!";
		}
	
?>

