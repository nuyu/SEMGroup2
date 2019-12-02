<?php

require_once '../library/database.php';

/**
 * 
 */
class announcement
{
	//attributes
	// if private need to use setter/getter
	public $dateAnn;
	public $subjectC;
	public $subjectAnn;

	public function save()
	{
		//insert query              //column name        //insert data
		$query = "INSERT INTO announcement ( dateAnn, subjectC, subjectAnn) VALUES ( :dateAnn, :subjectC,:subjectAnn )";
		$param = [ //bind parameter :name and :email to this class attributes
		    ':dateAnn' => $this->dateAnn,
		    ':subjectC' => $this->subjectC,
			':subjectAnn' => $this->subjectAnn,

		]; // [] means array

		//execute query
		$stmt = DB::Run($query, $param);
	}

	/**
	* Retrieve all data in database
	*/

	public static function All($value='')
	{
		//SELECT query
		$query = "SELECT * From announcement";

		//DB::Run will execute the query and FetchAll will retrieve All data.
		//use fetch to retrieve only 1 data
		$announcement = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $announcement;
	}

	public function update()
	{
		$query = "UPDATE announcement SET subjectC=:subjectC,subjectAnn=:subjectAnn WHERE dateAnn=:dateAnn";
		$param = [ // the parameter that will be bind by pdo
			':dateAnn' => $this->dateAnn,
		    ':subjectC' => $this->subjectC,
			':subjectAnn' => $this->subjectAnn,

			];	

		$stmt = DB::Run($query,$param);
	}
	
}