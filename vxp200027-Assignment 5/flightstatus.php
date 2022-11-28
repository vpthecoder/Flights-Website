<?php
session_start();
?>
<!DOCTYPE html>   
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

<title> Your Flight Status </title>
</head>
<body>
<div class = "header">
<h1> Your Flight Status </h1> <br/>
</div>


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
<br/> <br/>
<div class = "side">
<h1> Real Time Flight Tracker </h1>
<dl>
  <dt> <strong> Arrivals </strong> </dt> 
  <dd>View real-time arrivals at your airport </dd> <br/>
  <dt><strong> Departures </strong> </dt> 
  <dd>View real-time departures at your airport</dd> <br/>
  <dt> <strong> Airport Delays </strong> </dt> 
   <dd>See delay details for your airport</dd><br/>
  <dt> <strong>Weather </strong> </dt> 
   <dd> Current airport weather and 7-Day forecast </dd> <br/>
	<dt> <strong>Airport Delays </strong> </dt> 
   <dd> See delay details for your airport </dd> <br/>
</dl>

</div> 


<div class= "maincontent">
<p id="demo"> </p>
<h1> Check Your Flight Status </h1>
<p> <strong> Search by Flight Number </strong> <br/> <br/> </p>

<form>
  <label for="fname">Flight Number:</label><br/>
  <input type="text" id="fname" name="fname"><br/>
  <label for="fname">Airline:</label><br/>
  <input type="text" id="airname" name="airname"> <br/> 

  <input type="submit" value="Submit" />
  <br/>
  <div class="search" id="search">
  
  </div>
</form>

</div>

<div class = "side2">
<h1> Track a Random Flight </h1>
<p> If you are interested in seeing the flight tracker 
you can click here to track a random flight. </p>
<br/> <br/> <br/>
<form>
<input type="submit" value="Random Flight Tracker" />
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

searchFlightStatus();
function searchFlightStatus(){
    var searchHeading = document.createElement("h3");
    searchHeading.id ="head";
    searchHeading.innerHTML = "Track Your Flight Here: ";
    searchHeading.style.fontSize = "15px";
    //span.innerHTML ="Enter your flight details here and track your flight:";
    
    var aLocation = document.createElement("input");
     aLocation.setAttribute("type", "text");
     aLocation.setAttribute("name", "arrLocation");
     aLocation.setAttribute("placeholder", "Arrival Location");
 
     // Create an input element for emailID
     var dLocation = document.createElement("input");
     dLocation.setAttribute("type", "text");
     dLocation.setAttribute("name", "depLocation");
     dLocation.setAttribute("placeholder", "Departure Location");
 
      // Create an input element for password
      var travDate = document.createElement("input");
      travDate.setAttribute("type", "text");
      travDate.setAttribute("name", "travDate");
      travDate.setAttribute("placeholder", "Travel Date");
      
      var submit = document.createElement("input");
      submit.setAttribute("type", "submit");
      submit.setAttribute("value", "Submit");
      submit.setAttribute("id", "submit");
      
      document.getElementById("search").appendChild(searchHeading);
      document.getElementById("search").appendChild(aLocation);
      document.getElementById("search").appendChild(dLocation);
      document.getElementById("search").appendChild(travDate);
      document.getElementById("search").appendChild(submit);
      
      document.getElementById("submit").addEventListener("click", ()=>{
          alert("Your flight is on schedule");
          
      });
}







</script>

<?php
$servername = "localhost";
$username = "root";
$password = "Vp122402";


$dbname = "AirlineDB";
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die ("Connection failed: " + $conn2->connect_error);
}
$pid = $_SESSION["pid"];

$sql3 = "SELECT * from booking where passengerID = '$pid'";



$result = $conn2 -> query($sql3);


if ($result->num_rows > 0 ) {
  echo '<p> Status for your flights: <br/>';
  while($row = $result->fetch_assoc()) {
    echo  $row["status"] . '<br/>';
  }
  echo '</p>';
}
else{
  echo '<script type="application/JavaScript"> 
     alert("Book a flight");
     </script>';


}



?>

</body>


</html>