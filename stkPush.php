<?php

require('../mpesaClasses/access_token.php');

$userData = file_get_contents('php://input');
// $ipaddress = getHostByName(getHostByName());


$token =$access_token;
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization:Bearer $token"));


if (date('G')<10)
{
  $Timestamp=date('Ymd')."0".date('Gis');
}else{
  $Timestamp=date('YmdGis');
}

$data = json_decode($userData);

$BusinessShortCode='174379';
$Amount=$data->Amount;
$PhoneNumber=$data->telNum;
$CallBackURL=' https://305c3f38.ngrok.io/LNM/callback_lnm.php';
// $CallBackURL= 'http://'.$ipaddress.'/Payment.php';
$AccountReference=$data->accRef;
$TransactionDesc='THE DOG REGISTRATION KE LICENSE';
$passkey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
$Password=base64_encode($BusinessShortCode.$passkey.$Timestamp);



$curl_post_data = array(
  'BusinessShortCode' => $BusinessShortCode,
  'Password' => $Password,
  'Timestamp' => $Timestamp,
  'TransactionType' => 'CustomerPayBillOnline',
  'Amount' => $Amount,
  'PartyA' => $PhoneNumber,
  'PartyB' => $BusinessShortCode,
  'PhoneNumber' => $PhoneNumber,
  'CallBackURL' => $CallBackURL,
  'AccountReference' => $AccountReference,
  'TransactionDesc' => $TransactionDesc
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);

$mpesaResponse=json_decode($curl_response);

if($mpesaResponse->ResponseDescription == "Accept the service request successfully.")
{
      echo 'success';
}else{
  echo 'denied';

}


?>