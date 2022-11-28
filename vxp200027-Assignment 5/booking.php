<?php
session_start();
?>
<html>
  <head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<?php
$passengerid = $_GET["passengerid"];
$flightid = $_GET["flightid"];

$_SESSION["pid"] = $passengerid;
$_SESSION["fid"] = $flightid;





$servername = "localhost";
$username = "root";
$password = "Vp122402";


$dbname = "AirlineDB";
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die ("Connection failed: " + $conn2->connect_error);
}

$sql = "INSERT INTO booking (flightID, passengerID)VALUES('$flightid', '$passengerid')";
if ($conn2->query($sql) === TRUE) {
    echo "Added Successfully";
    
    
  } else {
    echo "This booking is already in the system.";
  }

  //echo '<form action="flightstatus.php" '

?>

<script>


</script>

</html>