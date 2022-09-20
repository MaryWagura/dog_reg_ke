<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('access_token.php');

$userData = file_get_contents('php://input');
// $ipaddress = getHostByName(getHostByName());

$token =$access_token;
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';


$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$curl=curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.":".$consumerSecret);

$result=curl_exec($curl);
$status=curl_getinfo($curl,CURLINFO_HTTP_CODE);
$result=json_decode($result);

$access_token=$result->access_token;

// //echo $access_token;

// $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization:Bearer" .$access_token));


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
$CallBackURL=' https://still-scrubland-73108.herokuapp.com/callback_lnm.php';
$AccountReference=$data->accRef;
$TransactionDesc='Dog Registration Kenya';
$passkey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
$Password=base64_encode($BusinessShortCode.$passkey.$Timestamp);
// # header for access token
//   $headers = ['Content-Type:application/json; charset=utf8'];

//     # M-PESA endpoint urls
//   $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
//   $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

//   # callback url
//   $CallBackURL = 'https://radiant-castle-32278.herokuapp.com/callback_url.php';  



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