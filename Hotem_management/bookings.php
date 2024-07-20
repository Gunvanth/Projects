

<html>
    <head>
        <title>VIEW ROOM</title>
        <link rel="stylesheet" type="text/css" href="bookings.css">  
        <style type="text/css">
            table,th,td{
                color:#000;
                font-family:monospace;
                font-size:17px;
                text-align:center;
                border-collapse:collapse;
                width:25%;
                border:2px solid black;
                position: relative;
                
                padding:auto 25px;
             }
            </style>
    </head>
    <body>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="room.php">Book Room</a></li>
            <li><a href="#">My Bookings</a></li>
            <li><a href="about.html">About</a></li>
            
          </ul> 
        <div class="login">  

           
         <form  method="post" id="login">
            <h2>SEE YOUR BOOKINGS HERE!!!</h2>  
            <label><b>Mobile:
                </b><br> <br>   
                </label>    
                <input type="text" id="phone" name="phone" placeholder="Enter Mobile Number">    
                <br><br>     
                
                <label><b>RId:
                </b><br> <br>   
                </label>    
                <input type="text" id="rid" name="rid" placeholder="Enter RId">    
                <br><br>    
                 
               <button class="btn"  id="book">"GO" </button>
               <button class="btn"  id="print" onclick="printpart()" >"PRINT" </button><br><br>

               <script>
                   function printpart() {
                    
                     var printwin = window.open("");
                     printwin.document.write(document.getElementById("abcd").innerHTML);
                     printwin.stop();
                     printwin.print();
                     printwin.close();
                    }
                    </script>
 <?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

        $phone = $_POST['phone'];
        $rid = $_POST['rid'];


  
        $sql="SELECT * FROM `room` WHERE `rid`='$rid'";

        $result = mysqli_query($con,$sql);

        echo "<table border='1' id='abcd'>
        <tr>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>n_adults</th>
        <th>n_children</th>
        <th>check_in_dt</th>
        <th>check_out_dt</th>
        <th>room_type</th>
        <th>comments</th>
        </tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['n_adults'] . "</td>";
echo "<td>" . $row['n_children'] . "</td>";
echo "<td>" . $row['check_in_dt'] . "</td>";
echo "<td>" . $row['chek_out_dt'] . "</td>";
echo "<td>" . $row['room_type'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

}
else{
    echo "None";
    mysqli_close($con);
}


?>


            </form>     
        </div>
        
    </body>
</html>