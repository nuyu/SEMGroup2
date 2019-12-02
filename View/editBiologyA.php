<?php
//include AttendanceController file

require_once '../Controller/AttendanceController.php';

 if(isset($_POST['save'])){

  $attendance= new AttendanceController();
  $attendance->add('Biology');
  header('Location:viewBiologyA.php');
}
//create new controller
$AttendanceController = new AttendanceController();

//assign data from db
$attendances = $AttendanceController->view('Biology');
?>


<!DOCTYPE html>
<html>
<head>
    <title>ATTENDANCE</title>
    <link rel="stylesheet" type="text/css" href="attendancecss.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>A T T E N D A N C E</h3>
<div class="navbar">
  <a href="#home">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">User Profile</a>
      <a href="#">User Directory</a>
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">TimeTable</a>
      <a href="#">Attendance</a>
      <a href="#">Subject Registration</a>
      <a href="#">Student Performance</a>
    </div>
  </div> 

  <a href="#financial">Financial</a> 
</div>
</header>

<section>
  <nav>
    <form method="POST" action="">
    <table>
        <tr>
            <td><b>Subject :  Biology (Section A) </td>
            <td><b>Date : <script> document.write(new Date().toLocaleDateString()); 
          </script></br></b>
            </td>
            
        </tr>
        <tr>
            </br>
        </tr>
    </table>
    
    <table>
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Id Number</th>
    <th>Attendance</th>
    <th>Remarks</th>
  </tr>
  <tr>


<?php $x=1; ?>

  <?php foreach ($attendances as $attendance) { //loop users data ?>
    
    <tr>
    <td><?php echo "$x. ";?> </td>
    <td><?php echo $attendance['studentname']; ?></td>
    <td><?php echo $attendance['studentid']; ?></td>    
    <td><?php echo '<input type="text" size="10" name="attendance['.$x.']"'?> value="<?php echo $attendance['attendance'] ?>"</td>
    <td><?php echo '<input type="text" size="10" name="remarks['.$x.']"'?> value="<?php echo $attendance['remarks'] ?>"</td>
    </tr>
  
 <?php $x=$x+1; ?>
  <?php } ?>



    <input type="submit" name="save"= class="button" value="Save">


</table>
</form>

        
  </nav>
  
  <article>
    <p align="center" ><font color="white" size="6"><b>Announcement</b></font></p>
    <div style="height:150px;width:270px;background-color: white;border:1px solid #ccc;font:12px/20px Georgia, Garamond, Serif;overflow:auto;" >
    Additional Mathematics class on Sunday morning has been cancelled.
    <br>
    -----------------------------------------
    <br>
    Physics class on Sunday night has been cancelled.
    <br>
    -----------------------------------------
    <br>
    Biology class on Saturday morning has been cancelled.
    <br>
    -----------------------------------------
    <br>
    Mathematics class on Saturday night has been cancelled.
    <br>
    -----------------------------------------
    <br>

    </div>
        
  </article>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>