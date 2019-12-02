<?php

require_once'../Controller/PaymentController.php';

if(isset($_POST['Submit'])){

  $payment = new PaymentController();

  $payment->add();

}

$PaymentController = new PaymentController();


if(isset($_GET['radio'])){

$PaymentController->Pmethod();
}





$payment = $PaymentController->view();





?>

<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT</title>
	<link rel="stylesheet" type="text/css" href="payment1.css">
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
	width: 414px;
	height: 287px;
	z-index: 1;
	background-color: #9e9e9e;
	left: 33px;
	top: 41px;
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
	left: 103px;
	top: 238px;
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
    </style>
</head>

<body style="background-color:hsl(0, 100%, 100%);" width="100%" height="100%">
<!--CONTAINER TABLE-->
<header>
  <h3>P A Y M E N T</h3>
  <div class="topnav">
  <a href="#home">Home</a>
  <a href="#profile">Profile</a>
  <a href="#subject">Subject</a>
  <a class="active" href="#financial">Financial</a>
</div>
</header>

<section>
  <div id="apDiv1">
    <div id="apDiv2">

      <div id="apDiv3">
      <form name="form2" action="payment1(1).php" method="post">
      <table width="10" border="0">
              <?php foreach ($payment as $Payment) {?> 
        <tr>
          <td rowspan="3"><img src="download.jpg" width="120" height="101" alt="image1">;</td>
          <td><?php echo $Payment['Name'] ?><br><br> Payment Summary : <?php echo $Payment['price'] ?><br> Others : RM25</td>
          <?php }?>
      </table>

        <p>Payment Method :
              <select name="Pmethod" id="Pmethod">
              <option value="p1"><a href="payment1.php">Online Banking</a></option>
              <option value="p2">Offline Banking</option>
              </select>
        </p>   


        <p>Name         : <input type="text" id="Name" name="Name"></p>
        <p>ID           : <input type="text" id="ID" name="ID"></p>
        <p>Prove Number : <input type="text" id="Prove" name="Prove"></p>
          

      </div>
      <div id="apDiv4">
        <table width="10" height="172" border="1">
          <tr>
            <?php foreach ($payment as $Payment) {?> 
            <td style="text-align:center">RM<?php echo ($Payment['price']+25) ?></td>
            <?php }?>
          </tr>
        </table>
        <div id="apDiv5">
          <input type="Submit" name="Submit" class="Button1" id="Button1" value="Save">
        </div>
        
        </form>
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
