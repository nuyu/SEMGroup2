<?php


require_once'../Model/staff.php';
/**
 * 
 */
class StaffController
{

	public function view()
	{
		$sta = Staff::All();
		return $sta;
	}
	
	public function update()
	{
		
		
		
		

		$staff = new Staff();
		

		//set value of attrivutes in User class
		//the value get from form using post method
		$staff->Username = $_POST['Username'];
		$staff->StaffID = $_POST['StaffID'];
		$staff->DateJoined = $_POST['DateJoined'];
		$staff->PhoneNo = $_POST['PhoneNo'];
		$staff->Name = $_POST['Name'];
		$staff->Email = $_POST['Email'];
		$staff->IC = $_POST['IC'];
		$staff->Gender = $_POST['Gender'];
		$staff->Position = $_POST['Position'];
		$staff->Address1 = $_POST['Address1'];
		$staff->Address2 = $_POST['Address2'];
		$staff->City = $_POST['City'];
		$staff->State = $_POST['State'];
		$staff->PostalCode = $_POST['PostalCode'];
		$staff->Country = $_POST['Country'];
		


		//calling save method in User class
		$staff->update();
	}

}