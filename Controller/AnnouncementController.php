<?php

//include class model user
require_once'../Model/Announcement.php';

/**
 * 
 */
class AnnouncementController
{
	 public function view($value='')
	{
		//call static method All from user class
		$announcement = announcement::All();

		return $announcement;
	}
	
	public function add()
	{
		// check if data is submitted
		// check data from form
		//$_POST ['name from input']
		//echo $_POST['subjectCode'];
		//echo $_POST['subjectName'];

		//create new object user
		$announcement = new announcement();

		// pass from data to model
		// set user attributes
		$announcement ->dateAnn = $_POST['dateAnn'];
		$announcement ->subjectC = $_POST['subjectC'];
		$announcement ->subjectAnn = $_POST['subjectAnn'];
		
		
		// use methode save on user model
		$announcement -> save(); // save into db

	}

	public function update()
	{
		// get user data associate with $id
		
		// update/set the attributes of the user
		$announcement = new announcement();

		$announcement ->dateAnn = $_POST['dateAnn'];
		$announcement ->subjectC = $_POST['subjectC'];
		$announcement ->subjectAnn = $_POST['subjectAnn'];
		// update the user data in database
		$announcement->update();
		// set message
	}

	
}