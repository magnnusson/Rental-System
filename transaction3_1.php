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
echo "Creating Reservation... <br>";
echo "====================== <br>";

$SDATE = $_POST["sdate1"];
$IDNO =  $_POST["custid1"];
$RDATE = $_POST["rdate1"];
$NDAYS = $_POST["numdays"];
$CAR = $_POST["carid1"];

$dailyRentalSql = "INSERT INTO `DailyRental` (`Start_Date`, `Id_No`, `Return_Date`, `Amount_Due`, `NoOfDays`, `DailyRental_ID`) VALUES ('$SDATE', '$IDNO', '$RDATE', NULL, '$NDAYS', '$CAR')";

if($conn->query($dailyRentalSql) === TRUE)
{
	echo "Daily Rental Reservation created successfully.";
} else {
	echo "Error: " . $dailyRentalSql . "<br>" . $conn->error;
}

?>
</body>
</html>