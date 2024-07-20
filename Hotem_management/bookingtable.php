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

        echo "<table border='1'>
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