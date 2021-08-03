<?php
require("session.php");
require("user_header.php");
require("config.php");

$user_id=$_SESSION['isloginid'];
$sql1="SELECT * FROM payment_details WHERE user_id='$user_id'";
$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
$rows=mysqli_fetch_array($result1);

if($rows['payment_status']==1) 
{

	//select form data
	$sql2="SELECT * FROM tamplate_info WHERE user_id='$user_id'";
	$form_data_result=mysqli_query($con,$sql2)or die (mysqli_error($con));
	$form_rows=mysqli_fetch_array($form_data_result);

	$g_name = $form_rows['g_name'];
	$b_name = $form_rows['b_name'];

	echo $g_name;
	die();
	//create file
	$file = fopen("wedding/demo.php", "a");
if(fwrite($file, '
	


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Harun Manshi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,300,300italic,400italic,700italic">
</head>
<body>
  <section class="header">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slider4.jpg" style="width:100%">
    </div>

    <div class="item">
      <img src="img/slider2.jpg" style="width:100%">
    </div>

    <div class="item">
      <img src="img/slider3.jpg" style="width:100%">
    </div>
  </div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="fa fa-angle-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="fa fa-angle-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="datafield text-center">
            <img src="img/oval.png">
            <div class="text">
            <h3>Save the Date</h3>
            <p>21/05/2022</p>
          </div>

<h1>హరుణ్ <span>&</span>మాన్షి  </h1>

<p class="getting">వివాహము !</p>

          </div>
        </div>
      </div>
    </div>

    
  </section>
  <section class="logo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <img src="img/logo.png">
      </div>
      </div>
    </div>
  </section>
  <section class="users">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="userfield text-center">
              <img src="img/user1.png">
              <h3>మాన్షి   <span>సోలంకి </span></h3>
              <p>(శ్రీ ప్రకాష్ మరియు శ్రీమతి శాంతి ల పుత్రిక  )</p>
              <p class="major"> B.Tech
			  </p>

<ul>
  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
  </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="userfield invite text-center">
            
              <h3>వివాహ ఆహ్వానము </h3>
              <p>మేము మా వివాహమునకు ,సకుటుంబ సపరివార  సమేతం  ఆహ్వానిస్తున్నాము 
              </p>
              <h4>శుక్రవారం </h4>
<p class="jan_n">21 మే  2022</p>
<p>Mymarriage Convention Hall,పశ్చిమ గోదావరి జిల్లా ,ఆంధ్ర ప్రదేశ్ .</p>
            </div>


<img src="img/user.png" class="varia_img">
          </div>
          <div class="col-md-4">
             <div class="userfield text-center">
              <img src="img/user2.png">
              <h3>హరుణ్  <span> గుప్త</span></h3>
              <p>( శ్రీ ప్రదీప్ మరియు శ్రీమతి వాణి ల పుత్రుడు  )</p>
              <p class="major">MBA
			  </p>

<ul>
  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
   <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
  </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="count">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4 padd-0">
            <p>ముహూర్తమునకు </p>
            <h3>ఇంకనూ <span>సమయము</span></h3>
          </div>
		  <!-- Styles -->
          <div class="col-md-8">
           <!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
var countDownDate = new Date("may 21, 2022 9:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d  " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="users">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>వివాహ కార్యక్రమము </h1>         
          <img src="img/pot1.png" class="pot1">
        </div>
        <div class="col-md-12 event_lin">
           <div class="col-md-4">
             <div class="userfield invite text-center">
            
              <h3>వివాహ సమయము <span></span></h3>
              <p> 21/05/2022
		రాత్రి 	గం 09:30 </p>
              <h4 class="fs15 fw600 lh26">Mymarriage Convention Hall,<br>
పశ్చిమ గోదావరి జిల్లా ,ఆంధ్ర ప్రదేశ్ .</h4>

<p class="fs15">
<a href="javascript:void(0)"> </a></p>

            </div>
          </div>
           <div class="col-md-4">         
                         <img src="img/1.png" class="invi_img">
          </div>
           <div class="col-md-4">
             <div class="userfield invite text-center">
            
              <h3>రిసెప్షన్ <span></span></h3>
              <p> 23/05/2022
			  ఉ  10:00 గం  నుండి  </p>
              <h4 class="fs15 fw600 lh26">Mymarriage convention Hall ,<br>
పశ్చిమ గోదావరి జిల్లా ,ఆంధ్ర ప్రదేశ్ .</h4>


<p class="fs15">
 <a href="javascript:void(0)"> </a></p>

            </div>
          </div>
           <div class="col-md-4">
             <div class="userfield invite text-center">
            
              <h3>విందు <span></span></h3>
              <p> 23/05/2022
			   ఉ  11:30  నుండి </p>
              <h4 class="fs15 fw600 lh26">Mymarriage convention Hall ,<br>
పశ్చిమ గోదావరి జిల్లా ,ఆంధ్ర ప్రదేశ్ </h4>

<p class="fs15">
 <a href="javascript:void(0)">  </a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
          <h1>PRE-WEDDING PHOTOSHOOT</h1>          
          <img src="img/pot1.png">
        </div>
        <div class="col-md-12" style="margin-top: 35px;">
          <div class="wedd_gal"> 
  <div class="column">
    <img src="img/2.jpg" style="width:100%">
    <img src="img/6.jpg" style="width:100%">
    <img src="img/8.jpg" style="width:100%">
    <img src="img/15.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/3.jpg" style="width:100%">
    <img src="img/4.jpg" style="width:100%">
    <img src="img/7.jpg" style="width:100%">
    <img src="img/14.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="img/9.jpg" style="width:100%">
    <img src="img/10.jpg" style="width:100%">
    <img src="img/12.jpg" style="width:100%">
     <img src="img/16.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="img/5.jpg" style="width:100%">
    <img src="img/11.jpg" style="width:100%">
    <img src="img/13.jpg" style="width:100%">
     <img src="img/1.jpg" style="width:100%">
</div>
        </div>
      </div>
    </div>
  </section>
  <section class="valvidi">
    <img src="img/bg3.jpg">
  </section>
  <section class="family">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>ఫ్యామిలీ </h1>          
          <img src="img/pot1.png" class="pot1">
        </div>

        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="move_sign">
  <img src="img/carous.png" style="    width: 87%;">
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="fa fa-angle-right"></span>
    <span class="sr-only">Next</span>
  </a>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="fa fa-angle-left"></span>
    <span class="sr-only">Previous</span>
  </a>
</div>
  <div class="carousel-inner">
    <div class="item active">
     <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c1.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>


      <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c2.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
       <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c3.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
        <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c4.png">
              <h2> </h2>
              <p>  </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
    </div>

    <div class="item">
 <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c1.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>


      <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c2.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
       <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c3.png">
              <h2>  </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
        <div class="col-md-3"> 
      <div class="invite text-center">
            <img src="img/c4.png">
              <h2> </h2>
              <p> </p>
             <ul>
              <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
             </ul>

            </div></div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="col-md-7"></div>
         <div class="col-md-5">
           <ul>
            <li>
              <div class="contact-detail">
                <div class="det_img">
                <img src="img/map.svg">
              </div>
                <div class="detail">
                  <h4>వివాహ వేదిక </h4>
                  <p>Mymarriage Convention Hall,పశ్చిమ గోదావరి జిల్లా ,ఆంధ్ర ప్రదేశ్ </p>
                </div>
              </div>
            </li>
            <li>
              <div class="contact-detail">
                        <div class="det_img">
                <img src="img/mail.svg">
              </div>
                <div class="detail">
                  <h4>ఈ మెయిల్ </h4>
                  <p>mymarriageinvitation.com@gmail.com
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="contact-detail">
                        <div class="det_img">
                <img src="img/phone.svg">
              </div>
                <div class="detail">
                  <h4>ఫోన్</h4>
                  <p>+91 630 950 2137 </p>
                </div>
              </div>
            </li>
           </ul>
         </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <i class="fa fa-angle-up" aria-hidden="true"></i>
          <p>Copyright 2020-21 All Right Reserved - Design by mymarriageinvitation.com</p>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

  <script>
    $(document).ready(function() {
$(window).scroll(function() {
if ($(this).scrollTop() > 20) {
$("#toTopBtn").fadeIn();
} else {
$("#toTopBtn").fadeOut();
}
});

$("#toTopBtn").click(function() {
$("html, body").animate({
scrollTop: 0
}, 1000);
return false;
});
});
</script>
</body>
</html>


')){
	echo "done";
}

}
else
{
	$msg = "<div class='alert alert-danger'><strong>Oh...! Sorry..</strong> You need to purches demo to create Pages. </div>";

}

?>

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close">
                        <span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.svg" alt="brand" />
            <img class="d-none" src="dist/img/logo-1.svg" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
                        <?php
                             if(isset($_GET['msg']))
                            {
                        ?>
                        <div class="alert alert-danger">
                          <?php echo $_GET['msg'];?>
                        </div>
                              <?php
                            }

                            ?>
						<h2 class="hk-pg-title font-weight-600 mb-10">Dashboard</h2>

						<?php echo $msg; ?>
					</div>
                </div>
                <!-- /Title -->
<p style='color:#c924c9;'>Payment Done Successfully.</p>

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-7">
								
								<div class="hk-row">							
									<div class="col-md-6 col-sm-6">
                                     <a href="user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<b><span class="d-block font-15 text-dark font-weight-500">Add Invitation</span></b>
													</div>
													<div>
														<span class="badge badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/1.png"></span>
													<small class="d-block">Add your invitation details here</small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
									<div class="col-md-6 col-sm-6">
                                    <a href="demo.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Select the Demo and Pay</span>
													</div>
													<div>
														<span class="badge badge-danger badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/2.png"></span>
													<small class="d-block"><b>Select the demo and pay</b></small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
									<div class="col-md-6 col-sm-6">
                                    <a href="track.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Track Order</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/4.png"></span>
													<small class="d-block">Track your order status</small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
                                    <div class="col-md-6 col-sm-6">
                                    <a href="edit_invitation.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">View/Update invitation details</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/5.png"></span>
                                                    <small class="d-block">View/Update invitation details here</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-3 col-sm-3">
									</div>
									<div class="col-md-6 col-sm-6">
                                    <a href="send_invitation.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Send_invitation</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/7.png"></span>
                                                    <small class="d-block">Send invitation to your friends and relatives</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-3 col-sm-3">
									</div>
								</div>	
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
           
<?php
require("user_footer.php");
?>