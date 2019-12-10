<html>
<head><title>Success Add New Car Loan</title></head>



<h1>Success add new car loan</h1>
<?php
include"Include/MetaLink.php";
include"Style.php";
include"Include/CustomerHeader.php";?>
include("config.php");
	
	// to make a connection with database
	

	// to select the targeted database
	
	
	//get values form input text and number
	$Booking_ID = $_POST['Booking_ID'];
	$Pickup_Time = $_POST['Pickup_Time'];
	$Pickup_Date = $_POST['Pickup_Date'];
	$Return_Time = $_POST['Return_Time'];
	$Return_Date = $_POST['Return_Date'];
	$Car_Name = $_POST['Car_Name'];
	$Car_Plate = $_POST['Car_Plate'];
	$Car_Status = $_POST['Car_Status'];
	$Status_Rent = $_POST['Status_Rent'];
	
	
	
	// to create a query to be executed in sql
	
	mysqli_query($link,"insert into book_loan (Booking_ID,Pickup_Time,Pickup_Date,Return_Time,Return_Date, Car_Name, Car_Plate, Car_Status, Status_Rent) values ('$Booking_ID','$Pickup_Time','$Pickup_Date','$Return_Time','$Return_Date', '$Car_Name', '$Car_Plate', '$Car_Status' '$Status_Rent')");
	
	echo "<script>window.alert('Information Successfully Submitted!!')</script>";
	//echo "<script>alert('Information Successfully Submitted!!')</script>";



	mysqli_close($link);        		
	 
?>



</head>
  <body>  
  <form>
  
  <table border="1">
  
    <tr>
	<th>Booking ID</th>
    <th>Pickup Time</th>
    <th>Pickup Date</th> 
    <th>Return Time</th>
	<th>Return Date</th>
	<th>Car Name</th>
	<th>Car Plate</th>
	<th>Car Status</th>
  </tr>
  
  <tr>
    <td><?php echo $_POST["Booking_ID"];?></td>
	<td><?php echo $_POST["Pickup_Time"];?></td>
    <td><?php echo $_POST["Pickup_Date"];?></td>
    <td><?php echo $_POST["Return_Time"];?></td>
	<td><?php echo $_POST["Return_Date"];?></td>
	<td><?php echo $_POST["Car_Name"];?></td>
    <td><?php echo $_POST["Car_Plate"];?></td>
	<td><?php echo $_POST["Car_Status"];?></td>

	<td><?php echo $_POST["Status_Rent"];?></td>
  </tr>
  
</table>
</form>
<br><br><hr>
<br><br><div align="center"><a href="AdministratorHomePage.php">Back to Homepage </a> 

</div>

</body>  
</html>