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
echo "Finding Reservation... <br>";
echo "====================== <br>";

$CUST = $_POST["custid3"];
$CAR = $_POST["carid3"];

$returnSql = "SELECT Customer.Id_No, Phone, Finit, Lname, DailyRental.Start_Date, Return_Date, NoOfDays, Car.Vehicle_ID, Model, Year, Type, DailyRate FROM Customer, DailyRental, Car WHERE Customer.Id_No=$CUST and DailyRental.DailyRental_ID=$CAR and Car.Vehicle_ID = $CAR";

$result = $conn -> query($returnSql);
if($result)
{
	while($row = $result -> fetch_assoc())
	{
		echo "Customer ID: ".$row["Id_No"]. ", Phone: ".$row["Phone"]. ", Name: ".$row["Finit"]. " ".$row["Lname"]. ", Start Date: ".$row["Start_Date"]. ", Return Date: ".$row["Return_Date"]. ", Days: ".$row["NoOfDays"]. ", Vehicle ID: ".$row["Vehicle_ID"]. ", Model: ".$row["Model"]. ", Year: ".$row["Year"]. ", Type: ".$row["Type"]. ", Daily Rate: $".$row["DailyRate"]."<br><br>";

		$NODAYS = $row["NoOfDays"];
		$DRATE = $row["DailyRate"];

	}

}else
{
	echo "0 Results";
}

$returnSql2 = "UPDATE DailyRental SET Amount_Due = '$NODAYS'*'DRATE' WHERE Id_No = '$CUST'";

echo "$". $NODAYS * $DRATE ." is the amount due!";

?>
</body>
</html>