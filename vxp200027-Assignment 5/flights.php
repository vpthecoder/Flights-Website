<!DOCTYPE html>   
<html>
<head>
<title> Flights </title>

<script type="text/javascript" src="jquery.js"></script>
<style>
  <?php include "mystyle.css" ?>
</style>
</head>
<body>
 

  <div class="header"> 
<h1> Flights </h1>
</div>
<hr />

<div class = "navigationbar">
<ul>
<li><a href="http://localhost/flights.php">Flights</a></li>
  <li><a href="book.html">Book</a></li>
  <li><a href="http://localhost/flightstatus.php">Flight Status</a></li>
  <li><a href="contact.html">Contact</a></li>
<li><a href="specialoffers.html">Special Offers</a></li>
<li><a href="register.html">Register</a></li>



</ul>

</div>
<div class = "side">
<h1>
Popular options from Dallas: </h1> <br/> 
<p>
<img src = "aa.jpg" />
<strong> Miami </strong>
<br/>
Jun 6-15
<br/>


Nonstop: 2 hr 58 minutes
<br/>
<img src = "aa.jpg" />
<strong> New York </strong>
<br/>
Jun 26-29
<br/>

Nonstop: 3 hr 15 minutes
<br/>
<img src = "aa.jpg" />
<strong> Vegas </strong>
<br/>
Jul 12-16
<br/>

Nonstop: 3 hr 47 minutes
<br/>
</p>
</div>



 <?php
echo '<div class = "maincontent">
   <br/> <br/> <br/>';

echo '<div id="demo" class="demo"> </div>';

$xml=simplexml_load_file("http://localhost/flights.xml") or die("Error: Cannot create object");
$servername = "localhost";
$username = "root";
$password = "Vp122402";
$dbname = "AirlineDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


foreach($xml->children() as $flight) {
    $sql3 = "INSERT INTO flight (origin, destination, departure_date, departure_time, arrival_date, arrival_time, price)"
            . "VALUES ('".$flight->origin."', '".$flight->destination."', '".$flight->departuredate."', '".$flight->departuretime."', '".$flight->arrivaldate."', '".$flight->arrivaltime."',  $flight->price)";
  
    if ($conn->query($sql3) === TRUE) {
  
  
  
} else {
  echo "There is an error";
}


       
}

$sql = "SELECT origin, destination,departure_date r, departure_time t, arrival_date d, arrival_time k, price l  from flight";
    echo '<table  border="1"  id="id1">
    <tbody><tr><th id="00">
                origin</th><th id="11">
                destination</th><th id="22">
                departure date</th><th id="33">
                departure time</th><th id="44">
                arrival date</th><th id="55">
                arrival time</th><th id="66">
                price</th><th id="77">
                choose flight</th></tr>';
$result = $conn -> query($sql);
  if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  echo '<tr id="row0"><td id="000">'. $row["origin"]. '</td><td id="001"> '. $row["destination"]. ' </td> <td id="002"> '. $row["r"]. '</td><td id="003"> '. $row["t"]. '</td><td id="004"> '. $row["d"]. ' </td><td id="005"> '. $row["k"]. ' </td><td id="006"> '. $row["l"]. ' </td><td id="007"> '
      . '<input type="radio" class="selectflight" id="radio07">Select a Flight</td>';
   
  }
  echo '</tbody> </table>';
} else {
  echo "0 results";
}



    
    

echo '<form>
<h1> Options for Your Flight (redirects to book) </h1>
<input type="radio" id="roundtrip" name="flighttype" value="Round-Trip">
<label for="roundtrip">Round Trip</label><br>
<input type="radio" id="One-Way" name="flighttype" value="One-Way">
<label for="One-Way">One Way</label><br>
<input type="radio" id="multi-city" name="flighttype" value="Multi-City">
<label for="roundtrip">Round Trip</label>
<br/> <br/> <br/> <br/>
<h1> Class </h1>
<input type="radio" id="economy" name="flightclass" value="economy">
<label for="economy">Economy</label><br>
<input type="radio" id="business" name="flightclass" value="business">
<label for="business">Business</label> <br/> <br/> <br/>
<input type="submit" value="Submit">
</form>





</div>';

?>

<div class = "side2">
<h1> Become a member for special offers </h1> <br/> <br/> <br/> <br/>
<form>
<h2> Sign In </h2> 
<label for="username">Username:</label> <br/>
<input type="text" id="username" name="username"> <br/> <br/>
<label for="password">Password:</label> <br/>
<input type="text" id="password" name="password"> <br/> <br/>
<input type="submit" value="Submit">
</form> <br/> <br/> <br/>

<form>
<h2> Create a New Account </h2>
<input type="submit" value="Create a New Account">
</form>
</div>

<div class = "footer">
<p> <strong> BuyandFly </strong>
<img src = "planes.jpg"/> 
Vedant Prakash vxp200027
</p>

</div>





 <script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toString();

</script>


</body>
</html>



