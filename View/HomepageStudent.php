<?php

  require_once'../Controller/StudentsController.php';
  
  if(isset($_POST['submit']))
  {

  $student = new StudentController();

  $student->update();
  }

  $student = new StudentController();

  $stud=$student->view();


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="ManageUser1.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body >
<!--CONTAINER TABLE-->
<header>
  <div style="text-align:center;background-color:#333;color:#FFF">A-Prime Tuition Center</div>
  <h3>A-PRIME LEARNING CENTER</h3>
</header>
<table style="background-color:darkgray" width="100%"> 
<tr>
<td width="10%">

  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','77051_5301485_937863_image.png',1)"><img src=   "77051_5301485_937863_image.png" width="276" height="165" id="Image5" /></a>
</td>
<td>
  <div style="background-color: white; padding: 4px" >
    <?php foreach ($stud as $student) {?>
      <?php }?>
    <p><?php echo $student['Name'];?></p>
    <p><?php echo $student['StudentID'];?></p>
    <p>STUDENT</p>
    <p> " OUR GREATEST WEAKNESS LIES IN GIVING UP THE MOST CERTAIN WAY TO SUCCEED IS ALWAYS TO TRY JUST ONE MORE TIME"</p>
  </div>
</td>
</tr>
<tr>
<td>
  <ul style="padding: 75px 38px">
     <li><a href="ManageUserStudents.php">User's Profile</a></li>
     <li><a href="studentchooseclass.php">Student Performance</a></li>
     <li><a href="subjectRegistration.php">Subject</a></li>
     <li><a href="LogIn.php">Log Out</a></li>
  </ul>
</td>
<td>

  <div style="background-color: #5882FA; padding: 25px" >
    <p align="left" ><font color="white" size="6"><b>Announcement</b></font></p>
    <div style="height:220px;width:800px;background-color: white;border:0px solid #ccc;font:12px/20px Georgia, Garamond, Serif;overflow:auto;" >
    Additional Mathematics class on Sunday morning has been cancelled.
    <br>
    -----------------------------------------
    <br>
    Physics class on Sunday night has been cancelled.
    <br>
    -----------------------------------------
    <br>
    Biology class on Saturday morning has been cancelled.
    <br>S
    -----------------------------------------
    <br>
    Mathematics class on Saturday night has been cancelled.
    <br>
    -----------------------------------------
    <br>

    </div>


  </div>
</td>
</tr>
</div>
  
  </table>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>

</body>
</html>
