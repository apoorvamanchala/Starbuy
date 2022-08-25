
<!DOCTYPE html>
<html>

<head>
<title> Order Form Result</title>
  <link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/>
</head>

<body>
      <div align ="center" id="mainWrapper">
           
           
<center>
<?php
include("connect_to_mysql.php");

// Taking all the values from the form data(input)

$NameOnCard = $_REQUEST['name'];
$CardNumber = $_REQUEST['cardNumber'];
$Month = $_REQUEST['Month'];
$Year = $_REQUEST['Year'];
$CVV = $_REQUEST['cvv'];
$Address = $_REQUEST['address'];




// Performing insert query execution
// here our table name is user
$sql = "INSERT INTO payment (NameOnCard, CardNumber, Month, Year, 
CVV,Address )
VALUES ('$name','$cardNumber','$Month',
'$Year','$CVV','$Address'
)";



if(mysqli_query($conn, $sql)){
echo "<h3>Please confirm your Payment Details here: </h3>";


echo nl2br("\nNameOnCard : $name\n  
CardNumber : $cardNumber\n
Month : $Month\n
Year : $Year\n

");
}
else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}



// Close connection
mysqli_close($conn);
?>
</center>
      </div>
         
            
        </div>
</body>

</html>