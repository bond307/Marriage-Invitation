<?php
require("main.php");
?>
<?php

require('config.php');

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$keyId='rzp_live_lEdaCaoDylKo9L';
$keySecret='PxM8i5uQPiwmfTRkG6PLUMNn';
$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $status=1;
    $html = "<p style='color:#3fcc68;'>payment done successfully......</p>
             <p>We will contact when the page ready..(Estimated delivery 1-2 days)</p>";
	
			                     $id=$_SESSION["isloginid"];
								 $name=$_SESSION["islogin"];
                                 $_SESSION["number"]=$value;
                                 $query = "SELECT mobile_no FROM register WHERE id='$id'";
    $stmt = mysqli_query($con, $query)or die(mysqli_error($con));
    $rowin=mysqli_fetch_array($stmt);
    $value=$rowin['mobile_no'];
	$query1= "SELECT * FROM payment_details WHERE user_id='$id'";
    $stmt1 = mysqli_query($con, $query1)or die(mysqli_error($con));
    $row=mysqli_fetch_array($stmt1);
    $demo_name=$row['demo_name'];
	$demoname=$demo_name;
    $amount=$row['amount'];	
	$price=$amount;
     	
    $textMessage="Hai ".$name." ! Your Order for the Demo: ".$demoname.", Total cost: ".$price."/- was successfully placed. Order ID: 1".$id."1. Your Invitation expected to be delivered within two days. Thank you for your order in www.mymarriageinvitation.com  	";
	$mobileNumber=$value;
    // Account details
    $apiKey = urlencode('azAtHVVJPrA-EY8yx58EZC9Xnl5XJew1Zhz98Iv5QM');
    // Message details
    $numbers = array($mobileNumber);
    $sender = urlencode('NEETEC');
    $message = $textMessage;
     
    $numbers = implode(',', $numbers);
     
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
}
else
{
    $status=0;
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}
  date_default_timezone_set("Asia/kolkata");
 $orderdate = date("d-m-Y,H:i:s");  
$user_id=$_SESSION["isloginid"];
$user_name=$_SESSION["islogin"];
$table="payment_details";
$fields="payment_status='1',user_permission='1',order_time='$orderdate'";
$value="user_id='$user_id'";
$obj->updateall($table,$fields,$value);
$msg=urlencode($html);
//echo $msg;
header("Location:payment_done.php");
