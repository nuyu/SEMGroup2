<?php

require_once'../Controller/StudentsController.php';
require_once'../Controller/UsersController.php';
  //if form is submited
  if(isset($_POST['submit'])){

  $student = new StudentController();

  $student->update();
}

$student = new StudentController();

$stud=$student->view();

?>

<!DOCTYPE html>
<html>
<head>
	<title>USER PROFILE</title>
	<link rel="stylesheet" type="text/css" href="ManageUser1.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body >
<!--CONTAINER TABLE-->
<header>
  <div style="text-align:center;background-color:#333;color:#FFF">A-Prime Tuition Center</div>
  <h3>U S E R   P R O F I L E</h3>
<div class="navbar">
  <a href="HomepageStudent.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserStudents.php">User Profile</a>
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="TimeTableStudent.php">TimeTable</a>
      <a href="subjectRegistration.php">Subject Registration</a>
      <a href="studentchooseclass.php">Student Performance</a>
    </div>
  </div> 

  <a href="payment3.php">Financial</a> 
</div>
</header>
<form method="POST" action="">
<table style="background-color:darkgray" width="100%"> 
<tr>
<td rowspan="11">

  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','77051_5301485_937863_image.png',1)"><img src=   "77051_5301485_937863_image.png" width="276" height="165" id="Image5" /></a>
  <ul style="padding: 30px 38px">
     <li><a href="ManageUserStudents.php">User's Profile</a></li>
     <li><a href="studentchooseclass.php">Student Performance</a></li>
     <li><a href="subjectRegistration.php">Subject</a></li>
     <li><a href="LogIn.php">Log Out</a></li>
  </ul>

</td>  

<?php foreach ($stud as $student) {?>
      <?php }?>
  <td>
    <label style="color:black; for="Username">Username*</label>
  </td>
  <td >
        
    <input size="30%" type="text" id="Username" name="Username" value="<?php echo $student['Username'] ?>">
  
  </td>
  <td>
    <label style="color:black; for=" Name">Name*</label>
  </td>
  <td>
    <input size="30%" type="text" id="Name" name="Name" value="<?php echo $student['Name'] ?>">
  </td>

  <td rowspan="9" width="20%">
    
    <img src="Picstud1.PNG"  /> 

    <p style="text-align: center">
      STUDENT
    </p>

  </td>
  </tr>
<tr>
  <td>
    <label style="color:black; for="StudentID">Student ID*</label>
  </td>
  <td>
     <input size="30%" type="text" id="StudentID" name="StudentID" value="<?php echo $student['StudentID'] ?>">
  </td>
  <td>
    <label style="color:black; for="IC">IC*</label>
  </td>
  <td>
     <input size="30%" type="text" id="IC" name="IC" value="<?php echo $student['IC'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="DateJoined">Date Joined</label>
  </td>
  <td>
     <input size="30%" type="Date" id="DateJoined" name="DateJoined" placeholder="0000-00-00">
  </td>
  <td>
    <label style="color:black; for="Gender">Gender*</label>
  </td>
  <td>
     <input size="30%" type="text" id="Gender" name="Gender" value="<?php echo $student['Gender'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="PhoneNo">Phone Number</label>
  </td>
  <td>
     <input size="30%" type="text" id="PhoneNo" name="PhoneNo" required value="<?php echo $student['PhoneNo'] ?>">
  </td>
  <td>
    <label style="color:black; for="Email">Email*</label>
  </td>
  <td>
    <input size="30%" type="text" id="Email" name="Email" value="<?php echo $student['Email'] ?>">
  
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="FatherName">Father's Name</label>
  </td>
  <td>
     <input size="30%" type="text" id="FatherName" name="FatherName" value="<?php echo $student['FatherName'] ?>">
  </td>
  <td>
    <label style="color:black; for="ParentID">Parent ID</label>
  </td>
  <td>
     <input size="30%" type="text" id="ParentID" name="ParentID" value="<?php echo $student['ParentID'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="MotherName">Mother's Name</label>
  </td>
  <td>
     <input size="30%" type="text" id="MotherName" name="MotherName" value="<?php echo $student['MotherName'] ?>">
  </td>
  <td>
    <label style="color:black; for="GuardianNo">Contact Number</label>
  </td>
  <td>
     <input size="30%" type="text" id="GuardianNo" name="GuardianNo" value="<?php echo $student['GuardianNo'] ?>">
  </td>
</tr>
<tr>
  <td>
    <label style="color:black; for="Address1">Address</label>
  </td>
  <td colspan="3">
     <input size="110%" type="text" id="Address1" name="Address1" placeholder="Address1" value="<?php echo $student['Address1'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="110%" type="text" id="Address2" name="Address2" placeholder="Address2" value="<?php echo $student['Address2'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="50%" type="text" id="City" name="City" placeholder="City" value="<?php echo $student['City'] ?>">
     <input size="55%" type="text" id="State" name="State" placeholder="State" value="<?php echo $student['State'] ?>">
  </td>
</tr>
<tr>
  <td>
  </td>
  <td colspan="3">
     <input size="50%" type="text" id="PostalCode" name="PostalCode" placeholder="PostalCode" value="<?php echo $student['PostalCode'] ?>">
     <input size="55%" type="text" id="Country" name="Country" placeholder="Country" value="<?php echo $student['Country'] ?>">
  </td>
  <td style="text-align: center;">
    <input type="submit" name="submit" class="button" value="Save">
    <input type="submit" name="submit" class="button" value="Cancel">
  </td>
</tr>

  </table>
</form>
<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>

</body>
</html>
