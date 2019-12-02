<?php

require_once '../library/database.php';

class User
{
	
	
	public $Username;
	public $Password;
	public $Email;
	public $Category;


	public function save()
	{

		$query = "INSERT INTO user (Username,Password,Email,Category) VALUES(:Username,:Password,:Email,:Category) ";
		$param = [':Username' => $this->Username,':Password' => $this->Password,':Email'=> $this->Email,':Category' => $this->Category];

		$stmt = DB::Run($query,$param);
		

	}

	public static function All($value='')
	{
		

		$query = "SELECT * FROM user ";
		//$param = [':Username' => $this->Username,':Password' => $this->Password,':Category' => $this->Category];
		

		$user = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $user;

	}
}
?>