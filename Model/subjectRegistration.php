<?php

require_once '../library/database.php';

/**
 * 
 */
class subjectRegistration
{
	//attributes
	//if private need to use stter/getter
	public $No;
	public $subjectName;
	public $section;
	
	public function save()
	{
		$query = "INSERT INTO subjectregistrations (subjectName, section) VALUES (:subjectName, :section)";
		$param = [':subjectName' => $this->subjectName,':section' => $this->section];

			$stmt = DB::Run($query, $param);
	}

	public static function All($value='')
	{
		$query = "SELECT * FROM subjectregistrations";

		$subjectregistrations = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $subjectregistrations;
	}
	


	public static function AllCC($value='')
	{
		$query = "SELECT * FROM coursecatalogs";

		$coursecatalogs = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $coursecatalogs;
	}


	public static function listName($subject)
	{
		if ($subject == 'Biology') {

			$query = "SELECT * FROM BiologyA";

			$biologylist = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $biologylist;
		}
		elseif ($subject == 'AddMath') {
			
			$query = "SELECT * FROM AddMathA";

			$addmathlist = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $addmathlist;
		}
		

		
	}

	public static function getById($No)
	{
		$query = "SELECT * FROM subjectregistrations WHERE No = :No LIMIT 1";
		$param = [':No' => $No]; // the parameter that will be bind by pdo
		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query
				// need to use fetch to retrieve only 1 row of data
				$subjectregistration = $stmt->fetch(PDO::FETCH_ASSOC); 
				// this will retrieve the row of data
				// that is associated to the passed id
				// return the user object
				return $subjectregistration;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


	public function delete()
	{
		$query = "DELETE FROM subjectregistrations WHERE No=:No";
		$param = [':No' => $this->No]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB
			if ($stmt = DB::Run($query, $param)) { // we dont use fetch() or fetchAll() here because no data will be return when we perform delete operation
				return true;
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


}