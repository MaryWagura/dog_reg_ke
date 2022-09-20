<?php

require('../classes/config.php');
header("Content-Type: application/json");

//MPESA DATA
$mpesaResponse = file_get_contents('php://input');

//log the response
// $logFile="LNMCallback.txt";
// $log=fopen($logFile,"a");
 fwrite($log, $mpesaResponse);
 fclose($log);
print_r($mpesaResponse);
$data=json_decode($mpesaResponse);
print_r($data);


$MerchantRequestID=$data->Body->stkCallback->MerchantRequestID;
$CheckoutRequestID=$data->Body->stkCallback->CheckoutRequestID;
$ResultCode=$data->Body->stkCallback->ResultCode;

if($ResultCode==0)
{
	$Amount=$data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
	$MpesaReceiptNumber=$data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	$TransactionDate=$data->Body->stkCallback->CallbackMetadata->Item[3]->Value;
	$PhoneNumber=$data->Body->stkCallback->CallbackMetadata->Item[4]->Value;

	// INSERT INTO DATABASE
	$qryArray=array(
		":MerchantRequestID"=>$MerchantRequestID,
		":CheckoutRequestID"=>$CheckoutRequestID,
		":Amount"=>$Amount,
		":MpesaReceiptNumber"=>$MpesaReceiptNumber,
		":TransactionDate"=>$TransactionDate,
		":PhoneNumber"=>$PhoneNumber
	);
	}
$servername = "localhost";
$username = "root1";
$password = "password";
$dbname = "dogregistrationke";
// Create connection
$dbname= new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($dbname->connect_error) {
    die("Connection failed: " . $dbname->connect_error);
} 
// $LicenseNumber=$_POST['LicenseNumber'];
// $MpesaInvoice=$_POST ['MpesaInvoice'];


// 	  $sql = "INSERT INTO paymentdetials(LicenseNumber, MpesaInvoice)
//      VALUES ('$LicenseNumber', '$MpesaInvoice)";

//         if ($dbname->query($sql) === TRUE) {
//     echo "Records entered successfully";
//  header('Location:Registerpet.php');
// } else {
//     echo "Error: " . $sql . "<br>" . $dbname->error;
// }
// $insert= $dbname->query("SELECT LicenseNumber, MpesaInvoice FROM paymentdetials");

?>
