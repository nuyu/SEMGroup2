<?php

require_once '../library/database.php';

/**
 * 
 */
class Staff
{
	
	
	public $Username;
	public $StaffID;
	public $DateJoined;
	public $PhoneNo;
	public $Name;
	public $Email;
	public $IC;
	public $Gender;
	public $Position;
	public $Address1;
	public $Address2;
	public $City;
	public $State;
	public $PostalCode;
	public $Country;


	public function save()
	{

		$query = "INSERT INTO  staff (Username,DateJoined,PhoneNo,Name,Email,IC,Gender,Position,Address1,Address2,City,State,PostalCode,Country)VALUES (:Username,:DateJoined,:PhoneNo,:Name,:Email,:IC,:Gender,:Position,:Address1,:Address2,:City,:State,:PostalCode,:Country)";

		$param = [':Username' => $this->Username,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Name'=> $this->Name,':Email'=> $this->Email,':IC' => $this->IC,':Gender'=> $this->Gender,':Position' => $this->Position,':Address1'=> $this->Address1,':Address2' => $this->Address2,':City'=> $this->City,':State' => $this->State,':PostalCode'=> $this->PostalCode,':Country' => $this->Country,];

		$stmt = DB::Run($query,$param);
		

	}




	public function update()
	{

		$query = "UPDATE  staff SET Username=:Username,DateJoined=:DateJoined,PhoneNo=:PhoneNo,Name=:Name,Email=:Email,IC=:IC,Gender=:Gender,Position=:Position,Address1=:Address1,Address2=:Address2,City=:City,State=:State,PostalCode=:PostalCode,Country=:Country where StaffID=:StaffID";

		$param = [':Username' => $this->Username,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Name'=> $this->Name,':Email'=> $this->Email,':IC' => $this->IC,':Gender'=> $this->Gender,':Position' => $this->Position,':Address1'=> $this->Address1,':Address2' => $this->Address2,':City'=> $this->City,':State' => $this->State,':PostalCode'=> $this->PostalCode,':Country' => $this->Country,];

		$stmt = DB::Run($query,$param);
		

	}

	public static function All($value='')
	{
		$query = "SELECT * FROM staff";

		$staff = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $staff;

	}
}
?>