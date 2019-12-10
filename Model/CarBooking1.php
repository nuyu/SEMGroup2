<html>
<head><title>Car Booking Form</title></head>

<body>
<?php include"Include/MetaLink.php";?>
<?php include"Style.php";?>
<?php include"Include/CustomerHeader.php";?>

<div align="center">
<br><br><h1>CAR BOOKING LOAN</h1></div><br><br>

<table align="center" border="1">

  
<body id="dullbackground">
<form action="CarLoan.php" method="post">
<div class="container">


<div class="row">
<div class="col-25">
<label for="fname">Booking ID</label>
</div>
<div class="col-75">
<input type="text" id="Booking_ID" name="Booking_ID"  value = <?php echo $Booking_ID;?> required>
</div>
</div>
<br>
<div class="row">
<div class="col-25">
<label for="address">Pickup Time</label>
</div>
<div class="col-75">
<input type="time" id="Pickup_Time" name="Pickup_Time"
       value=<?php echo $Pickup_Time?>
       
</div>
</div>

<div class="row">
<div class="col-25">
<label for="date">Pickup Date</label>
</div>
<div class="col-75">
<input type="date" id="Pickup_Date" name="Pickup_Date"  value = <?php echo $Pickup_Date;?> required>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="time">Return Time</label>
</div>
<div class="col-75">
<select id="Return_Time" name="Return_Time"  value = <?php echo $Return_Time;?>>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="Car_Name">Car Name</label>
</div>	
<div class="col-75">
<input type="text" id="Car_Name" name="Car_Name"  value = <?php echo $Car_Name;?> required>
</div>
</div><br>


<div class="row">
<div class="col-25">
<label for="text"><div class="row">
<div class="col-25">
<label for="time">Car Plate</label>
</div>
<div class="col-75">
<select id="Car_Plate" name="Car_Plate"  value = <?php echo $Car_Plate;?>>
</select>
</div>
</div>

<div class="row">
<div class="col-25">
<label for="contact">Car Status</label>
</div>	
<div class="col-75">
<input type="text" id="Car_Status" name="Car_Status"  value = <?php echo $Car_Status;?> required>
</div>
</div><br></label>
</div>



<div class="row">
<input type="submit" class="w3-block w3-right button w3-button" value="Update">
<a href="CustomerProfilePage.php" class="w3-block w3-right button w3-button">Back</a>
</form>
</div>
</div>

<?php include"Include/MainPageFooter.php";?>


  
  
  
  
  
  
  
  
</table>
<br><br>
<div align="center">
<a href ="CarLoan.php?Booking_ID=1" class ="btn btn-info">Submit</a> </div>


</form>
<br><br><hr>
<br><br><div align="center"> <a href="AdministratorHomePage.php">Back to Homepage</a> 
<?php include"Include/MainPageFooter.php";?>
</div>
</body>
</html>


