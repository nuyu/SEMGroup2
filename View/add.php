<?php

require_once'../Controller/UserController.php';

//if form is submited
if(isset($_POST['submit'])){

	$user = new UserController();

	$user->add();

}


?>




<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../StyleFolder/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../StyleFolder/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../StyleFolder/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../StyleFolder/css/sb-admin.css" rel="stylesheet">

  </head>
<body>

	<!--For sidebar-->
	<aside></aside>

	<!--For main content-->
	<main class="container">
		
		<form method="POST" action="">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="required" autofocus="autofocus">
                    <label for="inputName">Name</label>
                  </div>
                </div>               
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>           
            <input type="submit" name="submit" class="btn btn-primary" value="Create">
          </form>


	</main>

	<!--For footer-->
	<footer></footer>


</body>
</html>