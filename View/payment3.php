<?php

require_once'../Controller/PaymentController.php';

$PaymentController = new PaymentController();


$payment = $PaymentController->view();

?>

<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT</title>
	<link rel="stylesheet" type="text/css" href="payment2.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<style type="text/css">
	#apDiv1 {
	position: absolute;
	width: 846px;
	height: 487px;
	z-index: 1;
	left: 14px;
	top: 220px;
	background-color: #bdbdbd;
}
    #apDiv2 {
	position: absolute;
	width: 711px;
	height: 379px;
	z-index: 1;
	left: 59px;
	top: 53px;
	background-color: #e0e0e0;
}
    #apDiv3 {
	position: absolute;
	width: 648px;
	height: 314px;
	z-index: 1;
	background-color: #9e9e9e;
	left: 33px;
	top: 41px;
	font-size: 14px;
}
    #apDiv4 {
	position: absolute;
	width: 185px;
	height: 289px;
	z-index: 2;
	left: 466px;
	top: 33px;
	background-color: #9e9e9e;
}
    #apDiv5 {
	position: absolute;
	width: 61px;
	height: 26px;
	z-index: 1;
	left: 232px;
	top: 210px;
}
    #apDiv6 {
	position: absolute;
	width: 152px;
	height: 26px;
	z-index: 2;
	left: 134px;
	top: 156px;
}
    #apDiv7 {
	position: absolute;
	width: 114px;
	height: 23px;
	z-index: 3;
	left: 22px;
	top: 193px;
}
    #apDiv8 {
	position: absolute;
	width: 125px;
	height: 25px;
	z-index: 4;
	left: 22px;
	top: 217px;
}
    #apDiv9 {
	position: absolute;
	width: 127px;
	height: 23px;
	z-index: 5;
	left: 23px;
	top: 245px;
}
    #apDiv10 {
	position: absolute;
	width: 575px;
	height: 267px;
	z-index: 2;
	left: 21px;
	top: 25px;
}
    #apDiv11 {
	position: absolute;
	width: 250px;
	height: 165px;
	z-index: 1;
	left: 204px;
	top: 24px;
}
    #apDiv12 {
	position: absolute;
	width: 342px;
	height: 258px;
	z-index: 3;
	left: 274px;
	top: 23px;
}
    #apDiv13 {
	position: absolute;
	width: 135px;
	height: 167px;
	z-index: 2;
	left: 64px;
	top: 56px;
}
    #apDiv14 {
	position: absolute;
	width: 77px;
	height: 27px;
	z-index: 2;
	left: 124px;
	top: 1px;
}
    #apDiv15 {
	position: absolute;
	width: 150px;
	height: 26px;
	z-index: 2;
	left: 211px;
	top: 198px;
}
    .checkboxpay {
	font-size: 18px;
}
    </style>
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>P A Y M E N T</h3>
  <div class="topnav">
  <a href="HomepageStudent.php">Home</a>
  <a href="ManageUserStudents.php">Profile</a>
  <a href="subjectRegistration.php">Subject</a>
  <a class="active" href="payment3.php">Financial</a>
</div>
</header>

<section>
  <div id="apDiv1">
    <div id="apDiv2">

      <div id="apDiv3">
        <p>&nbsp;</p>
        <div id="apDiv10"><img src="download.jpg" width="166" height="167" alt="image2">
          <div id="apDiv11">
          	<?php foreach ($payment as $Payment) {?>
            <p><?php echo $Payment['Name'] ?></p>
            <p>PAYMENT SUMMARY:-</p>
            <p>Fee : RM<?php echo $Payment['price'] ?></p>
            <p>Others : RM25</p>
            <?php }?>
          </div>
          <div id="apDiv15">
            <form name="form1" method="get" action="payment3.php">
            	<?php foreach ($payment as $Payment) {?> 
              <span class="checkboxpay">Payment Done</span>
              <input name="Payment" type="checkbox" id="Prove" checked>
              <label for="Payment"></label>
              <?php }?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <article>
    <p align="center" ><font color="white" size="6"><b>Announcement</b></font></p>
    <div style="height:150px;width:270px;background-color: white;border:1px solid #ccc;font:12px/20px Georgia, Garamond, Serif;overflow:auto;" > Additional Mathematics class on Sunday morning has been cancelled. <br>
      ----------------------------------------- <br>
      Physics class on Sunday night has been cancelled. <br>
      ----------------------------------------- <br>
      Biology class on Saturday morning has been cancelled. <br>
      ----------------------------------------- <br>
      Mathematics class on Saturday night has been cancelled. <br>
      ----------------------------------------- <br>
    </div>
  </article>
</section>

<footer>
  <p>Copyright 2018 A-Prime Learning Centre. All right reserved.</p>
</footer>
</body>
</html>

