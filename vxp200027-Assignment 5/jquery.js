
$(document).ready(function(){
    const rowName = ["origin", "destination", "departure date", "departure time", "arrival date", "arrival time", 
"price", "choose flight"];

var text = "<flights>" + "<flight1>" + "<origin> Dubai  \n\
   </origin>" + "<destination> California </destination>" +
       "<departuredate>June 25 2022</departuredate>" +
        "<departuretime>6:30 p.m.</departuretime>" + "<arrivaldate>June 26 2022</arrivaldate>"
        + "<arrivaltime> 1:30 p.m. </arrivaltime>" + "<price> $800 </price>" + "</flight1>" +
        
        
        "<flight2> " + "<origin2> Austin  \n\
   </origin2>" + "<destination2> Dallas </destination2>" +
       "<departuredate2>June 20 2022</departuredate2>" +
        "<departuretime2>3:50 p.m.</departuretime2>" + "<arrivaldate2>June 20 2022 </arrivaldate2>"
        + "<arrivaltime2> 5:30 p.m. </arrivaltime2>" + "<price2> $200 </price2>" + "</flight2>" +
        
        
        "<flight3> " + "<origin3> Los Angeles  \n\
   </origin3>" + "<destination3> Cancun </destination3>" +
       "<departuredate3>June 20 2022</departuredate3>" +
        "<departuretime3>12:50 p.m.</departuretime3>" + "<arrivaldate3>June 20\n\
        2022</arrivaldate3>"
        + "<arrivaltime3> 5:15 p.m. </arrivaltime3>" + "<price3> $900 </price3>" + "</flight3>" +



        "<flight4> " + "<origin4> Seoul  \n\
   </origin4>" + "<destination4> Shanghai </destination4>" +
       "<departuredate4>June 21 2022</departuredate4>" +
        "<departuretime4>11:25 a.m.</departuretime4>" + "<arrivaldate4>June 21\n\
        2022</arrivaldate4>"
        + "<arrivaltime4> 4:25 p.m. </arrivaltime4>" + "<price4> $800 </price4>" + "</flight4>" +
        
        
          "<flight5> " + "<origin5> Melbourne  \n\
   </origin5>" + "<destination5> Brazil </destination5>" +
       "<departuredate5>June 22 2022</departuredate5>" +
        "<departuretime5>2:15 p.m.</departuretime5>" + "<arrivaldate5>June 23\n\
        2022</arrivaldate5>"
        + "<arrivaltime5> 8:40 p.m. </arrivaltime5>" + "<price5> $700 </price5>" + "</flight5>" +
        
         "<flight6> " + "<origin6> Argentina  \n\
   </origin6>" + "<destination6> London </destination6>" +
       "<departuredate6>June 22 2022</departuredate6>" +
        "<departuretime6>6:40 p.m.</departuretime6>" + "<arrivaldate6>June 23\n\
        2022</arrivaldate6>"
        + "<arrivaltime6> 10:40 p.m. </arrivaltime6>" + "<price6> $600 </price6>" + "</flight6>" +
        
        
        "<flight7> " + "<origin7> Moscow  \n\
   </origin7>" + "<destination7> Athens </destination7>" +
       "<departuredate7>June 22 2022</departuredate7>" +
        "<departuretime7>9:40 a.m.</departuretime7>" + "<arrivaldate7>June 23\n\
        2022</arrivaldate7>"
        + "<arrivaltime7> 3:10 p.m. </arrivaltime7>" + "<price7> $500 </price7>" + "</flight7>" +
        
        "<flight8> " + "<origin8> Washington D.C.  \n\
   </origin8>" + "<destination8> Atlanta </destination8>" +
       "<departuredate8>June 22 2022</departuredate8>" +
        "<departuretime8>6:40 p.m.</departuretime8>" + "<arrivaldate8>June 22\n\
        2022</arrivaldate8>"
        + "<arrivaltime8> 9:20 p.m. </arrivaltime8>" + "<price8> $600 </price8>" + "</flight8>" +
        
        
        "<flight9>" + "<origin9> San Francisco  \n\
   </origin9>" + "<destination9> Phoenix </destination9>" +
       "<departuredate9>June 21 2022</departuredate9>" +
        "<departuretime9>2:20 p.m.</departuretime9>" + "<arrivaldate9>June 21\n\
        2022</arrivaldate9>"
        + "<arrivaltime9> 3:40 p.m. </arrivaltime9>" + "<price9> $600 </price9>" + "</flight9>" +
        
        
        "<flight10>" + "<origin10> Boston  \n\
   </origin10>" + "<destination10> New York </destination10>" +
       "<departuredate10>June 20 2022</departuredate10>" +
        "<departuretime10>9:15 a.m.</departuretime10>" + "<arrivaldate10>June 20\n\
        2022</arrivaldate10>"
        + "<arrivaltime10> 10:20 a.m. </arrivaltime10>" +  "<price10> $800 </price10>" + "</flight10>"  + "</flights>" ;

        xmlDoc = $.parseXML( text );
        $xml = $( xmlDoc );
    
           
              var number_of_rows = 10;
              var number_of_cols = rowName.length;
              var table_body = '<table   border="1"; id="id1"  >';
         //     for(var i=0;i<number_of_cols;i++){
           //     table_body+='<th id="' + i + i + '">' + rowName[i] + '</th>';
                
         //   }
             // for(var i=0;i<number_of_rows;i++){
              //  table_body+='<tr id="row' + i + '">';
                
              //  for(var j=0;j<number_of_cols;j++){
                 //   table_body +='<td id="' + i + i + j + '"> ' ;
                  //  if (j === 7)
                  //  {
                       //  table_body +='<input type="radio"  class="selectflight" id="radio' + i + j + '" >Select a Flight</input>';
                         
                  //  }
                  //  else
                 //   {
                        //table_body += i;
                    //table_body += ($($xml).find (":root").children(":nth-child(" + (i+ 1)+")").children(":nth-child(" + (j + 1)+")").text());
                 //   }
                 //   table_body +='</td>';
             //   }
             //   table_body+='</tr>';
         //     }
            //    table_body+='</table>';
                
                
             //  $('#demo').append(table_body);
             
             
             var ids = [];
             
       
    
    

        
        
        


        
             
    $('input[class="selectflight"]').on("click", myFunct);
    function myFunct(){
    var trid3 = $(this).closest('tr').attr('id');
     
       var op = $('#' + trid3).css( 'opacity');
       
        if(op === '0.5')   {
        
   var trid2 = $(this).closest('tr').attr('id');
     $('#' + trid2).css({ opacity: 1 });
    $(this).prop('checked', false);
    
       

    ids = $.grep(ids, function(value) {
    return value != trid2;
});

}
             else  {
                 
                var trid = $(this).closest('tr').attr('id');
                 $('#' + trid).css({ opacity: 0.5 });
                 
                 ids.push(trid);
                  
}

       
      }
      
      var submit = '<input id=submit1" type="image" src="https://static.vecteezy.com/system/resources/previews/000/420/300/original/vector-cart-icon.jpg" style="height:50px"; "width=50px" alt="Submit"></input>';
      $('#demo').append('<br>' + submit + '<br> <br>' );
      
      var button1 = $('#demo').append(
        $(document.createElement('button')).prop({
            type: 'button',
            innerHTML: 'My-cart',
            class: 'btn',
            id: 'btn1'
        })
    );
      $('#demo').append('<br> <br>');
      
      var counter = 0;
      var counter2 = 0;
      $('#btn1').on("click", function(){
         
          ++counter;
          if (counter >= 1)
          {
          $('#break1').remove();
          $('#break2').remove();
          $('#total').remove();
          for (i=0; i < 7; i++)
          {
              for (j=0; j<= counter2; j++)
              {
          $('#data0' + j + i + '').remove();
           $('#data1' + j + i + '').remove();
      }
            }
            }
          var total = '<p id="total" style="display:inline;"> Total price: $';
          var total2 = 0;
          var number = 0;
          
          $.each(ids, function (index, value)
                {  
                    counter2++;
                    for (i=0; i < 7; i++)
                    {
                    $('#demo').append('<div id="data0' + counter2 + i + '" style="display:inline;word-spacing:2px;">' + ($('#' + i + i).text()) + ':' + '</div>' );
                    $('#demo').append('<div id="data1' + counter2 + i + '" style="display:inline;word-spacing:2px;">' + ($('#' + value).children(":nth-child(" + (i + 1) + ")").text()) + ' ' + '</div> ');
                    
                }
                var linebreak = '<div id="break1"><br> <br> </div>';
                $('#demo').append(linebreak);
                
                }); 
                for (i= 0; i <ids.length; i ++)
                {
                
            number = $('#' + ids[i]).children(":nth-child(7)").text().replace('$','');
            number = parseInt(number, 10);
            total2 += number;
            
  }
  total += total2;
  total += '</p>';
  var linebreak2 = '<div id="break2"> <br> <br> </div>';
  $('#demo').append(linebreak2);
  $('#demo').append(total);
            
            
    });
       
            
        
           
        });
        
          

         
