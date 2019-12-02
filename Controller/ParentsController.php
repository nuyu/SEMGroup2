<?php


require_once'../Model/parents.php';
/**
 * 
 */
class ParentController
{

	public function view()
	{
		$par = Parents::All();
		return $par;
	}
	
	public function update()
	{
		
		
		
		

		$parent = new Parents();
		

		//set value of attrivutes in User class
		//the value get from form using post method
		$parent->Username = $_POST['Username'];
		$parent->parentID = $_POST['ParentID'];
		$parent->DateJoined = $_POST['DateJoined'];
		$parent->PhoneNo = $_POST['PhoneNumber'];
		$parent->Name = $_POST['Name'];
		$parent->Email = $_POST['Email'];
		$parent->IC = $_POST['IC'];
		$parent->Gender = $_POST['Gender'];
		$parent->Occupation = $_POST['Occupation'];
		$parent->Address1 = $_POST['Address1'];
		$parent->Address2 = $_POST['Address2'];
		$parent->City = $_POST['City'];
		$parent->State = $_POST['State'];
		$parent->PostalCode = $_POST['PostalCode'];
		$parent->Country = $_POST['Country'];
		


		//calling save method in User class
		$parent->update();
	}

}