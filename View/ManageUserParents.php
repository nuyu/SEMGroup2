<?php

require_once'../Controller/ParentsController.php';
require_once'../Controller/UsersController.php';

  if(isset($_POST['submit']))
  {

  $parent = new ParentController();

  $parent->update();
  }

$parent = new ParentController();

$pare=$parent->view();

?>


<!DOCTYPE html>
<html>
<head>
	<title>USER PROFILE</title>
	<link rel="stylesheet" type="text/css" href="ManageUser4.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body >
<!--CONTAINER TABLE-->
<header>
  <div style="text-align:center;background-color:#333;color:#FFF">A-Prime Tuition Center</div>
  <h3>U S E R   P R O F I L E</h3>
<div class="navbar">
  <a href="HomepageParent.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserParents.php">User Profile</a>
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="parentchooseclass.php">Student Performance</a>
    </div>
  </div> 

  <a href="payment2.php">Financial</a> 
</div>
</header>
<table style="background-color:darkgray" width="100%"> 
<tr>
<td rowspan="11">

  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','77051_5301485_937863_image.png',1)"><img src=   "77051_5301485_937863_image.png" width="276" height="165" id="Image5" /></a>
  <ul style="padding: 30px 38px">
     <li><a href="ManageUserParents.php">User's Profile</a></li>
     <li><a href="parentchooseclass.php">Student Performance</a></li>
     <li><a href="LogIn.php">Log Out</a></li>
  </ul>

</td>  
  <td>
    <label style="color:black; for="Username">Username*</label>
  </td>
  <td >
     <?php foreach ($pare as $parent) {?>
      <?php }?>
    <input size="50%" type="text" id="Username" name="Username" value="<?php echo $parent['Username'] ?>">
  </td>
  <td>
    <label style="color:black; for="Name">Name*</label>
  </td>
  <td>
    <input size="50%" type="text" id="Name" name="Name" value="<?php echo $parent['Name'] ?>">
  </td>
  <td rowspan="8" width="20%">
    
    <img src="PicParent1.PNG"  /> 

    <p style="text-align: center">
      PARENT
    </p>

  </td>
  </tr>
<tr>
  <td>
    <label style="color:black; for="ParentID">Parent ID*</label>
  </td>
  <td>
     <input size="50%" type="text" id="ParentID" name="ParentID" value="<?php echo $parent['ParentID'] ?>">
  </td>
  <td>
    <label style="color:black; for="IC">IC*</label>
  </td>
  <td>
     <input size="50%" type="text" id="IC" name="IC" value="<?php echo $parent['IC'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="DateJoined">Date Joined</label>
  </td>
  <td>
     <input size="50%" type="Date" id="DateJoined" name="DateJoined">
  </td>
  <td>
    <label style="color:black; for="Gender">Gender*</label>
  </td>
  <td>
     <input size="50%" type="text" id="Gender" name="Gender" value="<?php echo $parent['Gender'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="PhoneNo">Phone Number</label>
  </td>
  <td>
     <input size="50%" type="text" id="PhoneNo" name="PhoneNo">
  </td>
  <td>
    <label style="color:black; for="Email">Email*</label>
  </td>
  <td>
    <input size="50%" type="text" id="Email" name="Email" value="<?php echo $parent['Email'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="Occupation">Occupation</label>
  </td>
  <td colspan="3">
     <input size="120%" type="text" id="Occupation" name="Occupation" value="<?php echo $parent['Occupation'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="Address1">Address</label>
  </td>
  <td colspan="3">
     <input size="120%" type="text" id="Address1" name="Address1" placeholder="Address1" value="<?php echo $parent['Address1'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="120" type="text" id="Address2" name="Address2" placeholder="Address2" value="<?php echo $parent['Address2'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="60%" type="text" id="City" name="City" placeholder="CIty" value="<?php echo $parent['City'] ?>">
     <input size="55%" type="text" id="State" name="State" placeholder="State" value="<?php echo $parent['State'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="60%" type="text" id="PostalCode" name="PostalCode" placeholder="PostalCode" value="<?php echo $parent['PostalCode'] ?>">
     <input size="55%" type="text" id="Country" name="Country" placeholder="Country" value="<?php echo $parent['Country'] ?>">
  </td>
  <td style="text-align: center">
    <input type="submit" name="submit" class="button" value="Save">
    <input type="button" class="button" value="Cancel">
  </td>
</tr>

  </table>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>

</body>
</html>
