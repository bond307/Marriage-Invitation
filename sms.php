<?php
if(isset($_POST['submit']))
{
    require("config.php");
    $id=$_POST["id"];
	$textMessage=$_POST["userMessage"];
	$mobileNumber=$_POST["userMobile"];
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
    // Process your response here
    if($response)
    {
    $sql1="UPDATE payment_details SET user_permission=4 WHERE user_id='$id'";
    $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
        if($result1)
        {
            header("LOCATION:delivered_user.php");
        }
    }
}
    ?>

