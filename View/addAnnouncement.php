<?php

//include UserController file
require_once '../Controller/AnnouncementController.php';

//if form is submitted
if (isset($_POST ['add'])) {
	//create controller object and assign to variable $user
	$announcement = new AnnouncementController();

	//call method add
	$announcement -> add();
}
$AnnouncementController = new AnnouncementController();

//assign data from db to variable $users
$ann = $AnnouncementController->view();

if (isset($_POST['submit'])) {
  $announcement = new AnnouncementController();

  $announcement -> update();
}

?>

<!DOCTYPE html>
<html>
	<head>
    <title>TIMETABLE TEACHER</title>
    <link rel="stylesheet" type="text/css" href="Timetable(Teacher).css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>T I M E T A B L E</h3>
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
  <nav>
    
    <table style="width:90%">
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
        <td style="background-color:powderblue" align="center">A</td>
        <td style="background-color:powderblue">Saturday</td>
        <td style="background-color:powderblue">08:00am - 10:00am</td>
        <td style="background-color:powderblue" align="center">R01</td>
  </tr>
  <tr>
     <td style="background-color:powderblue">M001</td>
        <td style="background-color:powderblue">Additional Mathematics</td>
        <td style="background-color:powderblue" align="center">B</td>
        <td style="background-color:powderblue">Saturday</td>
        <td style="background-color:powderblue">10:00am - 12:00pm</td>
        <td style="background-color:powderblue" align="center">R01</td>
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

  <input type="button"  class="button3" id="myBtn" value="Add"> 
   <form method="POST" action="">
  <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h5>Add your announcement:</h5>
     <table align="center" class="table1" style="width:20%">
    <tr>
        <th style="background-color:blue">DATE</th>
        <th style="background-color:blue">SUBJECT CODE</th>
        <th style="background-color:blue">ANNOUNCEMENT</th>
    </tr>
    <tr>
    <td><input type=text name="dateAnn" class="dateAnn" input=""></input></td>
    <td><input type=text name="subjectC" class="subjectC" input=""></input></td>
    <td><input type=text name="subjectAnn" class="subjectAnn" input=""></input></td>
    </tr>
    </table>
    <input type="submit" name="add" class="button2" value="Add">
    <main id="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                  </div>
                <div class="card-body">
                 <div class="table-responsive">
                        <thead>
                          <table>
                            <tbody>
                            <?php foreach ($ann as $announcement){//loop users data using foreach loop?>
                               <tr>
                              
                                <td><input type="text" id="dateAnn" name="dateAnn" value="<?php echo $announcement['subjectAnn'] ?>"></td>
                                <td><input type="text" id="subjectC" name="subjectC" value="<?php echo $announcement['subjectAnn'] ?>"></td>
                                <td><input type="text" id="subjectAnn" name="subjectAnn" value="<?php echo $announcement['subjectAnn'] ?>"></td>
                               <td>
                              <input type="submit" name="submit" class="btn btn primary" value="Save">
                            </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <br>
                          </table>
                             </thead>
                            </div>
                        
                 </div>
              </div>
            </div>
          </div>
        </main>
  </div>
</div>
</form>
</div>
</form>
<br>
    <aside></aside>
    
      </div>
    </body>
  </div>
</div>
        
</form>
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
