<?php

//include UserController file
require_once '../Controller/subjectRegistrationController.php';
require_once '../Controller/AnnouncementController.php';

// if form is submitted
if(isset($_POST['add'])){
  //create controller object and assign to variable $user
  $subjectregistration = new subjectRegistrationController();

  //call method add
  $subjectregistration->addSubject();
}

//create new controller object
$subjectRegistrationController = new subjectRegistrationController();

//assign data from db
$subjectregistrations = $subjectRegistrationController->viewSubjectRegistered();

$coursecatalogs = $subjectRegistrationController->viewCC();

$AnnouncementController = new AnnouncementController();

//assign data from db to variable $users
$ann = $AnnouncementController->view();

?>

<!DOCTYPE html>
<html>
<head>
  <title>SUBJECT REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="subjectRegistration.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>SUBJECT REGISTRATION</h3>
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
    <!--TAB LINKS -->
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'CourseCatalog')">Course Catalog</button>
      <button class="tablinks" onclick="openCity(event, 'SubjectRegistration')">Subject Registration</button>
    </div>

<!--TAB CONTENT-->
 <div id="CourseCatalog" class="tabcontent">
    <table class="table1" cellpadding= "3">
      <tr>
        <th style="background-color:blue">SUBJECT CODE</th>
        <th style="background-color:blue">SUBJECT NAME</th>
        <th style="background-color:blue">SECTION</th>
        <th style="background-color:blue">DAY</th>
        <th style="background-color:blue">TIME</th>
        <th style="background-color:blue">PLACE</th>
        <th style="background-color:blue">CAPACITY</th>
      </tr>

  <?php foreach ($coursecatalogs as $coursecatalog) {//loop users data ?>
      <tr>
        <td style="background-color:powderblue"><?php echo $coursecatalog['subjectCode']; ?></td>
        <td style="background-color:powderblue"><?php echo $coursecatalog['subjectName']; ?></td>
        <td style="background-color:powderblue" align="center"><?php echo $coursecatalog['section']; ?></td>
        <td style="background-color:powderblue"><?php echo $coursecatalog['day']; ?></td>
        <td style="background-color:powderblue"><?php echo $coursecatalog['time']; ?></td>
        <td style="background-color:powderblue" align="center"><?php echo $coursecatalog['place']; ?></td>
        <td style="background-color:powderblue" align="center"><?php echo $coursecatalog['capacity']; ?></td>
      </tr>
  <?php } ?>

   
</table>

   <a href="COURSE CATALOG OF A-PRIME LEARNING CENTRE.pdf" download=""> <input type="button" class="buttonPrint" onclick="myFunction()" value="Print"></a>
</div>


<div id="SubjectRegistration" class="tabcontent">
  <form method="post" action="">
  <table align="center">
  <tr> 
    <td><b>Subject : </b>
        <select name="subjectName">
          <option value="--Select Subject--" checked>--Select Subject--</option>
          <option value="Additional Mathematics" checked>[M001] - Additional Mathematics</option>
          <option value="Chemistry" checked>[M002] - Chemistry</option>
          <option value="Physics" checked>[M003] - Physics</option>
          <option value="Biology" checked>[M004] - Biology</option>
          <option value="Sejarah" checked>[M005] - Sejarah</option>
          <option value="English" checked>[M006] - English</option>
          <option value="Mathematics" checked>[M007] - Mathematics</option>
          <option value="Bahasa Melayu" checked>[M008] - Bahasa Melayu</option>
      </select>
    </td>

    <td><b>Section : </b>
        <select name="section">
          <option value="--Select Section--" checked>--Select Section--</option>
          <option value="A" checked>A</option>
          <option value="B" checked>B</option>
        </select>
    </td>

    <td><button type="add" name="add">Add</button></td>
  </tr>
</table>
</form>



<table class="table2">
  <tr>
    <th>No.</th>
    <th>Subject Name</th>
    <th>Section</th>
    <th>Drop</th>
    <th></th>  
  </tr>
  <?php foreach ($subjectregistrations as $subjectregistration) {//loop users data ?>
  <tr>
    <td><?php echo $subjectregistration['No']; ?></td>
    <td><?php echo $subjectregistration['subjectName']; ?></td>
    <td><?php echo $subjectregistration['section']; ?></td>
    <td><input type="radio" name="drop" value="drop"></td>
    <td><button type="submit" name="submit">Submit</button></td></td>
  </tr>
  <?php } ?>

  

</table>

 <!--<input type="button" class="buttonConfirm" value="Confirm">-->

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
</script>

<script type="text/javascript">
  function myFunction()
    {
      alert("Download Course Catalog ! :D ");
    }

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function()
    {
      modal.style.display = "block";
    }
    span.onclick = function()
    {
      modal.style.display = "none";
    }

    window.onclick = function(event)
    {
      if (event.target == modal)
      {
        modal.style.display = "none";
      }
    }
</script>


</div>
  </nav>

  <article>
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
                            <?php foreach ($ann as $announcement){//loop users data using foreach loop?>
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
        <br>
      </article>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>