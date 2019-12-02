<?php
//include UserController file

require_once '../Controller/PerformanceController.php';

 if(isset($_POST['edit'])){

  header('Location:markeditaddmatha.php');
}
//create new controller
$PerformanceController = new PerformanceController();

//assign data from db
$addmarks = $PerformanceController->viewStudent('AddMath');
?>


<!DOCTYPE html>
<html>
<head>
  <title>STUDENT PAGE</title>
  <link rel="stylesheet" type="text/css" href="interfaceTeacher.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>STUDENT PERFORMANCE</h3>
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

<section>
  <nav>
  	<!--
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Assessment')">Assessment</button>
    <button class="tablinks" onclick="openCity(event, 'Performance')">Performance</button>
  </div>
  <div id="Assessment" class="tabcontent">
-->
  <form method="POST" action="">

    <table align="center">
  <tr>
     <td><b>Subject :  Additional Mathematics (Section A)</b>
</table>

<div id="table" align="center">
<table border="1" width="80%" cellpadding= "3" align="center">

<tr>
  <th style="background-color:blue">NAME</th>
  <th style="background-color:blue">MATRIC ID</th>
  <th style="background-color:blue">ATTENDANCE</th>
  <th style="background-color:blue">MARK 1</th>
  <th style="background-color:blue">COMMENT</th>
</tr>

  <?php $x=1; ?>

<?php
foreach($addmarks as $addmark)
{ //loop user data?>

<tr>
<td style="background-color:powderblue"><?php echo $addmark['Name']; ?>
</td>
<td style="background-color:powderblue"><?php echo $addmark['StudentID']; ?>
</td>
</td>
<td style="background-color:powderblue"><?php echo $addmark['totalattendance']; ?>
</td>
<td style="background-color:powderblue"><?php echo $addmark['mark']; ?>
</td>
<td style="background-color:powderblue"><?php echo $addmark['comment']; ?>
</td>


<?php $x=$x+1; ?>
     <?php } ?>



<input type="button" class="button" onclick="myFunction()" value="Print">
</form>
</table>
</div>
</div>


<!--
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
-->

<script type="text/javascript">
function myFunction() {
  alert("The student performance is successfully print!");
}
  //get the modal
  var modal = document.getElementById("myModal");

  //get the button that opens the modal
  var btn = document.getElementById("myBtn");

  var span = document.getElementByClassName("close")[0];

  btn.onclick = function(){
    modal.style.display = "block";
  }

  span.onclick = function(){
    modal.style.display = "none";
  }

  window.onclick = function(event){
    if(event.target == modal) {
      modal.style.display ="none";
    }
  }

</script>
</nav>

 <announce>
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
    
  </announce>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>

</body>
</html>