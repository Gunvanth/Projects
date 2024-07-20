
<?php 
session_start();

	include("connection.php");
	include("functions.php");
	
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      //something was posted
      $rid = $_POST['rid'];
          
    if(!empty($rid)){ 
  
        //save to database
        echo "$rid \n";
        $query = " DELETE FROM `room` WHERE `room`.`rid` = '$rid'";

        // $query = "DELETE FROM room WHERE 'rid'='" . $_POST["rid"] . "'";
        // $query ="DELETE * FROM `room` WHERE `rid`= '$rid'";
        mysqli_query($con, $query);
  
        if (mysqli_query($con, $query)) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . mysqli_error($con);
      }
      mysqli_close($con);
    }
      
  }
    /*    echo "$rid room cancelled";
        //header("Location: message.php");
        die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}*/
?>