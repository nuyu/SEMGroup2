<?php

require_once '../library/database.php';


class Teacher
{
	public $Username;
	public $TeacherID;
	public $DateJoined;
	public $PhoneNo;
	public $Subject;
	public $Email;
	public $IC;
	public $Gender;
	public $Name;
	public $Address1;
	public $Address2;
	public $City;
	public $State;
	public $PostalCode;
	Public $Country;


	public function save ()
	{

		$query = "INSERT INTO teacher (Username,TeacherID,DateJoined,PhoneNo,Subject,Email,IC,Gender,Name,Address1,Address2,City,State,PostalCode,Country) VALUES (:Username,:TeacherID,:DateJoined,:PhoneNo,:Subject,:Email,:IC,:Gender,:Name,:Address1,:Address2,:City,:State,:PostalCode,:Country)";


		$param = [':Username' => $this->Username,':TeacherID' => $this->TeacherID,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Subject' => $this->Subject,':Email' => $this->Email,':IC' => $this->IC,':Gender' => $this->Gender,':Name' => $this->Name,':Address1' => $this->Address1,':Address2' => $this->Address2,':City' => $this->City,':State' => $this->State,':PostalCode' => $this->PostalCode,':Country' => $this->Country];


		$stmt = DB::Run($query,$param);
	}

	public function update ()
	{

		$query = "UPDATE teacher SET Username=:Username,DateJoined=:DateJoined,PhoneNo=:PhoneNo,Subject=:Subject,Email=:Email,IC=:IC,Gender=:Gender,Name=:Name,Address1=:Address1,Address2=:Address2,City=:City,State=:State,PostalCode=:PostalCode,Country=:Country where TeacherID=:TeacherID";

		$param = [':Username' => $this->Username,':TeacherID' => $this->TeacherID,':DateJoined' => $this->DateJoined,':PhoneNo' => $this->PhoneNo,':Subject' => $this->Subject,':Email' => $this->Email,':IC' => $this->IC,':Gender' => $this->Gender,':Name' => $this->Name,':Address1' => $this->Address1,':Address2' => $this->Address2,':City' => $this->City,':State' => $this->State,':PostalCode' => $this->PostalCode,':Country' => $this->Country];

		$stmt = DB::Run($query,$param);
	}

	public static function All($value='')
	{
		$query = "SELECT * FROM teacher";

		$teacher = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $teacher;

	}


}
?>