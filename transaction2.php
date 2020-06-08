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

$VID = $_POST["vehicleid"];
$MODEL = $_POST["model"];
$YEAR = $_POST["year"];
$TYPE = $_POST["type"];
$DRATE = $_POST["drate"];
$WRATE = $_POST["wrate"];

$carSql = "INSERT INTO `Car` (`Vehicle_ID`, `Model`, `Year`, `Type`, `DailyRate`, `WeeklyRate`) VALUES ('$VID', '$MODEL', '$YEAR', '$TYPE', '$DRATE', '$WRATE')";

if($conn->query($carSql) === TRUE)
{
	echo "New Car created successfully.";
} else {
	echo "Error: " . $carSql . "<br>" . $conn->error;
}

?>
</body>
</html>