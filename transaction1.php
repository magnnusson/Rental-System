<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "RENTAL_SYSTEM";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Inserting Record... <br>";
echo "====================== <br>";

$IDNO =  $_POST["idno"];
$PHONE = $_POST["phone"];
$FINIT = $_POST["finit"];
$LNAME = $_POST["lname"];

$customerSql = "INSERT INTO `Customer` (`Id_No`, `Phone`, `Finit`, `Lname`) VALUES ('$IDNO', '$PHONE', '$FINIT', '$LNAME')";

if($conn->query($customerSql) === TRUE)
{
	echo "New Customer created successfully.";
} else {
	echo "Error: " . $customerSql . "<br>" . $conn->error;
}

?>
</body>
</html>