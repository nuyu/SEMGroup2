<?php

//include class model user
require_once '../Model/mark.php';

/**
*
*/

class PerformanceController
{
	public function view($subject)
	{
		//call static method All from user class
		$addmark = mark::All($subject);

		return $addmark;
	}

	public function viewStudent($subject)
	{
		//call static method All from user class
		$addmark = mark::AllStudent($subject);

		return $addmark;
	}

	public function viewParent($subject)
	{
		//call static method All from user class
		$addmark = mark::AllParent($subject);

		return $addmark;
	}


	
	public function add($subject)
	{
		//check if data is submitted
		//check data from form
		//$_POST['name from input']

		//echo $_POST['month'];
		//echo $_POST['mark1'];
		//echo $_POST['mark2'];
		//echo $_POST['mark3'];
		//echo $_POST['mark4'];
		//echo $_POST['mark5'];
		//echo $_POST['mark6'];
		//echo $_POST['comment1'];
		//echo $_POST['comment2'];
		//echo $_POST['comment3'];
		//echo $_POST['comment4'];
		//echo $_POST['comment5'];
		//echo $_POST['mark'][1];
		//echo $_POST['comment'][1];
		$addmark = new mark();
		$addmark->mark = $_POST['mark'][1];
		$addmark->comment = $_POST['comment'][1];
		$addmark->update(1, $subject); 
		
		$addmark = new mark();
		$addmark->mark = $_POST['mark'][2];
		$addmark->comment = $_POST['comment'][2];
		$addmark->update(2, $subject); 

		$addmark = new mark();
		$addmark->mark = $_POST['mark'][3];
		$addmark->comment = $_POST['comment'][3];
		$addmark->update(3, $subject); 

		$addmark = new mark();
		$addmark->mark = $_POST['mark'][4];
		$addmark->comment = $_POST['comment'][4];
		$addmark->update(4, $subject); 

		$addmark = new mark();
		$addmark->mark = $_POST['mark'][5];
		$addmark->comment = $_POST['comment'][5];
		$addmark->update(5, $subject); 

		$addmark = new mark();
		$addmark->mark = $_POST['mark'][6];
		$addmark->comment = $_POST['comment'][6];
		$addmark->update(6, $subject); 



		//create new object user
		//$addmark = new addmark();

		//set user attribute
		
		//$addmark->month = $_POST['month'];
		//$addmark->mark1 = $_POST['mark1'];
		//$addmark->mark2 = $_POST['mark2'];
		//$addmark->mark3 = $_POST['mark3'];
		//$addmark->mark4 = $_POST['mark4'];
		//$addmark->mark5 = $_POST['mark5'];
		//$addmark->mark6 = $_POST['mark6'];
		//$addmark->comment1 = $_POST['comment1'];
		//$addmark->comment2 = $_POST['comment2'];
		//$addmark->comment3 = $_POST['comment3'];
		//$addmark->comment4 = $_POST['comment4'];
		//$addmark->comment5 = $_POST['comment5'];
		//$addmark->comment6 = $_POST['comment6'];

		//use method save on user model
		//$addmark->save(); //save into db
		}

}