<?php


require_once'../Model/payment.php';
/**
 * 
 */
class PaymentController
{

	public function view()
	{
		$payment = Payment::All();
		return $payment;
	}
	

	public static function Pmethod()
	{
		 
		if ($_GET['radio'] == 'bank') {
    		 header('Location:https://www.bankislam.biz/');
						} 		
		elseif ($_GET['radio'] == 'Bank2') {
    		 header('Location:https://www.cimbclicks.com.my/clicks/#/');
				} 
		else {
			 header('Location:https://www.maybank2u.com.my/home/m2u/common/login.do');
    		 
				}
				 
	}
	

	public static function PayMethod()
	{
		if ($_GET['Pmethod'] == 'p1') {
    		header("<p><input type='radio' name='radio' id='bank' value='bank'>Bank Islam</p>");
            header("<p><input type='radio' name='radio' id='Bank2' value='Bank2'>CIMB Bank</p>");
            header("<p><input type='radio' name='radio' id='Bank3' value='Bank3'>Maybank</p>");
						} 		
		else {
			 header('Location:payment1(1).php');
    		 
				}
	}

	public static function PayMethod2()
	{
		if ($_GET['Pmethod'] == 'p1') {
			 header('Location:payment2(1).php');
						} 		
		else {
			 header('Location:payment2(1).php');
    		 
				}
	}

	public function add()
	{

		$payment = new Payment();
		

		//set value of attrivutes in User class
		//the value get from form using post method
		$payment->Name = $_POST['Name'];
		$payment->ID = $_POST['ID'];
		$payment->Prove = $_POST['Prove'];


		//calling save method in User class
		$payment->save();
	}
}