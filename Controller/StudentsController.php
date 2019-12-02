<?php


require_once'../Model/student.php';
/**
 * 
 */
class StudentController
{

	public function view()
	{
		$stu = Student::All();
		return $stu;
	}
	
	public function update()
	{
		
		
		
		

		$student = new Student();
		
		//set value of attrivutes in User class
		//the value get from form using post method
		$student->Username = $_POST['Username'];
		$student->Name = $_POST['Name'];
		$student->StudentID = $_POST['StudentID'];
		$student->IC = $_POST['IC'];
		$student->DateJoined = $_POST['DateJoined'];
		$student->Gender = $_POST['Gender'];
		$student->PhoneNo = $_POST['PhoneNo'];
		$student->Email = $_POST['Email'];
		$student->FatherName = $_POST['FatherName'];
		$student->ParentID = $_POST['ParentID'];
		$student->MotherName = $_POST['MotherName'];	
		$student->GuardianNo = $_POST['GuardianNo'];
		$student->Address1 = $_POST['Address1'];
		$student->Address2 = $_POST['Address2'];
		$student->City = $_POST['City'];
		$student->State = $_POST['State'];
		$student->PostalCode = $_POST['PostalCode'];
		$student->Country = $_POST['Country'];
		


		//calling save method in User class
		$student->update();
	}

}
?>