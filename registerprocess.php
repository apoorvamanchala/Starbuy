<?php $title="Register Process"; ?>
<?php include_once("headerlogin.php");?>

<center>
<?php
include("connect_to_mysql.php");

// Taking all the values(data) from the registration form (input)
$first_name = $_REQUEST['fusername'];
$last_name = $_REQUEST['lusername'];
$username = $_REQUEST['email'];
$phone_number = $_REQUEST['userphone'];
$password = $_REQUEST['password'];
$Date_of_Birth = $_REQUEST['birthday'];
$gender = $_REQUEST['gender'];
$interest = $_REQUEST['data'];
$allData = implode(",",$interest);
$state = $_REQUEST['state'];
$city = $_REQUEST['city'];
$zip_code = $_REQUEST['userzip'];
$address = $_REQUEST['useraddress'];

// Performing insert query execution
// here our table name is user
$sql = "INSERT INTO user (username,password,first_name,last_name,mobilenumber,
dateofbirth, gender , interest,address,city,state,zipcode )
VALUES ('$username','$password','$first_name','$last_name','$phone_number',
'$Date_of_Birth','$gender','$allData','$address','$city','$state','$zip_code'
)";

if(mysqli_query($conn, $sql)){
echo "<h3>Thank you for Signing up! Please login to continue.</h3>";
header("Location: login.php");
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
    