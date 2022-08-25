<!DOCTYPE html>
<html>

<head>
<title> Order Form Result</title>
  <link rel="stylesheet" href="style/stylejquery.css" type="text/css" media="screen"/>
</head>

<body>
      <div align ="center" id="mainWrapper">
           <?php include_once("menujquery.php");?>
           
<center>
<?php
include("connect_to_mysql.php");

// Taking all the values from the form data(input)



$NameOnCard = $_REQUEST['name'];
$CardNumber = $_REQUEST['cardNumber'];
$Month=$_REQUEST['Month'];
$Year=$_REQUEST['Year'];
$CVV=$_REQUEST['cvv'];
$Address = $_REQUEST['address'];


// Performing insert query execution
// here our table name is user
$sql = "INSERT INTO payment (NameOnCard, CardNumber, CVV ,Address,Month,Year)
VALUES ('$NameOnCard','$CardNumber','$CVV', '$Address', '$Month', '$Year'
)";



if(mysqli_query($conn, $sql)){
header("location:ty.php");



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
          <?php include_once("template_footer.php");?>
            
        </div>
</body>

</html>