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
echo "Updating Weekly Rate... <br>";
echo "====================== <br>";

$CAR = $_POST["carid6"];
$WRATE = $_POST["newwrate"];

$updateSql = "UPDATE Car SET WeeklyRate = '$WRATE' WHERE Vehicle_ID = '$CAR'";

if($conn->query($updateSql) === TRUE)
{
	echo "Success!";
} else {
	echo "Error: " . $updateSql . "<br>" . $conn->error;
}
?>
</body>
</html>