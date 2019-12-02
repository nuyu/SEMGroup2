<?php

require_once'../Controller/StaffsController.php';
require_once'../Controller/UsersController.php';
  if(isset($_POST['submit'])){

  $staff = new StaffController();

  $staff->update();
}

$staff = new StaffController();

$staf=$staff->view();

?>



<!DOCTYPE html>
<html>
<head>
  <title>USER PROFILE</title>
  <link rel="stylesheet" type="text/css" href="ManageUser3.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body >
<!--CONTAINER TABLE-->
<header>
  <div style="text-align:center;background-color:#333;color:#FFF">A-Prime Tuition Center</div>
  <h3>U S E R   P R O F I L E</h3>
<div class="navbar">
  <a href="HomepageStaff.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserStaffs.php">User Profile</a>
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addTimetable.php">TimeTable</a>
      <a href="chooseclass(staff).php">Attendance</a>
      <a href="chooseclassSR.php">Subject Registration</a>
      <a href="staffchooseclass.php">Student Performance</a>
    </div>
  </div> 

  <a href="payment1.php">Financial</a> 
</div>
</header>
<table style="background-color:darkgray" width="100%"> 
<tr>
<td rowspan="11">

  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','77051_5301485_937863_image.png',1)"><img src=   "77051_5301485_937863_image.png" width="276" height="165" id="Image5" /></a>
  <ul style="padding: 30px 38px">
     <li><a href="ManageUserStaffs.php">User's Profile</a></li>
     <li><a href="staffchooseclass.php">Student Performance</a></li>
     <li><a href="chooseclassSR.php">Subject</a></li>
     <li><a href="chooseclass(staff).php">Attendance</a></li>
     <li><a href="LogIn.php">Log Out</a></li>
  </ul>

</td>  
<form method="POST" action="">
  <td>
    <label style="color:black; for="Username">Username*</label>
  </td>
  <td >
    <?php foreach ($staf as $staff) {?>
      <?php }?>
    <input size="50%" type="text" id="Username" name="Username" value="<?php echo $staff['Username'] ?>">
  </td>
  <td>
    <label style="color:black; for="Name">Name*</label>
  </td>
  <td>
    <input size="50%" type="text" id="Name" name="Name" value="<?php echo $staff['Name'] ?>">
  </td>
  <td rowspan="8" width="20%">
    
    <img src="PicStaff1.PNG"  /> 

    <p style="text-align: center">
      STAFF
    </p>

  </td>
  </tr>
<tr>
  <td>
    <label style="color:black; for="StaffID">Staff ID*</label>
  </td>
  <td>
     <input size="50%" type="text" id="StaffID" name="StaffID" value="<?php echo $staff['StaffID'] ?>">
  </td>
  <td>
    <label style="color:black; for="IC">IC*</label>
  </td>
  <td>
     <input size="50%" type="text" id="IC" name="IC" value="<?php echo $staff['IC'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="DateJoined">Date Joined</label>
  </td>
  <td>
     <input size="50%" type="Date" id="DateJoined" name="DateJoined" placeholder="0000-00-00">
  </td>
  <td>
    <label style="color:black; for="Gender">Gender*</label>
  </td>
  <td>
     <input size="50%" type="text" id="Gender" name="Gender" value="<?php echo $staff['Gender'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="PhoneNo">Phone Number</label>
  </td>
  <td>
     <input size="50%" type="text" id="PhoneNo" name="PhoneNo" value="<?php echo $staff['PhoneNo'] ?>">
  </td>
 <td>
    <label style="color:black; for="Email">Email*</label>
  </td>
  <td>
    <input size="50%" type="text" id="Email" name="Email" value="<?php echo $staff['Email'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="Position">Position</label>
  </td>
  <td colspan="3">
     <input size="120%" type="text" id="Position" name="Position" value="<?php echo $staff['Position'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="Address1">Address</label>
  </td>
  <td colspan="3">
     <input size="120%" type="text" id="Address1" name="Address1" placeholder="Address1" value="<?php echo $staff['Address1'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="120" type="text" id="Address2" name="Address2" placeholder="Address2" value="<?php echo $staff['Address2'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="60%" type="text" id="City" name="City" placeholder="City" value="<?php echo $staff['City'] ?>">
     <input size="55%" type="text" id="State" name="State" placeholder="State" value="<?php echo $staff['State'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="60%" type="text" id="PostalCode" name="PostalCode" placeholder="PostalCode" value="<?php echo $staff['PostalCode'] ?>">
     <input size="55%" type="text" id="Country" name="Country" placeholder="Country" value="<?php echo $staff['Country'] ?>">
  </td>
  <td style="text-align: center">
    <input type="submit" name="submit" class="button" value="Save">
    <input type="button" class="button" value="Cancel">
  </td>
</tr>

  </table>
</form>
<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>

</body>
</html>
