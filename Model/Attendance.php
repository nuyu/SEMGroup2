<?php

require_once '../library/database.php';

/**
* 
*/
class Attendance
{
	
	//attributes
	// if private need to use setter/ getter

	public $no;
	public $thedate;
	public $Subject;
	public $attendance;


	//= array("", "", "", "", "", "");

	//public $email;s

	
	public function save($i,$subject)
	{
		//insert query 				//column name 		//insert data
		//INSERT INTO users (name, email) VALUES (:name, :email)
    //$attendance = implode(",", $attendance);
	

		if ($subject == 'Biology')
		{
			$query = "UPDATE BiologyA SET attendance = :attendance, remarks = :remarks, thedate = now() WHERE no = ".$i."";
			$param = [ //bind parameter :name and :email to this class attributes
				//':Subject' => $this->Subject
				':attendance' => $this->attendance,
				':remarks' => $this->remarks
				

				//'exampleEncoded' => $this->exampleEncoded
			];
			// execute query
			$stmt = DB::Run($query, $param);
		}
		elseif ($subject == 'AddMath')
		{
			

			$query = "UPDATE AddMathA SET attendance = :attendance, remarks = :remarks, thedate = now() WHERE no = ".$i."";
			$param = [ //bind parameter :name and :email to this class attributes
				//':Subject' => $this->Subject
				':attendance' => $this->attendance,
				':remarks' => $this->remarks
				
				//'exampleEncoded' => $this->exampleEncoded
			];
			// execute query
			$stmt = DB::Run($query, $param);
		}

		
	}

		


	//retrieve all data in database
	public static function All($subject)
	{
		
		
		if ($subject == 'Biology')
		{
			$query = "SELECT * FROM BiologyA";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$attendancebiology = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $attendancebiology;
		}
		elseif ($subject == 'AddMath')
		{
			$query = "SELECT * FROM AddMathA";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$attendanceaddmath = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $attendanceaddmath;
		}
			
		
		
	}
	
}