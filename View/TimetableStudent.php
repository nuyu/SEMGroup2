<?php
require_once '../Controller/AnnouncementController.php';
$AnnouncementController = new AnnouncementController();

//assign data from db to variable $users
$announcement = $AnnouncementController->view();

?>
<!DOCTYPE html>
<html>
<head>
  <title>TIMETABLE STUDENT</title>
  <link rel="stylesheet" type="text/css" href="Timetable(Student).css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>T I M E T A B L E</h3>
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
    <table style="width:90%">
      <table class="table1" style="width:90%">
  <tr>
    <th style="background-color:blue">SUBJECT CODE</th>
        <th style="background-color:blue">SUBJECT NAME</th>
        <th style="background-color:blue">SECTION</th>
        <th style="background-color:blue">DAY</th>
        <th style="background-color:blue">TIME</th>
        <th style="background-color:blue">PLACE</th>
  </tr>
  <tr>
    <td style="background-color:powderblue">M001</td>
    <td style="background-color:powderblue">Additional Mathematics</td>
    <td style="background-color:powderblue">A</td>
    <td style="background-color:powderblue">Saturday</td>
    <td style="background-color:powderblue">08:00am - 10:00am</td>
    <td style="background-color:powderblue">R01</td>
  </tr>
   <tr>
    <td style="background-color:white">M002</td>
    <td style="background-color:white">Chemistry</td>
    <td style="background-color:white">B</td>
    <td style="background-color:white">Sunday</td>
    <td style="background-color:white">10:00am - 12:00pm</td>
    <td style="background-color:white">R02</td>
  </tr>
  <tr>
    <td style="background-color:powderblue">M003</td>
    <td style="background-color:powderblue">Physics</td>
    <td style="background-color:powderblue">A</td>
    <td style="background-color:powderblue">Sunday</td>
    <td style="background-color:powderblue">08:00am - 10:00am</td>
    <td style="background-color:powderblue">R01</td>
  </tr>
  <tr>
    <td style="background-color:white">M004</td>
    <td style="background-color:white">Biology</td>
    <td style="background-color:white">B</td>
    <td style="background-color:white">Saturday</td>
    <td style="background-color:white">10:00am - 12:00pm</td>
    <td style="background-color:white">R02</td>
  </tr>
  <tr>
    <td style="background-color:powderblue">M005</td>
    <td style="background-color:powderblue">Sejarah</td>
    <td style="background-color:powderblue">B</td>
    <td style="background-color:powderblue">Wednesday</td>
    <td style="background-color:powderblue">08:00pm - 10:00pm</td>
    <td style="background-color:powderblue">R01</td>
  </tr>
  <tr>
    <td style="background-color:white">M006</td>
    <td style="background-color:white">English</td>
    <td style="background-color:white">A</td>
    <td style="background-color:white">Saturday</td>
    <td style="background-color:white">08:00pm - 10:00pm</td>
    <td style="background-color:white">R01</td>
  </tr>
  <tr>
    <td style="background-color:powderblue">M007</td>
    <td style="background-color:powderblue">Mathematics</td>
    <td style="background-color:powderblue">A</td>
    <td style="background-color:powderblue">Monday</td>
    <td style="background-color:powderblue">08:00pm - 10:00pm</td>
    <td style="background-color:powderblue">R01</td>
  </tr>
  <tr>
    <td style="background-color:white">M008</td>
    <td style="background-color:white">Bahasa Melayu</td>
    <td style="background-color:white">A</td>
    <td style="background-color:white">Sunday</td>
    <td style="background-color:white">08:00pm - 10:00pm</td>
    <td style="background-color:white">R02</td>
  </tr>
  
</table>
<br>
<button class="button" onclick="myFunction()">Print</button> 

  </nav>
  
 <article>
  <form method="POST" action="">
    <p align="center" ><font color="white" size="6"><b>Announcement</b></font></p>
    
    <br>
    <div style="height:150px;width:270px;background-color: white;border:1px solid #ccc;font:12px/20px Georgia, Garamond, Serif;overflow:auto;">
      <main id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    
                  </div>
                <div class="card-body">
                 <div class="table-responsive">
                        <thead>
                      
                            <h2 align="center">ANNOUNCEMENT</h2>
                            <hr>
                            <tbody>
                            <?php foreach ($announcement as $announcement){//loop users data using foreach loop?>
                            <tr>
                              <td><?php echo $announcement['dateAnn'];?></td>
                              <td><?php echo $announcement['subjectC'];?></td>
                              <td><?php echo $announcement['subjectAnn'];?></td>
                              <br>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <br>
                          </table>
                             
                            </div>
                        </thead>
                 </div>
              </div>
            </div>
          </div>
        </main>
    
  </article>
<script type="text/javascript">
    function myFunction() {
    alert("The timetable is successfully print!");
}
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>
