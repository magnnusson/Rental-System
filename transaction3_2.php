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

$SDATE = $_POST["sdate2"];
$IDNO =  $_POST["custid2"];
$RDATE = $_POST["rdate2"];
$NWEEKS = $_POST["numweeks"];
$CAR = $_POST["carid2"];

$weeklyRentalSql = "INSERT INTO `WeeklyRental` (`Start_Date`, `Id_No`, `Return_Date`, `Amount_Due`, `NoOfWeeks`, `WeeklyRental_ID`) VALUES ('$SDATE', '$IDNO', '$RDATE', 'NULL', '$NWEEKS', '$CAR')";

if($conn->query($weeklyRentalSql) === TRUE)
{
	echo "Weekly Rental Reservation created successfully.";
} else {
	echo "Error: " . $weeklyRentalSql . "<br>" . $conn->error;
}

?>
</body>
</html>