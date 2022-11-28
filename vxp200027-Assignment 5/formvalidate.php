  <?php 


$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$age = $_POST["age"];
$password = $_POST["password"]; 

$password2 = $_POST["password2"];
$phonenumber = $_POST["pnumber"];
$passid = $_POST["passid"];
$email = $_POST["email"];

$test1 = test($password2, $password, $email, $passid, $phonenumber);

if ($test1 === false)
{
echo "Invalid input";
}
else
{
 $servername = "localhost";
$username = "root";
$passwordsql = "Vp122402";
$dbname="AirlineDB";
// Create connection
$conn = new mysqli($servername, $username, $passwordsql,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ");
}
 
/*
$sql = "CREATE DATABASE AirlineDB";
if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error creating database: " + $conn->error;
}

$dbname = "AirlineDB";
$conn->close();
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die("Connection failed: " + $conn->connect_error);
}

$sql2 = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(50) not null,
phonenumber CHAR(14) not null,
passengerid CHAR(14) not null,
password VARCHAR(1000) not null,
age INT(3) 
)"; */

//if ($conn2->query($sql2) === TRUE) {
  
//} else {
//  echo "Error creating table: " + $conn->error;
//}

$sql3 = "INSERT INTO users (firstname, lastname, email, phonenumber, passengerid, _password, age)
VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$passid', '$password', $age)";

if ($conn->query($sql3) === TRUE) {
  echo "Registered Successfully";
  
  
} else {
  echo "<br/> <br/> <form action='book.html' >
	Passenger ID: <input type='text' name='id' value='$passid' readonly='true'><br>
	Password: <input type='password' name='password' value='$password' readonly='true'><br>
	<input type='submit'>
	</form>";
}




$conn->close();
	
	echo "<br/> <br/> <form action='book.html' >
	Passenger ID: <input type='text' name='id' value='$passid' readonly='true'><br>
	Password: <input type='password' name='password' value='$password' readonly='true'><br>
	<input type='submit'>
	</form>";

	
 
    

}




function test($password2, $password, $email, $passid, $phonenumber) {
    $emailtest = '/^[^@]+@[^@]+\.edu$/';
    $phone = '/^(\()\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/';
  if (!($password == $password2 & strlen($password) >= 8))
{
echo 'Your password must match and be at least 8 characters <br/> ';
return false;
}
if (!($phonenumber == $passid & preg_match($phone, $phonenumber) == 1))
{
 echo 'Your phone number be be equal to your passenger id and in the format (ddd)ddd-dddd) <br/>';
return false;
}
if (!(preg_match($emailtest, $email)) == 1)
   {
       echo 'Your email must have @ and .edu <br/>';
        return false; 
   }
   
  return true;
}



?>








