<?php $title="Display Table Data"; ?>
<?php include_once("header.php");?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "starbuy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Data of User Table : ". "<br>";
$sql = "SELECT `username`, `password`, `first_name`, `last_name`, `MobileNumber`, `DateOfBirth`, `Gender`, `Interest`, `Address`, `City`, `State`, `Zipcode` FROM `user`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		 
        echo "<br> Username: ". $row["username"]. " - first_name: ". $row["first_name"] ." - last_name: ". $row["last_name"] .
 " - MobileNumber: ". $row["MobileNumber"] ." - DateOfBirth: ". $row["DateOfBirth"] ." - Gender: ". $row["Gender"] .
 " - Interest: ". $row["Interest"] . " - Address: ". $row["Address"] ." - City: ". $row["City"] ." - State: ". $row["State"] .
 " - Zipcode: ". $row["Zipcode"] .


		"<br>";
    }
} else {
    echo "0 results";
}
echo "<br> Data of Payment Table : ". "<br>";
$sql1 = "SELECT `NameOnCard`, `CardNumber`, `Month`, `Year`, `CVV`, `Address` FROM `payment`";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    
	while($row = $result1->fetch_assoc()) {
        echo "<br> NameOnCard: ". $row["NameOnCard"]. " - CardNumber: ". $row["CardNumber"] .
" - Month: ". $row["Month"] ." - Year: ". $row["Year"] ." - CVV: ". $row["CVV"] .	
" - Address: ". $row["Address"] ."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 <?php include_once("template_footer.php");?>