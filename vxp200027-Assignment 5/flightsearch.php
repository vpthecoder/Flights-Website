<html>
  <head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<style>
    table, td, th, tr
    {
        padding: 1em 1em 1em 1em;
        border: 1px solid black;
    }

</style>
  </head>

<?php


$origin = $_GET["origin"];
$destination = $_GET["destination"];
$departuredate = $_GET["departure-date"];
$arrivaldate = $_GET["arrival-date"];



$servername = "localhost";
$username = "root";
$password = "Vp122402";


$dbname = "AirlineDB";
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die ("Connection failed: " + $conn2->connect_error);
}


$sql3 = "SELECT id, origin, destination, departure_date, departure_time, arrival_date, arrival_time, price from flight where origin like '%$origin%' and destination like '%$destination%' and 
departure_date like '%$departuredate%' and arrival_date like '%$arrivaldate%'";



$result = $conn2 -> query($sql3);


if ($result->num_rows > 0 ) {
  echo "<table style=border:'1'> <tr> <th> ID </th> <th> Origin </th> <th> Destination </th> <th> Departure Date </th> <th> Departure time </th> <th> Arrival Date </th> <th> Arrival Time </th>
    <th> Price </th> <th> Select a Flight </th> </tr> "; 
   
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" .$row["id"]. "</td><td>" .$row["origin"].  "</td> <td>" .$row["destination"] . 
     "</td> <td>" .$row["departure_date"].  "</td> <td> ".$row["departure_time"] .
    " </td> <td>". $row["arrival_date"] . "</td> <td>" .$row["arrival_time"] .
    "</td> <td>" .$row["price"]. "</td> <td> <input type='checkbox' id='id2'/> </td></tr> ";
  }
  echo "</table>";
}
  


  else if ($result2->num_rows > 0)
  {
    
    $sql5 = "SELECT id, origin, destination, departure_date, departure_time, arrival_date, arrival_time, price from flight where origin like '%$origin%' and destination like '%$destination%'";
    $result3 = $conn2 -> query($sql5);
    if ($result3->num_rows > 0 ) {
      echo "<table style=border:'1'> <tr> <th> ID </th> <th> Origin </th> <th> Destination </th> <th> Departure Date </th> <th> Departure time </th> <th> Arrival Date </th> <th> Arrival Time </th>
        <th> Price </th> <th> Select a Flight </th> </tr> "; 
       
      while($row = $result3->fetch_assoc()) {
        echo "<tr> <td>" .$row["id"]. "</td> <td>" .$row["origin"].  "</td> <td>" .$row["destination"] . 
         "</td> <td>" .$row["departure_date"].  "</td> <td> ".$row["departure_time"] .
        " </td> <td>". $row["arrival_date"] . "</td> <td>" .$row["arrival_time"] .
        "</td> <td>" .$row["price"]. "</td> <td> <input type='checkbox' id='id1'/> </td></tr> ";
      }
      echo "</table>";
  }

}

  else 
  {
    echo 'We cannot find the flight to match your needs.';
  }


?>


<script>
 $(document).ready(function() {
  var x = 0;
  var object = {};
  var count  = [];
  $('input[type="checkbox"]').click(function() {
      
              if($(this).prop("checked") == true) {
                let row = $(this).parent().parent();
                 ($(this).parent().parent().attr("id", "row" + x));
                 x ++;
                 var n = ($(row).children().text());
                 
                 $(row).find('td').each (function() {
                    
                  count.push($(this).text());

}); 
                 
                 
              }

              if($(this).prop("checked") == false) {
                row = $(this).parent().parent();
                $(row).find('td').each (function() {
                    var data = $(this);
                    
                    count.splice( $.inArray($(this).text(), count), 1 );
                    $('p').remove();
                    $('br').remove();
                    $('#submit2').remove();
                    $('form').remove();


 
  
  }); 
 
                 
    
              }




            });

            $('body').append(
        $(document.createElement('input')).prop({
            type: 'button',
            id: 'submit',
            value: 'Display Cart',
            className: 'btn'
        })
    );
    $('#submit').click(function(){
        var txtstring='<br/> <br/> <p> Flight Details: </p> <br/> <br/> <p>';
        for (var i = 0; i < count.length; i++)
        {
            txtstring += count[i] + ",";
        }
        txtstring += '</p>';
        $('body').append(txtstring);
        var newNumber = 0;
        
        var lowCount = 7;
        for (var j = 0; j < (count.length/9); j++)
        {
          var number = count[lowCount];
          
          number = parseInt(number, 10);
          newNumber += number;
          lowCount += 9;
        }
        var newString = '<br/> <p> Total Price: </p> <br/> <p> ' + newNumber + '</p>';
        $('body').append(newString);
        $('body').append(
        $(document.createElement('input')).prop({
            type: 'button',
            id: 'submit2',
            value: 'Place Order',
            className: 'btn'
        })
        );
        $('#submit2').click(function(){
        var form = '<form action="booking.php"> <label for="passengerid">Enter your Passenger ID </label> <input type="text" id="passengerid" name="passengerid"/> <br/>' +
                '<label for="flightid">Enter your flight ID </label> <input type="text" id="flightid" name="flightid"/> <br/>' +
                '<button> Submit </button> </form>';

                $('body').append(form);
        });
    });
    
        });


</script>

</html>