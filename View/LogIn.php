

<?php

  require_once'../Controller/UsersController.php';

  //if form is submited
  if(isset($_POST['submit'])){
  $user = new UserController();

  $flag=$user->authenticate();

  if($flag==1)
  {
    if($_POST['Category']=='Student')
    {
      header('Location:HomepageStudent.php');
    }
    else if($_POST['Category']=='Teacher')
    {
      header('Location:HomepageTeacher.php');
    }
    else if($_POST['Category']=='Parent')
    {
      header('Location:HomepageParent.php');
    }
    else if($_POST['Category']=='Staff')
    {
      header('Location:HomepageStaff.php');
    }
  }
  else
  {

  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
  <link rel="stylesheet" type="text/css" href="LogInCSS.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  </head>
  
<header>
<div style="text-align:center;background-color:#333;color:#FFF">A-Prime Tuition Center</div>
</header>

<body>
<div class="navbar">
<br />
  <a href="LogIn.php">Log In</a>

 
  <a href="SignUpUser.php">Sign Up</a>
   
  <a href="#Call">Call</a><img src="Call.PNG" width="76" height="22" />
  

  <a >+88 02 9292162</a>   
  
  <div style="float:right">
  <a href="http://google.com"><img src="Gmail.PNG" width="76" height="32" />  
    
  </div> 
  
   <div style="float:right">
  <a href="https://twitter.com"><img src="../Twitter.PNG" width="76" height="32"/>  
    
  </div> 
  <div style="float:right">
  <a href="https://www.facebook.com"><img src="Facebook.PNG" width="76" height="32"/> 
    
  </div> 
</div>




<section>	
		<nav>
		<div style="padding: 20px 15px">

		<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','aprime.png',1)"><img src=		"aprime.png" width="276" height="165" id="Image5" /></a>
		</div>
    </nav>
    <nav>
     <p style="color:Black;font-size:30px">A-Prime Tuition Center</p>
     
    </nav>
    
    <nav style="color:black;">
     <form action="">
	 Search:<br>
	 <input type="text" name="Search">
     </form>
    </nav>
  
    <nav style="float:right;text-align:center;">
            <div style="background-color: white;padding: 20px">
  				<a href="LogIn.php">Home</a>
  				<a href="#event">Event</a>
  				<a href="#contact">Contact</a>
  				<a href="#view">View</a>
                <a href="#help">Help</a>
			</div>
     </nav>
</section>
<p style="color: #4682B4;text-align:center;font-size:50px">Log In</p>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<form action="" method="POST">
  <table>
  <tr>
    <td>
  <label style="color:black; for="Username">Username*</label>
    </td>
    <td>
  <input type="text" id="Username" name="Username">
    </td>
  </tr>
  <tr>
  <td>
  <label style="color:black; for="pass">Password*</label>
  </td>
  <td>
  <input type="text" id="pass" name="pass">
  </td>
  </tr>
  <tr>
<td>
  <label style="color:black; for="Category">Category</label>
</td>
<td style="text-align: left;">
  <select name="Category">
    <option>Student</option>
    <option>Teacher</option>
    <option>Parent</option>
    <option>Staff</option>

  </select> 
</td>
</tr>
  </table>

<br>
<br>
<br>
<p style="padding: 0px 70px">
  <input type="submit" name="submit" class="button" value="Log In" />
  <input type="Reset" class="button" value="Reset">
</p>
</form>
<footer>
  <p>A-Prime Tuition Center</p>
</footer>

</body>
</html>