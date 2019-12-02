<?php

//include class model user
require_once '../Model/Attendance.php';

/**
* 
*/
class AttendanceController 
{
	public function view($subject)
	{
		//call static method All from user class
			
			
			$attendance= Attendance::All($subject);

			return $attendance;
	

	}

      
	

    public function add($subject)
	{
		// check if data is submitted
		//check data from 

		$attendance = new Attendance();
		$attendance->attendance = $_POST['attendance'][1];
		$attendance->remarks = $_POST['remarks'][1];
		$attendance->save(1,$subject); 
		
		$attendance = new Attendance();
		$attendance->attendance = $_POST['attendance'][2];
		$attendance->remarks = $_POST['remarks'][2];
		$attendance->save(2,$subject); 

		$attendance = new Attendance();
		$attendance->attendance = $_POST['attendance'][3];
		$attendance->remarks = $_POST['remarks'][3];
		$attendance->save(3,$subject); 

		$attendance = new Attendance();
		$attendance->attendance = $_POST['attendance'][4];
		$attendance->remarks = $_POST['remarks'][4];
		$attendance->save(4,$subject); 

		$attendance = new Attendance();
		$attendance->attendance = $_POST['attendance'][5];
		$attendance->remarks = $_POST['remarks'][5];
		$attendance->save(5,$subject); 

		$attendanc = new Attendance();
		$attendance->attendance = $_POST['attendance'][6];
		$attendance->remarks = $_POST['remarks'][6];
		$attendance->save(6,$subject); 
	


			}
		}
