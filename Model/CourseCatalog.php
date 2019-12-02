<?php

require_once '../library/database.php';

/**
 * 
 */
class coursecatalog
{
	//attributes
	// if private need to use setter/getter
	public $subjectCode;
	public $subjectName;
	public $section;
	public $day;
	public $time;
	public $place;
	public $capacity;

	public function save()
	{
		//insert query              //column name        //insert data
		$query = "INSERT INTO coursecatalogs ( subjectCode, subjectName, section, day, time, place, capacity) VALUES ( :subjectCode, :subjectName,:section,:day, :time, :place, :capacity)";
		$param = [ //bind parameter :name and :email to this class attributes
			':subjectCode' => $this->subjectCode,
			':subjectName' => $this->subjectName,
			':section' => $this->section,
			':day' => $this->day,
			':time' => $this->time,
			':place' => $this->place,
			':capacity' => $this->capacity,

		]; // [] means array

		//execute query
		$stmt = DB::Run($query, $param);
	}

	/**
	* Retrieve all data in database
	*/

	public static function All()
	{
		//SELECT query
		$query = "SELECT * From coursecatalogs";

		//DB::Run will execute the query and FetchAll will retrieve All data.
		//use fetch to retrieve only 1 data
		$coursecatalog = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $coursecatalog;
	}
	
	
	public function update()
	{
		$query = "UPDATE coursecatalogs SET subjectName=:subjectName, section=:section, day=:day, time=:time, place=:place, capacity=:capacity WHERE subjectCode=:subjectCode";
		$param = [ // the parameter that will be bind by pdo
			':subjectCode' => $this->subjectCode,
			':subjectName' => $this->subjectName,
			':section' => $this->section,
			':day' => $this->day,
			':time' => $this->time,
			':place' => $this->place,
			':capacity' => $this->capacity,
			];	

		$stmt = DB::Run($query,$param);
	}
		/*try {
			// use static method run() from class DB
	    	if ($stmt = DB::Run($query, $param)) { // we dont use fetch() or fetchAll() here
												   // because no data will be return when we
				                                   // perform update operation
	    		return true;
	    	};
		} catch (PDOException $e) {
			return $e->getMessage();
		}*/
	
}