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
echo "Updating Daily Rate... <br>";
echo "====================== <br>";

$CAR = $_POST["carid5"];
$DRATE = $_POST["newdrate"];

$updateSql = "UPDATE Car SET DailyRate = '$DRATE' WHERE Vehicle_ID = '$CAR'";

if($conn->query($updateSql) === TRUE)
{
	echo "Success!";
} else {
	echo "Error: " . $updateSql . "<br>" . $conn->error;
}
?>
</body>
</html>