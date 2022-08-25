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
$first_name = $_REQUEST['fusername'];
$last_name = $_REQUEST['lusername'];
$phone_number = $_REQUEST['userphone'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip_code = $_REQUEST['userzip'];
$address = $_REQUEST['useraddress'];

// Performing insert query execution
// here our table name is user
$sql = "INSERT INTO address (First_Name,Last_Name,PhoneNumber ,State,City,Zipcode,Address )
VALUES ('$first_name','$last_name','$phone_number','$state','$city','$zip_code','$address')";

if(mysqli_query($conn, $sql)){
echo "<h3> Shipping Address stored in a database successfully."
. " Please browse your localhost php my admin"
. " to view the data</h3>";

echo nl2br("\nFirst Name : $first_name\n  
Last Name : $last_name\n
Phone Number : $phone_number\n
State : $state\n
City : $city\
Zip Code : $zip_code\n
    Address : $address\n
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
          <?php include_once("template_footer.php");?>
            
        </div>
</body>

</html>