<?php

$sessionId   = $_REQUEST["sessionId"];
$serviceCode = $_REQUEST["serviceCode"];
$phoneNumber = $_REQUEST["phoneNumber"];
$text        = $_REQUEST["text"];



echo "END Your Phone number is: ".$phoneNumber.". Session is: ".$sessionId." You have sent text as: ".$text;
//
// *222*4*5*7#
// Structure of a USSD Code
// *222*Leo*Secondname*34234*Nairobi#



// return "hello world";
$leo = ['name'=>'Leo', 'staff_id' => 1234];

$macharia = ['name'=>'Macharia', 'staff_id' => 12345];

$kevin = ['name'=>'Kevin', 'staff_id' => 231];
