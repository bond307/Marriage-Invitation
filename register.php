<?php
require("main.php");
if(isset($_POST['signup']))
  {
    $value2='';
    $query = "SELECT customer_id from register order by customer_id DESC LIMIT 1";
    $stmt = mysqli_query($con, $query)or die(mysqli_error($con));
    if(mysqli_num_rows($stmt) > 0) {
        echo mysqli_num_rows($stmt);
        if ($row6 = mysqli_fetch_assoc($stmt)) {
            $value2 = $row6['customer_id'];
            $value2 = $value2 + 1;//Incrementing numeric part
            $value = $value2; 
        }
    } 
    else {
        $value2 = "1100";
        $value = $value2;
    }
  $customer_id=$value;
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $password=sha1($_POST['password']);
  $cpassword=sha1($_POST['cpassword']);
  $permission="2";
  $addinvi="1";
  $table="register";
  $fields="customer_id,name,mobile_no,email,password,confirm_password,permission,addinvi";
  $value="'$customer_id','$name','$mobile','$email','$password','$cpassword','$permission','$addinvi'";
  $user_permission="0";
  $demo_name="";
  $demo="";
  $demo_url="";
  $amount="0";
  $payment_status="0";
  $invoice_number="";
  $userlink="";
  $order_time="";
    if($password==$cpassword)
    {
    $message=$obj->insertall($table,$fields,$value);
	$sql="INSERT INTO payment_details(id,user_name,user_permission,demo_name,demo,demo_url,amount,payment_status,invoice_number,userlink,order_time)
	VALUES('$customer_id','$name','$user_permission','$demo_name','$demo','$demo_url','$amount','$payment_status','$invoice_number','$userlink','$order_time')";
	$result=mysqli_query($con,$sql)or die (mysqli_error($con));	
    header("LOCATION:login.php?message=You are registered successfully.Now you can login..");
	$textMessage="Dear ".$name.", Thank you for signing up. Welcome to mymarriageinvitation .com ! Hope you can love this. With regards: www.mymarriageinvitation.com";
	$mobileNumber=$_POST["mobile"];
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
      $msg="<div class='alert alert-danger'>password mismatching</div>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Marriage Invitation - Register</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CMerienda:400,700,700i%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-1.css">
    <!-- Nile Slider -->
    <link rel="stylesheet" href="assets/css/nile-slider.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="assets/css/ekko-lightbox.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/rslider/css/settings.css">
</head>

<body class="background-white" style="background-image: url('assets/img/page_title.jpg');">


    <!-- ============ HEADER ============ -->
    <header class="layout-1">
        <div class="header-output">
            <div class="header-output">
                <div class="container header-in">
                    <div class="position-relative">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img src="assets/img/logo1.png" alt=""></a>
                                <a class="mobile-toggle padding-15px background-main-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="col-lg-7 col-md-12 position-inherit">

                                <ul id="menu-main" class="nav-menu float-xl-right text-lg-center link-padding-tb-35px dropdown-light">
                                     <li class=""><a href="index.php">Home</a></li>
                                    <li class=" "><a href="services.php">Services</a></li>
                                    <li class=" "><a href="view_demo.php">View Demo's</a></li>
                                    <li class="active "><a href="contact.php">Contact Us</a></li>
                                </ul>

                            </div>
                            <div class="col-lg-2 col-md-12  d-none d-lg-block text-right">
                                <div class="margin-tb-25px">
                                     <a class="ba-2 nile-bottom layout-2 margin-right-0px opacity-hover-8" href="login.php">
                                        <i class="fa fa-heart-o"></i> &nbsp; Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </header>

    <div class="page-output padding-tb-100px">
        <div class="container padding-top-100px">
            <div class="section-title layout-1 text-center">
                 <div class="row justify-content-center">
                <div class="col-lg-6">
                    <?php
                      if(isset($message))
                      {
                        echo $message;
                      }
                       if(isset($msg))
                      {
                        echo $msg;
                      }
                    ?>
                     <form class="modal-content animate nile-content cart dark invitation" id="myform" action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text"  placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" placeholder="Enter Mobile no" name="mobile" required>
                        </div> 
                        <div class="form-group col-md-12">
                            <input type="text" placeholder="Enter Email" name="email" onkeyup="loadXMLDoc(this.value)" required>
                            <div id="emaildiv"></div>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="password" placeholder="Enter Password" name="password" required>
                        </div> 
                         <div class="form-group col-md-12">
                            <input type="password" placeholder="Enter Confirm Password" name="cpassword" required>
                        </div>
                        <div class="col-md-12 text-center">
                                <button type="submit" name="signup" class="nile-bottom layout-2">Sign Up</button>
                                &nbsp&nbsp&nbsp&nbsp&nbsp<a class="nile-bottom layout-2" href="login.php">Sign In</a>
                        </div>
                </div>
            </form>
                </div>
            </div>
            </div>
         </div>
             <div class="bottom-effect-ba"></div>
    </div>

    <!-- preloader --> <div class="nile-preloader"> <div class="logo"> <img src="assets/img/loading-1.svg" alt=""> </div> </div> <!-- end preloader --> <footer class=" padding-tb-130px">
        
    </footer>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/masonry.min.js"></script>
    <script src="assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/ekko-lightbox.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function(){


    $("#myform").validate({
      
    rules: {
      name: {
        required: true,
        maxlength: 50
      },
       mobile:{
      required:true,
      maxlength:10,
      number:true
    },
   email: {
        required: true,
        maxlength: 50,
        email: true
            },
    password:{
      required:true
    },
    cpassword:{
      required:true
    }
    },
    messages: {
      name: {
        required: "Please enter name",
        maxlength: "Your name maxlength should be 50 characters long."
      },
      mobile:{
      required:"Please Enter a phone no",
      maxlenght:"Maximum length should be 10",
      number:"Should contain only numbers"
    },
     email: {
          required: "Please enter valid email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters"
        },
    password:{
      required:"Please enter a Password"
    },
    password:{
      required:"Please enter a Password"
    }
    },
    submitHandler: function(form) {
     form.submit();
    }
});               
});
                function loadXMLDoc(em)
                {
                    var xmlhttp;
                    if(window.XMLHttpRequest)
                    {
                        xmlhttp=new XMLHttpRequest;
                    }
                    else
                    {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
                    }
                        xmlhttp.onreadystatechange=function()
                    {
                        if(xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                            document.getElementById("emaildiv").innerHTML=xmlhttp.responseText;
                        
                        }
                    }
                    xmlhttp.open("GET","information.php?mailid="+em,true);
                    xmlhttp.send();
                }
            </script>
</body>

</html>
