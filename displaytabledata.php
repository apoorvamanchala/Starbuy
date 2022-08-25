<!DOCTYPE html>
<html>
<body>
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
echo "Data of Interest Table : ". "<br>";
$sql = "SELECT ID,Interest_Name FROM interests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		 
        echo "<br> ID: ". $row["ID"]. " - Interest_Name: ". $row["Interest_Name"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br> Data of State Table : ". "<br>";
$sql1 = "SELECT ID,State_Name FROM state";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    
	while($row = $result1->fetch_assoc()) {
        echo "<br> ID: ". $row["ID"]. " - State_Name: ". $row["State_Name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

 <?php include_once("template_footer.php");?>