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

$CUST = $_POST["custid4"];
$CAR = $_POST["carid4"];

$returnSql = "SELECT Customer.Id_No, Phone, Finit, Lname, WeeklyRental.Start_Date, WeeklyRental.Return_Date, Amount_Due, NoOfWeeks, Car.Vehicle_ID, Model, Year, Type, WeeklyRate FROM Customer, WeeklyRental, Car WHERE Customer.Id_No=WeeklyRental.Id_No and WeeklyRental.WeeklyRental_ID=Car.Vehicle_ID and Car.Vehicle_ID=$CAR";

$result = $conn -> query($returnSql);
if($result)
{
	while($row = $result -> fetch_assoc())
	{
		echo "Customer ID: ".$row["Id_No"]. ", Phone: ".$row["Phone"]. ", Name: ".$row["Finit"]. " ".$row["Lname"]. ", Start Date: ".$row["Start_Date"]. ", Return Date: ".$row["Return_Date"]. ", Weeks: ".$row["NoOfWeeks"]. ", Vehicle ID: ".$row["Vehicle_ID"]. ", Model: ".$row["Model"]. ", Year: ".$row["Year"]. ", Type: ".$row["Type"]. ", Weekly Rate: $".$row["WeeklyRate"]."<br><br>";

		$NOWEEKS = $row["NoOfWeeks"];
		$WRATE = $row["WeeklyRate"];
	}

}else
{
	echo "0 Results";
}

$returnSql2 = "UPDATE WeeklyRental SET Amount_Due = '$NOWEEKS'*'WRATE' WHERE Id_No = '$CUST'";

echo "$". $NOWEEKS * $WRATE ." is the amount due!";

?>
</body>
</html>