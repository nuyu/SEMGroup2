<?php

require_once '../library/database.php';

/**
 * 
 */
class Parents
{
	
	
	public $Username;
	public $ParentID;
	public $DateJoined;
	public $PhoneNo;
	public $Name;
	public $Email;
	public $IC;
	public $Gender;
	public $Occupation;
	public $Address1;
	public $Address2;
	public $City;
	public $State;
	public $PostalCode;
	public $Country;


	public function save()
	{

		$query = "INSERT INTO  parent (Username,DateJoined,PhoneNo,Name,Email,IC,Gender,Occupation,Address1,Address2,City,State,PostalCode,Country)VALUES (:Username,:DateJoined,:PhoneNo,:Name,:Email,:IC,:Gender,:Occupation,:Address1,:Address2,:City,:State,:PostalCode,:Country)";

		$param = [':Username' => $this->Username,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Name'=> $this->Name,':Email'=> $this->Email,':IC' => $this->IC,':Gender'=> $this->Gender,':Occupation' => $this->Occupation,':Address1'=> $this->Address1,':Address2' => $this->Address2,':City'=> $this->City,':State' => $this->State,':PostalCode'=> $this->PostalCode,':Country' => $this->Country,];

		$stmt = DB::Run($query,$param);
		

	}




	public function update()
	{

		$query = "UPDATE  parent SET Username=:Username,DateJoined=:DateJoined,PhoneNo=:PhoneNo,Name=:Name,Email=:Email,IC=:IC,Gender=:Gender,Occupation=:Occupation,Address1=:Address1,Address2=:Address2,City=:City,State=:State,PostalCode=:PostalCode,Country=:Country where ParentID=:ParentID";

		$param = [':Username' => $this->Username,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Name'=> $this->Name,':Email'=> $this->Email,':IC' => $this->IC,':Gender'=> $this->Gender,':Occupation' => $this->Occupation,':Address1'=> $this->Address1,':Address2' => $this->Address2,':City'=> $this->City,':State' => $this->State,':PostalCode'=> $this->PostalCode,':Country' => $this->Country,];

		$stmt = DB::Run($query,$param);
		

	}

	public static function All($value='')
	{
		$query = "SELECT * FROM parent";

		$parent = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $parent;

	}
}
?>