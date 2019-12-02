<?php

require_once '../library/database.php';


class Student
{
	public $Username;
	public $StudentID;
	public $Name;
	public $Email;
	public $IC;
	public $Gender;
	public $FatherName;
	public $MotherName;
	public $ParentID;
	public $PhoneNo;
	public $GuardianNo;
	public $Address1;
	public $Address2;
	public $City;
	public $State;
	public $PostalCode;
	Public $Country;
	Public $DateJoined;


	public function save ()
	{

		$query = "INSERT INTO student (Username,StudentID,Name,Email,IC,Gender,FatherName,MotherName,ParentID,PhoneNo,GuardianNo,Address1,Address2,City,State,PostalCode,Country,DateJoined) VALUES (:Username,:StudentID,:Name,:Email,:IC,:Gender,:FatherName,:MotherName,:ParentID,:PhoneNo,:GuardianNo,:Address1,:Address2,:City,:State,:PostalCode,:Country,:DateJoined)";


		$param = [':Username' => $this->Username,':StudentID' => $this->StudentID,':Name' => $this->Name,':Email' => $this->Email,':IC' => $this->IC,':Gender' => $this->Gender,':FatherName' => $this->FatherName,':MotherName' => $this->MotherName,':ParentID' => $this->ParentID,':PhoneNo' => $this->PhoneNo,':GuardianNo' => $this->GuardianNo,':Address1' => $this->Address1,':Address2' => $this->Address2,':City' => $this->City,':State' => $this->State,':PostalCode' => $this->PostalCode,':Country' => $this->Country,':DateJoined' => $this->DateJoined];


		$stmt = DB::Run($query,$param);
	}

	public function update ()
	{

		$query = "UPDATE student SET Username=:Username,Name=:Name,Email=:Email,IC=:IC,Gender=:Gender,FatherName=:FatherName,MotherName=:MotherName,ParentID=:ParentID,PhoneNo=:PhoneNo,GuardianNo=:GuardianNo,Address1=:Address1,Address2=:Address2,City=:City,State=:State,PostalCode=:PostalCode,Country=:Country,DateJoined=:DateJoined where StudentID=:StudentID";

		$param = [':Username' => $this->Username,':StudentID' => $this->StudentID,':Name' => $this->Name,':Email' => $this->Email,':IC' => $this->IC,':Gender' => $this->Gender,':FatherName' => $this->FatherName,':MotherName' => $this->MotherName,':ParentID' => $this->ParentID,':PhoneNo' => $this->PhoneNo,':GuardianNo' => $this->GuardianNo,':Address1' => $this->Address1,':Address2' => $this->Address2,':City' => $this->City,':State' => $this->State,':PostalCode' => $this->PostalCode,':Country' => $this->Country,':DateJoined' => $this->DateJoined];

		$stmt = DB::Run($query,$param);
	}

	public static function All($value='')
	{
		$query = "SELECT * FROM student";

		$student = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $student;

	}


}
?>