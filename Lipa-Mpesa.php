<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function accessTokenGenerator(){
  //Access token
  $consumerKey ="30seb4c6qEUVhsmVGFwHbtgUAMXTCSka";
$consumerSecret = "Ev4Av18m4ZMwzznY";


  
$headers=['Content-Type:application/json; charset=utf8'];

$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$curl=curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.":".$consumerSecret);
$credentials = base64_encode('VEV5SkhsWFFSQkxBdFJBR2c2S3A1N2x3amtlUVc5Z0Y6UVBWdVNuNUVrUk1hazJHQQ');
  

  $curl_response = curl_exec($curl);//Contains the access token and the time it takes to expire

  $access_token = json_decode($curl_response)->access_token;
 // var_dump( $access_token); 

//echo $curl_response;
//Testing works.
  curl_close($curl);
  return $access_token;
  

}
//exit("Try again");

function mpesaSendMoney($phone_no, $total_amt, $accRef, $access_token ){
  //define variables
  $phone_no =ltrim($phone_no, '0');
  $localIP = getHostByName(getHostName());
  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  $BusinessShortcode = '174379';
  $Timestamp = date('YmdHis');
  $PartyA = '254'.$phone_no;//25491278088
   $CallBackURL = 'https://still-scrubland-73108.herokuapp.com/callback_lnm.php';
  $AccountReference = $accRef; 
  $TransactionDesc =  'Dog Registration Kenya ';
  $Amount = $total_amt;
  $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
  $Password=base64_encode($BusinessShortcode.$Passkey.$Timestamp);

  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $initiate_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header


  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => $BusinessShortcode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' =>$Amount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortcode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
  );

  $data_string = json_encode($curl_post_data);

  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  $curl_response = curl_exec($curl);
 // print_r($curl_response);
 //echo $curl_response;
exit;

//   if($curl_response)
//   {
//     echo '<script>alert("You payment was received!")</script>';
//     echo'<script>window.location="Login.php"</script>';
//   }else 
//   echo '<script>alert("The payment failed")</script>';
//   echo'<script>window.location="Payment.php"</script>';
// }
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}