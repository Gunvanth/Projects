



<html>
    <head>
        <title>Rooms</title>
        <link rel="stylesheet" type="text/css" href="room.css">   
        <script type="text/javascript">
	      	alert("LOGIN SUCCESSFUL! Welcome to ROOM BOOKING");
      	</script>
    </head>
<body>
  <ul>
    <li><a href= "home.html">Home</a></li>
    <li><a href= "food.html">Buy Food</a></li>
    <li><a href="cancel.php">Cancel Room</a></li>
    <li><a href="about.html">Contact</a></li>
    <li><a href="matter.html">About</a></li>
  </ul> 
        <h3>BOOK YOUR ROOM HERE!!!</h3>
    <form method="post" name="myform" action="rooms.php">
    <div class='room'>
    <div class="elem-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="visitor_name" placeholder="Enter Your Name Here">
    </div>
    <div class="elem-group">
      <label for="email">Your E-mail</label>
      <input type="email" id="email" name="visitor_email" placeholder="xyz@email.com" >
    </div>
    <div class="elem-group">
      <label for="phone">Your Phone</label>
      <input type="tel" id="phone" name="visitor_phone" placeholder="123-456-7890">
    </div>
    <hr>
    <div class="elem-group inlined">
      <label for="adult">Adults</label>
      <input type="number" id="adult" name="total_adults" placeholder="0" min="1" required>
    </div>
    <div class="elem-group inlined">
      <label for="child">Children</label>
      <input type="number" id="child" name="total_children" placeholder="0" min="0" required>
    </div>
    <div class="elem-group inlined">
      <label for="checkin-date">Check-in Date</label>
      <input type="date" id="checkin-date" name="checkin" required>
    </div>
    <div class="elem-group inlined">
      <label for="checkout-date">Check-out Date</label>
      <input type="date" id="checkout-date" name="checkout" required>
    </div>
    <hr>

    <div class="pricces">
      <label for="prices">ROOM PRICES</label>
      <p><ol>
        <li>Ultra Deluxe Pro Max-Rs.39999</li><br>
        <li>Ultra Deluxe Pro-Rs.29999</li><br>
        <li>Ultra Deluxe -Rs.19999</li><br>
        <p><b>*Room prices may vary from seasons,Please verify before final bill</p></b>
        
</ol>
</p>
 </div>
 <br>


   <div class="elem-group">
      <select id="room-selection" name="room_preference" required>
          <option value="">Choose a Room from the List</option>
          <option value="Ultra Deluxe Pro Max">Ultra Deluxe Pro Max</option>
          <option value="Ultra Deluxe Pro">Ultra Deluxe Pro </option>
          <option value="Ultra Deluxe">Ultra Deluxe</option>
        
          
      </select>
      
    </div>
    
    <hr>
    <div class="elem-group">
      <label for="message">Anything Else?</label>
      <textarea id="message" name="visitor_message" placeholder="If any Additional Things needed,feel free to mention here..." required></textarea>
    </div>

   <center><input id="button" name="btn" type="submit" class="btn" value="BOOK"></center> 
</div>
  </form>
<!-- 
<script type="text/javascript">

var x = document.getElementById("room-selection");
var option = document.createElement("option");
option.text = "";
x.add(option);

</script> -->
 
</body>
</html>



    