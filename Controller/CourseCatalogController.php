<?php

//include class model user
require_once'../Model/CourseCatalog.php';

/**
 * 
 */
class CourseCatalogController
{
	 public function view()
	{
		//call static method All from user class
		$cg = coursecatalog::All();

		return $cg;
	}
	
	public function add()
	{
		// check if data is submitted
		// check data from form
		//$_POST ['name from input']
		//echo $_POST['subjectCode'];
		//echo $_POST['subjectName'];

		//create new object user
		$coursecatalog = new coursecatalog();

		// pass from data to model
		// set user attributes
		$coursecatalog ->subjectCode = $_POST['subjectCode'];
		$coursecatalog ->subjectName = $_POST['subjectName'];
		$coursecatalog ->section = $_POST['section'];
		$coursecatalog ->day = $_POST['day'];
		$coursecatalog ->time = $_POST['time'];
		$coursecatalog ->place = $_POST['place'];
		$coursecatalog ->capacity = $_POST['capacity'];
		
		// use methode save on user model
		$coursecatalog -> save(); // save into db

	}
	/*function index() {
	$this->view->allrecords = $this->model->getAllrecords();
	$this->view->render('CourseCatalog');
	}*/

	public function update()
	{
		// get user data associate with $id
		
		// update/set the attributes of the user
		$coursecatalog = new coursecatalog();

		$coursecatalog->subjectCode = $_POST['subjectCode'];
		$coursecatalog->subjectName = $_POST['subjectName'];
		$coursecatalog->section = $_POST['section'];
		$coursecatalog->day = $_POST['day'];
		$coursecatalog->time = $_POST['time'];
		$coursecatalog->place = $_POST['place'];
		$coursecatalog->capacity = $_POST['capacity'];
		// update the user data in database
		$coursecatalog->update();
		// set message
	}
}