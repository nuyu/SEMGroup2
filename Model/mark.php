<?php

require_once '../library/database.php';

/**
 * 
 */
class mark
{
	//attributes
	//if private need to use setter/getter
	//public $month;
	//public $mark1;
	//public $mark2;
	//public $mark3;
	//public $mark4;
	//public $mark5;
	//public $mark6;
	//public $comment1;
	//public $comment2;
	//public $comment3;
	//public $comment4;
	//public $comment5;
	//public $comment6;
	public $no;
	public $mark;
	public $comment;
	public $subject;

	public function update($i, $subject)
	{

		if($subject == 'Biology')
		{
			$query ="UPDATE BiologyA SET mark = :mark, comment = :comment WHERE no =".$i."";
			$param = [
				':mark' => $this->mark,
				':comment' => $this->comment

			];
			//execute query
			$stmt = DB::Run($query, $param);
		}
		elseif ($subject == 'AddMath')
		{
			$query ="UPDATE AddMathA SET mark = :mark, comment = :comment WHERE no =".$i."";
			$param = [
				':mark' => $this->mark,
				':comment' => $this->comment

			];
			//execute query
			$stmt = DB::Run($query, $param);

		}
	}


		//insert query              //column name       //insert data
		//$query ="INSERT INTO addmark (month, mark1, mark2, mark3, mark4, mark5, mark6, comment1, comment2, comment3, comment4, comment5, comment6) VALUES (:month, :mark1, :mark2, :mark3, :mark4, :mark5, :mark6, :comment1, :comment2, :comment3, :comment4, :comment5, :comment6)";
		//$param= [ //bind parameter :name and :email to this class attributes
			//':month' => $this->month,
			//':mark1' => $this->mark1,
			//':mark2' => $this->mark2,
			//':mark3' => $this->mark3,
			//':mark4' => $this->mark4,
			//':mark5' => $this->mark5,
			//':mark6' => $this->mark6,
			//':comment1' => $this->comment1,
			//':comment2' => $this->comment2,
			//':comment3' => $this->comment3,
			//':comment4' => $this->comment4,
			//':comment5' => $this->comment5,
			//':comment6' => $this->comment6
		 //[] means array

		//execute query

	/**
	*Retrieve all data in database
	*/
	public static function All($subject)
	{
		if ($subject == 'Biology')
		{

			$query = "SELECT * FROM BiologyA";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$biologya = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $biologya;
		}
		elseif ($subject == 'AddMath')
		{
			$query = "SELECT * FROM AddMathA";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$addmatha = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $addmatha;
		}
	}

	public static function AllStudent($subject)
	{
		if ($subject == 'Biology')
		{

			$query = "SELECT * FROM BiologyA WHERE no=1";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$biologya = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $biologya;
		}
		elseif ($subject == 'AddMath')
		{
			$query = "SELECT * FROM AddMathA WHERE no=1";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$addmatha = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $addmatha;
		}
	}

	public static function AllParent($subject)
	{
		if ($subject == 'Biology')
		{

			$query = "SELECT * FROM BiologyA WHERE no=2";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$biologya = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $biologya;
		}
		elseif ($subject == 'AddMath')
		{
			$query = "SELECT * FROM AddMathA WHERE no=2";
			//DB::Run will execute the query and fetchAll will retrieve All data.

			//use fetch to retrieve only 1 data
			$addmatha = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

			return $addmatha;
		}
	}


}