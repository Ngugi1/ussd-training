<?php

getInput();

$message = "Your Phone number is: ".$phoneNumber.". Session is: ".$sessionId." You have sent text as: ".$text;

sendOutput($message,1);



////



function getInput(){

$sessionId   = $_REQUEST["sessionId"];
$serviceCode = $_REQUEST["serviceCode"];
$phoneNumber = $_REQUEST["phoneNumber"];
$text        = $_REQUEST["text"];

}

function sendOutput($message,$type=2){
	//Type 1 is a continuation, type 2 output is an end

	if($type==1){
		echo "CON ".$message;
	}elseif($type==2){
		echo "END ".$message;
	}else{
		echo "END We faced an error";
	}

}
//
// *222*4*5*7#
// Structure of a USSD Code
// *222*Leo*Secondname*34234*Nairobi#



// return "hello world";
$leo = ['name'=>'Leo', 'staff_id' => 1234];

$macharia = ['name'=>'Macharia', 'staff_id' => 12345];

$kevin = ['name'=>'Kevin', 'staff_id' => 231];
