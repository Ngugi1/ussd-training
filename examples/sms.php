<?php
//receive the sms, phone, Message
$sms = getSmsInput();
print_r($sms);
exit;
//send back a message to the phone number_format

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


 ?>
