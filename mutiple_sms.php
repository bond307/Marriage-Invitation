<?php
require("main.php");
if(isset($_POST['sub']))
{
    require("config.php");
    $checkbox1=$_POST['techno']; 
     $textMessage=$_POST['message']; 
        $chk="";  
        foreach($checkbox1 as $chk1)  
           {  
              $chk .= $chk1.",";  
           } 
           //echo $chk;
    $id=$_SESSION['isloginid'];
    $receipt=$_SESSION['islogin'];
    $mobileNumber=$chk;
    // Account details
    $apiKey = urlencode('AcrO606OXr0-Yw63t4sl5gUI8Bm084tjzCXDApKkDG');
    // Message details
    //$numbers = array($_POST['techno']);
    $numbers = $mobileNumber;
    $sender = urlencode('602137');
    //$message = $textMessage;
    $message=$textMessage;
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
   // echo $response;
    // Process your response here
  if($response)
    {
        
        header("Location:sms_send_successfully.php");
    }
}
    ?>

