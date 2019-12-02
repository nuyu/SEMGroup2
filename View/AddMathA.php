<?php


//include UserController file
require_once '../Controller/AttendanceController.php';

// if form is submitted
 if(isset($_POST['submit'])){



  $attendance= new AttendanceController();
  $attendance->add('AddMath');
  header('Location:viewAddMathA.php');
}


$AttendanceController = new AttendanceController();
$attendances = $AttendanceController->view('AddMath');

?>
<!DOCTYPE html>
<html>

	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTENDANCE</title>


    <link rel="stylesheet" type="text/css" href="attendancecss.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


</head>
<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>A T T E N D A N C E</h3>
<div class="navbar">
  <a href="HomepageTeacher.php">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ManageUserTeachers.php">User Profile</a>
      
    </div>
  </div> 

    <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="addAnnouncement.php">TimeTable</a>
      <a href="chooseclass.php">Attendance</a>
      <a href="chooseclassP.php">Student Performance</a>
    </div>
  </div> 

  <a href="#financial">Financial</a> 
</div>
</header>

<section>
  <nav >
    <form method="POST" action="">
    <table>
        <tr>
            <td><b>Subject :  Additional Mathematics (Section A)</b>
  

            <td><b>Date : <script> document.write(new Date().toLocaleDateString()); 
          </script></br></b>
            </td>
      
        </tr>
        <tr>

        </tr>
    </table>
    
    <table>
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Id Number</th>
    <th>Attend</th>
    <th>Absent</th>
    <th>Remarks</th>
  </tr>
  
  <?php $x=1; ?>
     
<?php
//$Subject = $_REQUEST["Subject"]; 
 //if ($Subject == "AddMath"){
     foreach ($attendances as $attendance) { //loop users data ?>
   
    <tr>
    <td><?php echo "$x. ";?> </td>
    <td><?php echo $attendance['Name']; ?></td>
    <td><?php echo $attendance['StudentID']; ?></td>
   
<?php
    echo '<td><input type="radio" name="attendance['.$x.']" value="present" checked="checked" />
         <td><input type="radio" name="attendance['.$x.']" value="absent">
          </td> 
          <td><input type="text" name="remarks['.$x.']" value="-"></td>'?>


<?php $x=$x+1; ?>
     <?php } ?>



 
    <input type="submit" name="submit" class="button" value="Submit">

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