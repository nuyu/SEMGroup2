<?php

  require_once'../Controller/UsersController.php';

  //if form is submited
  if(isset($_POST['submit'])){



  $user = new UserController();

  if($_POST['Password']==$_POST['RetypePassword'])

  $user->add();
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="SignUpCSS.css">
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
     <div style="color:black;font-size:30px">A-Prime Tuition Center</div>
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
<p style="color: #4682B4;text-align:center;font-size:50px">Sign Up</p>



<br />
<br />
<br />
<table width="50%">
<form method="POST" action="">

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
  <label style="color:black; for="Password">Password*</label>
</td>
<td>
  <input type="text" id="Password" name="Password">
</td>
</tr>
<tr>
<td>
  <label style="color:black for="RetypePassword">Retype Password*</label>
</td>
<td>
  <input type="text" id="RetypePassword" name="RetypePassword">
</td>
</tr>
<tr>
<td>
  <label style="color:black; for="Email">Email*</label>
</td>
<td>
  <input type="text" id="Email" name="Email">
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
<tr>
<td colspan="2" style="text-align: center;"> 
  <input type="submit" name="submit" class="button" value="Sign Me Up" />
</td>
</tr>

</form>

</table>


<footer>
  <p>A-Prime Tuition Center</p>
</footer>
</body>
</html>