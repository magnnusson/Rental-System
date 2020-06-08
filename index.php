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
echo "Connected successfully <br>";
echo "====================== <br>";

echo "Here are all current Weekly Rentals: <br>";
$sql1 = "SELECT Customer.Id_No, Phone, Finit, Lname, WeeklyRental.Start_Date, WeeklyRental.Return_Date, Amount_Due, NoOfWeeks, Car.Vehicle_ID, Model, Year, Type, WeeklyRate FROM Customer, WeeklyRental, Car WHERE Customer.Id_No=WeeklyRental.Id_No and WeeklyRental.WeeklyRental_ID=Car.Vehicle_ID";
$result1 = $conn -> query($sql1);
if($result1)
{
	while($row1 = $result1 -> fetch_assoc())
	{
		echo "Customer ID: ".$row1["Id_No"]. ", Phone: ".$row1["Phone"]. ", Name: ".$row1["Finit"]. " ".$row1["Lname"]. ", Start Date: ".$row1["Start_Date"]. ", Return Date: ".$row1["Return_Date"]. ", Amount Due: $".$row1["Amount_Due"]. ", Weeks: ".$row1["NoOfWeeks"]. ", Vehicle ID: ".$row1["Vehicle_ID"]. ", Model: ".$row1["Model"]. ", Year: ".$row1["Year"]. ", Type: ".$row1["Type"]. ", Weekly Rate: $".$row1["WeeklyRate"]."<br><br>";
	}

}else
{
	echo "0 Results";
}
echo "<br>";
echo "Here are all current Daily Rentals: <br>";
$sql2 = "SELECT Customer.Id_No, Phone, Finit, Lname, DailyRental.Start_Date, Return_Date, Amount_Due, NoOfDays, Car.Vehicle_ID, Model, Year, Type, DailyRate FROM Customer, DailyRental, Car WHERE Customer.Id_No=DailyRental.Id_No and DailyRental.DailyRental_ID=Car.Vehicle_ID";
$result2 = $conn -> query($sql2);
if($result2)
{
	while($row2 = $result2 -> fetch_assoc())
	{
		echo "Customer ID: ".$row2["Id_No"]. ", Phone: ".$row2["Phone"]. ", Name: ".$row2["Finit"]. " ".$row2["Lname"]. ", Start Date: ".$row2["Start_Date"]. ", Return Date: ".$row2["Return_Date"]. ", Amount Due: $".$row2["Amount_Due"]. ", Days: ".$row2["NoOfDays"]. ", Vehicle ID: ".$row2["Vehicle_ID"]. ", Model: ".$row2["Model"]. ", Year: ".$row2["Year"]. ", Type: ".$row2["Type"]. ", Daily Rate: $".$row2["DailyRate"]."<br><br>";
	}

}else
{
	echo "0 Results";
}

echo "<br>";
echo "Please choose a transaction: <br>";
?>
<h1> New Customer </h1>
<form action="transaction1.php" method="post">
	ID Number: <input type="text" name="idno"><br>
	Phone: <input type="text" name="phone"><br>
	First Initial: <input type="text" name="finit"><br>
	Last Name: <input type="text" name="lname"><br>
	<input type ="submit">
</form>

<h1> New Car </h1>
<form action="transaction2.php" method="post">
	Vehicle ID: <input type="text" name="vehicleid"><br>
	Model: <input type="text" name="model"><br>
	Year: <input type="text" name="year"><br>
	Type: <input type="text" name="type"><br>
	Daily Rate: <input type="text" name="drate"><br>
	Weekly Rate: <input type="text" name="wrate"><br>
	<input type ="submit">
</form>

<h1> New Daily Rental Reservation </h1>
<form action="transaction3_1.php" method="post">
	Start Date (YYYY-MM-DD): <input type="text" name="sdate1"><br>
	Customer ID: <input type="text" name="custid1"><br>
	Return Date (YYYY-MM-DD): <input type="text" name="rdate1"><br>
	Number of Days: <input type="text" name="numdays"><br>
	Vehicle ID: <input type="text" name="carid1"><br>
	<input type ="submit">
</form>

<h1> New Weekly Rental Reservation </h1>
<form action="transaction3_2.php" method="post">
	Start Date (YYYY-MM-DD): <input type="text" name="sdate2"><br>
	Customer ID: <input type="text" name="custid2"><br>
	Return Date (YYYY-MM-DD): <input type="text" name="rdate2"><br>
	Number of Weeks: <input type="text" name="numweeks"><br>
	Vehicle ID: <input type="text" name="carid2"><br>
	<input type ="submit">
</form>

<h1> Return a Daily Rental Car </h1>
<form action="transaction4_1.php" method="post">
	Customer ID: <input type="text" name="custid3"><br>
	Vehicle ID: <input type="text" name="carid3"><br>
	<input type ="submit">
</form>

<h1> Return a Weekly Rental Car </h1>
<form action="transaction4_2.php" method="post">
	Customer ID: <input type="text" name="custid4"><br>
	Vehicle ID: <input type="text" name="carid4"><br>
	<input type ="submit">
</form>

<h1> Update Daily Rate of a Car </h1>
<form action="transaction5_1.php" method="post">
	Vehicle ID: <input type="text" name="carid5"><br>
	New Daily Rate: <input type="text" name="newdrate"><br>
	<input type ="submit">
</form>

<h1> Update Weekly Rate of a Car </h1>
<form action="transaction5_2.php" method="post">
	Vehicle ID: <input type="text" name="carid6"><br>
	New Weekly Rate: <input type="text" name="newwrate"><br>
	<input type ="submit">
</form>

</body>
</html>