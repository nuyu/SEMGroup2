<?php

//include class model user
require_once '../Model/subjectRegistration.php';
/**
*
*/
/**
 * 
 */
class subjectRegistrationController
{
	public function viewSubjectRegistered()
	{
		$subjectregistrations = subjectRegistration::All();

		return $subjectregistrations;
	}


	public function viewCC()
	{
		$coursecatalog = new subjectRegistration();

		$coursecatalogs = subjectRegistration::AllCC();

		return $coursecatalogs;
	}
	

	public function viewStudentList($subject)
	{
		


		$sr = subjectRegistration::listName($subject);

		return $sr;
	}


	
	public function addSubject()
	{
		//create new object user
		$subjectregistration = new subjectRegistration();
		//check if data is submitted
		//check data from form
		//$_POST['name from input']
		//echo $_POST['subjectName'];
		//echo $_POST['section'];

		

		//pass form data to model
		//set user attributes
		$subjectregistration->subjectName = $_POST['subjectName'];
		$subjectregistration->section = $_POST['section'];

		//calling save method in subjectRegistration class
		$subjectregistration->save(); //save into db

	}

	/*public function get($No)
	{
		// get user object associate with $id
		$subjectregistration = subjectRegistration::getById($No);
		// return user object with the user details
		return $subjectregistration;
	}

	public function destroy($No)
	{


		// get user data associate with $id
		$finduser = subjectRegistration::getById($No);

		// update/set the attributes of the user
		$subjectregistrationt = new subjectRegistration();
		$subjectregistration->No = $finduser['No'];

		// delete the user
		$subjectregistration->delete();

		// redirect the page
		header('subjectRegistration.php');
	}*/

}