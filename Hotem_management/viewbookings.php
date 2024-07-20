


<html>
    <head>
        <title>VIEW BOOKINGS</title>
        <link rel="stylesheet" type="text/css" href="vbookings.css">  
        <style type="text/css">
            table,th,td{
                color:black;
                font-family:monospace;
                font-size:17px;
                text-align:center;
                border-collapse:collapse;
                width:25%;
                border:2px solid #041C32;
                position: relative;
                
                padding:auto 25px;
             }
            </style>
    </head>
    <body>
        
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="updateroom.php">Update Room PRICES</a></li>
            <li><a href="about.html">About Hotel</a></li>
            <li><a href="logout.php">Logout</a></li>

            
          </ul> 

<div class="login">
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	
        $sql="SELECT * FROM `room` WHERE 1";

        $result = mysqli_query($con,$sql);
if($result){
        echo "<table border='1'>
        <tr 'background-color:white'>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
        <th>n_adults</th>
        <th>n_children</th>
        <th>check_in_dt</th>
        <th>check_out_dt</th>
        <th>room_type</th>
        <th>comments</th>
        <th>rprice</th>

        </tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr 'background-color:white'>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['n_adults'] . "</td>";
echo "<td>" . $row['n_children'] . "</td>";
echo "<td>" . $row['check_in_dt'] . "</td>";
echo "<td>" . $row['chek_out_dt'] . "</td>";
echo "<td>" . $row['room_type'] . "</td>";
echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['rprice'] . "</td>";

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
</div>
</body>
</html>