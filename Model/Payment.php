<?php

require_once '../library/database.php';

/**
 * 
 */

class Payment
{
	

	public $id = 12345;


	public function save()
	{

		$query = "INSERT INTO payment(Name,ID,Prove) VALUES(:Name,:ID,:Prove) ";
		$param = [':Name' => $this->Name,':ID'=> $this->ID,':Prove'=>$this->Prove];

		$stmt = DB::Run($query,$param);
		

	}

	public static function All($value='')
	{
		$query = "SELECT * FROM payment where ID = 12345";


		$payment = DB::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $payment;

	}


}
?>