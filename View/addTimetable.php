<?php

//include UserController file
require_once '../Controller/CourseCatalogController.php';

//if form is submitted
if (isset($_POST ['add'])) {
	//create controller object and assign to variable $user
	$coursecatalog = new CourseCatalogController();

	//call method add
	$coursecatalog -> add();
}
//create new controller object
$CourseCatalogController = new CourseCatalogController();

//assign data from db to variable $users
$cg = $CourseCatalogController->view();

if (isset($_POST['submit'])) {
  $coursecatalog = new CourseCatalogController();

  $coursecatalog -> update();
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>ADD TIMETABLE</title>
  <link rel="stylesheet" type="text/css" href="AddTimetable.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>T I M E T A B L E</h3>
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

  <a href="payment2.php">Financial</a> 
</div>
</header>

<section>
  <nav>
     <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Timetable')">Timetable</button>
    <button class="tablinks" onclick="openCity(event, 'New')">New</button>
    <button class="tablinks" onclick="openCity(event, 'Edit')">Edit</button>
  </div>
  
  
<div id="Timetable" class="tabcontent">
 <table class="table2"  style="width:90%">
<body id="page-top">
  <div id="wrapper">
    <aside></aside>
    <main id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                  </div>
                <div class="card-body">
                 <div class="table-responsive">
                      <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                         
                           <tr>
                            <th style="background-color:blue">SUBJECT CODE</th>
                            <th style="background-color:blue">SUBJECT NAME</th>
                            <th style="background-color:blue">SECTION</th>
                            <th style="background-color:blue">DAY</th>
                            <th style="background-color:blue">TIME</th>
                            <th style="background-color:blue">PLACE</th>
                            <th style="background-color:blue">CAPACITY</th>
                            </tr>
                            <tbody>
                            <?php foreach ($cg as $coursecatalog){//loop users data using foreach loop?>
                            <tr>
                              <td align="center"><?php echo $coursecatalog['subjectCode'];?></td>
                              <td align="center"><?php echo $coursecatalog['subjectName'];?></td>
                              <td align="center"><?php echo $coursecatalog['section'];?></td>
                              <td align="center"><?php echo $coursecatalog['time'];?></td>
                              <td align="center"><?php echo $coursecatalog['day'];?></td>
                              <td align="center"><?php echo $coursecatalog['place'];?></td>
                              <td align="center"><?php echo $coursecatalog['capacity'];?></td>
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
      </table>
    </div>
  </div>
</div>
</div>
</main>
</div>
<br>
<form method="POST" action="">
<div id="New" class="tabcontent">
  <table class="table1" style="width:90%">
  <tr>
    <th style="background-color:blue">SUBJECT CODE</th>
        <th style="background-color:blue">SUBJECT NAME</th>
        <th style="background-color:blue">SECTION</th>
        <th style="background-color:blue">TIME</th>
        <th style="background-color:blue">DAY</th>
        <th style="background-color:blue">PLACE</th>
        <th style="background-color:blue">CAPACITY</th>
  </tr>
  <tr>
    <td><input type=text name="subjectCode" class="subjectcode" input=""></input></td>
    <td><input type=text name="subjectName" class="subject" input=""></input></td>
    <td><input type=text name="section" class="section" input=""></input></td>
    <td><input type=text name="time" class="time" input=""></td>
    <td><input type=text name="day" class="day" input=""></td>
    <td><input type=text name="place" class="place" input=""></td>
    <td><input type=text name="capacity" class="capacity" input=""></td>
  </tr>
  
</table>
<br>
<input type="submit" name="add" class="button" value="Add">
</div>
</form>
<br>

<form method="POST" action="">
<div id="Edit" class="tabcontent">
 <table class="table2"  style="width:90%">
<body id="page-top">
  <div id="wrapper">
    <aside></aside>
    <main id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                  </div>
                <div class="card-body">
                 <div class="table-responsive">
                      <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>  
                <tr>
                    <th style="background-color:blue">SUBJECT CODE</th>
                    <th style="background-color:blue">SUBJECT NAME</th>
                    <th style="background-color:blue">SECTION</th>
                    <th style="background-color:blue">DAY</th>
                    <th style="background-color:blue">TIME</th>
                    <th style="background-color:blue">PLACE</th>
                    <th style="background-color:blue">CAPACITY</th>
                    <th style="background-color:blue"></th>
                </tr>
              </thead>
                <tbody>
                <tr>
                   <?php foreach ($cg as $coursecatalog){?>
                            <tr>
                              <td>
                                <input type="text" id="subjectCode" name="subjectCode" value="<?php echo $coursecatalog['subjectCode'] ?>">
                              </td>
                              <td>
                                <input type="text" id="subjectName" name="subjectName" value="<?php echo $coursecatalog['subjectName'] ?>">
                              </td>
                              <td>
                                <input type="text" id="section" name="section" value="<?php echo $coursecatalog['section'] ?>">
                              </td>
                              <td>
                                <input type="text" id="day" name="day" value="<?php echo $coursecatalog['day'] ?>">
                              </td>
                              <td>
                                <input type="text" id="time" name="time" value="<?php echo $coursecatalog['time'] ?>">
                              </td>
                              <td>
                                <input type="text" id="place" name="place" value="<?php echo $coursecatalog['place'] ?>">
                              </td>
                              <td>
                                <input type="text" id="capacity" name="capacity" value="<?php echo $coursecatalog['capacity'] ?>">
                              </td>
                              <td>
                              <input type="submit" name="submit" class="btn btn primary" value="Save">
                            </td>
                              <?php } ?>
                            </tr>
                  </tr>
                  </tbody>
                  </table>
                             
                            </div>
                        </thead>
                 </div>
              </div>
        </div>
      </table>
    </div>
  </div>
</div>
</div>
</main>
</div>
</body>
</table>
</div>
</form>

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
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
</script>
</nav>
</section>
<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>