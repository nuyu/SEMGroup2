<?php

require_once'../Model/user.php';
require_once'../Model/student.php';
require_once'../Model/teacher.php';
require_once'../Model/parents.php';
require_once'../Model/staff.php';

class UserController
{

	public function authenticate()
	{
		$user = new User();

		$user->Username = $_POST['Username'];
		$user->Password = $_POST['pass'];
		$user->Category = $_POST['Category'];

		$users = User::All();
		
		foreach ($users as $row) 
		{
			
			if(($row['Username']==$_POST['Username'])&&($row['Password']==$_POST['pass'])&&($row['Category']==$_POST['Category']))
			{
				return 1;
				break;
			}

		}

		return 0;

	}

	public function add()
	{
			

		$user = new User();
		

		//set value of attrivutes in User class
		//the value get from form using post method
		$user->Username = $_POST['Username'];
		$user->Password = $_POST['Password'];
		$user->Email = $_POST['Email'];
		$user->Category = $_POST['Category'];

		


		//calling save method in User class
		$user->save();

		if ($_POST['Category'] == 'Student')
		{
			$student = new Student();

			$student->Username = $_POST['Username'];
			$student->StudentID = '';
			$student->DateJoined = "0000-00-00";
			$student->PhoneNo = '';
			$student->FatherName = '';
			$student->MotherName = '';
			$student->Email = $_POST['Email'];
			$student->IC = '';
			$student->Gender = '';
			$student->Name = '';
			$student->ParentID = '';
			$student->GuardianNo = '';
			$student->Address1 = '';
			$student->Address2 = '';
			$student->City = '';
			$student->State = '';
			$student->PostalCode = '';
			$student->Country = '';

		$student->save();

		header('Location:ManageUserStudents.php');
		exit();
		}
		else if ($_POST['Category'] == 'Teacher')
		{
			$teacher = new Teacher();

			$teacher->Username = $_POST['Username'];
			$teacher->TeacherID = '';
			$teacher->DateJoined = "0000-00-00";
			$teacher->PhoneNo ='';
			$teacher->Subject = '';
			$teacher->Email = $_POST['Email'];
			$teacher->IC = '';
			$teacher->Gender = '';
			$teacher->Name = '';
			$teacher->Address1 = '';
			$teacher->Address2 = '';
			$teacher->City = '';
			$teacher->State = '';
			$teacher->PostalCode = '';
			$teacher->Country = '';
		

		$teacher->save();

		header('Location:ManageUserTeachers.php');
		exit();
		}
		else if ($_POST['Category'] == 'Parent')
		{
			$parent = new Parents();
		
			$parent->Username = $_POST['Username'];
			$parent->parentID = '';
			$parent->DateJoined ="0000-00-00";
			$parent->PhoneNo = '';
			$parent->Name = '';
			$parent->Email = $_POST['Email'];
			$parent->IC = '';
			$parent->Gender = '';
			$parent->Occupation = '';
			$parent->Address1 = '';
			$parent->Address2 = '';
			$parent->City = '';
			$parent->State = '';
			$parent->PostalCode = '';
			$parent->Country = '';
		
		$parent->save();

		header('Location:ManageUserParents.php');
		exit();
		}
		else if ($_POST['Category'] == 'Staff')
		{
			$staff = new Staff();
		
			$staff->Username = $_POST['Username'];
			$staff->StaffID = '';
			$staff->DateJoined = "0000-00-00";
			$staff->PhoneNo = '';
			$staff->Name = '';
			$staff->Email = $_POST['Email'];
			$staff->IC = '';
			$staff->Gender = '';
			$staff->Position ='';
			$staff->Address1 ='';
			$staff->Address2 = '';
			$staff->City = '';
			$staff->State = '';
			$staff->PostalCode ='';
			$staff->Country = '';
		

		$staff->save();

		header('Location:ManageUserStaffs.php');
		exit();
		}
	}

}
?>
     