<?php
//receive the sms, phone, Message
$sms = getSmsInput();

$reply = "Thank you for your SMS";

sendSmsOutput($sms['from'],$reply);
exit;
//send back a message to the phone number_format
function sendSmsOutput($to,$message){
  $payload['payload'] = array('task'=>'send','secret'=>'');

  $messages = array('to'=>$to,'message'=>$message);

  //array_push($reply['messages'],$message1);
  $payload['payload']['messages'] = $messages;
  header('content-type: application/json; charset=utf-8');
	echo json_encode($payload);
  //array_push($payload['payload'],$reply);
  // print_r($payload);
  exit;

}
function getSmsInput(){
  $sms['from'] = $_REQUEST['from'];
  $sms['message'] = $_REQUEST['message'];
  return $sms;
}




// $leo = array('name'=>'leo','staff_id'=>1);
//
// $leo = json_encode($leo);
//
// $leo = json_decode($leo);

// print_r($leo);
// exit;


//array str_shuffle
// $staff = array();
// $leo = array('name'=>'leo','staff_id'=>1);
// array_push($staff,$leo);
// //print_r($staff);
//
// //exit;
// $macharia = array('name'=>'Macharia','staff_id'=>2);
// array_push($staff,$macharia);
// //$staff = array($leo,$macharia);
// print_r($staff);
// exit;


 ?>
