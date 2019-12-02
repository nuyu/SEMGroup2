<?php 

require_once'../Model/teacher.php';

class TeacherController
{
	public function view()
	{
		$tea = Teacher::All();
		return $tea;
	}
	
	public function update()
	{
		

		$teacher = new Teacher();
		

		//set value of attrivutes in User class
		//the value get from form using post method
		$teacher->Username = $_POST['Username'];
		$teacher->TeacherID = $_POST['TeacherID'];
		$teacher->DateJoined = $_POST['DateJoined'];
		$teacher->PhoneNo = $_POST['PhoneNo'];
		$teacher->Subject = $_POST['Subject'];
		$teacher->Email = $_POST['Email'];
		$teacher->IC = $_POST['IC'];
		$teacher->Gender = $_POST['Gender'];
		$teacher->School = $_POST['Name'];
		$teacher->Address1 = $_POST['Address1'];
		$teacher->Address2 = $_POST['Address2'];
		$teacher->City = $_POST['City'];
		$teacher->State = $_POST['State'];
		$teacher->PostalCode = $_POST['PostalCode'];
		$teacher->Country = $_POST['Country'];
		


		//calling save method in User class
		$teacher->update();
	}





}