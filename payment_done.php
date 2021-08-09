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


    $InfoSQL = mysqli_query($con, "SELECT * FROM tamplate_info WHERE user_id = '$user_id' ");
    $form_rows = mysqli_fetch_assoc($InfoSQL);


$Rtime = $form_rows['rec_time'].intval($form_rows['rec_time']) < 12 ? 'AM' : 'PM';	
$Ltime = $form_rows['lunc_time'].intval($form_rows['lunc_time']) < 12 ? 'AM' : 'PM';	
$time = $form_rows['m_time'].intval($form_rows['m_time']) < 12 ? 'AM' : 'PM';


if($form_rows['reception'] == "Yes" ){ 
   $rec = '<div class="col-md-4">
   <div class="userfield invite text-center">

       <h3>Reception <span></span></h3>
       <p>'.$form_rows['rec_date'].' '.$form_rows['rec_time']. $Rtime.' Onwards</p>
       <h4 class="fs15 fw600 lh26">'.$form_rows['rec_ven'].'</h4>


       <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

   </div>
</div>
<div class="col-md-4">
   <div class="userfield invite text-center">

       <h3>Vindhu <span></span></h3>
       <p>'.$form_rows['lunc_date'].' '.$form_rows['lunc_time']. $Ltime.' Onwards</p>
       <h4 class="fs15 fw600 lh26">'.$form_rows['lunc_vnu'].'</h4>


       <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

   </div>
</div>';
   }else{ 
	   $Vindhu = '
      
        <div class="col-md-4">
            <div class="userfield invite text-center">

                <h3>Vindhu <span></span></h3>
                <p>'.$form_rows['lunc_date'].' '.$form_rows['lunc_vnu']. $Ltime.' Onwards</p>
                <h4 class="fs15 fw600 lh26">'.$form_rows['lunc_vnu'].'</h4>


                <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

            </div>
        </div>';
   }
    


//////////////////// bride fathers name ///////////////////////

if(isset($form_rows['family_g_father_name'])){
    if(isset($form_rows['family_g_father_img'])){
        $gfatherimg = ' <img src="info-img/'.$form_rows['family_g_father_img'].'">';
    }
    $GrideFatherInfo = '
    <div class="col-md-3">
    <div class="invite text-center">
       '. $gfatherimg.'
        <h2>'.$form_rows['family_g_father_name'].' </h2>
        <p> '.$form_rows['family_g_father_name'].'</p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>';
}
//////////////////// Gride Mother name ///////////////////////
if(isset($form_rows['family_g_mother_name'])){
    if(isset($form_rows['family_g_mother_img'])){
        $GrideMotherImg = '.<img src="info-img/'.$form_rows['family_g_mother_img'].'">.';
    }
    $GrideMotherInfo = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$GrideMotherImg.'
        <h2> '.$form_rows['family_g_mother_name'].' </h2>
        <p>'.$form_rows['family_g_mother_name'].'  </p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}

//////////////////// bride fathers name ///////////////////////
if(isset($form_rows['family_b_father_name'])){
    if(isset($form_rows['family_b_father_img'])){
        $BrideFatherImg = '.<img src="info-img/'.$form_rows['family_b_father_img'].'">.';
    }
    $BrideFatherInfo = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$BrideFatherImg.'
        <h2> '.$form_rows['family_b_father_name'].' </h2>
        <p> '.$form_rows['family_b_father_name'].' </p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}
//////////////////// bride fathers name ///////////////////////
if(isset($form_rows['family_b_mother_name'])){
    if(isset($form_rows['family_b_mother_name'])){
        $BrideMotherImg = '.<img src="info-img/'.$form_rows['family_b_mother_name'].'">.';
    }
    $BrideMotherInfo = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$BrideMotherImg.'
        <h2> '.$form_rows['family_b_mother_name'].' </h2>
        <p>'.$form_rows['family_b_mother_name'].' </p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}

//////////////////// bride fathers name ///////////////////////
if(isset($form_rows['family_b_mother_name'])){
    if(isset($form_rows['family_b_mother_name'])){
        $BrideMotherImg = '.<img src="info-img/'.$form_rows['family_b_mother_name'].'">.';
    }
    $BrideMotherInfo = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$BrideMotherImg.'
        <h2> '.$form_rows['family_b_mother_name'].' </h2>
        <p> '.$form_rows['family_b_mother_name'].'</p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}
//////////////////// Famiy 1 fathers name ///////////////////////
if(isset($form_rows['family1_name'])){
    if(isset($form_rows['family1_img'])){
        $Family1Img = '.<img src="info-img/'.$form_rows['family1_img'].'">.';
    }
    $Family1Info = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$Family1Img.'
        <h2> '.$form_rows['family1_name'].' </h2>
        <p> '.$form_rows['family1_name'].'</p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}

//////////////////// Famiy 2 fathers name ///////////////////////
if(isset($form_rows['family2_name'])){
    if(isset($form_rows['family2_img'])){
        $Family2Img = '.<img src="info-img/'.$form_rows['family2_img'].'">.';
    }
    $Family2Info = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$Family2Img.'
        <h2> '.$form_rows['family2_name'].' </h2>
        <p> '.$form_rows['family2_name'].'</p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}

//////////////////// Famiy 3 fathers name ///////////////////////
if(isset($form_rows['family3_name'])){
    if(isset($form_rows['family3_img'])){
        $Family3Img = '.<img src="info-img/'.$form_rows['family3_img'].'">.';
    }
    $Family3Info = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$Family3Img.'
        <h2> '.$form_rows['family3_name'].' </h2>
        <p> '.$form_rows['family3_name'].'</p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}

//////////////////// Famiy 4 fathers name ///////////////////////
if(isset($form_rows['family4_name'])){
    if(isset($form_rows['family4_img'])){
        $Family4Img = '.<img src="info-img/'.$form_rows['family4_img'].'">.';
    }
    $Family4Info = '
    <div class="col-md-3">
    <div class="invite text-center">
        '.$Family4Img.'
        <h2> '.$form_rows['family4_name'].' </h2>
        <p>'.$form_rows['family4_name'].' </p>
        <ul>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>

    </div>
</div>
    ';
}


   if(!empty($form_rows['wed_img1'])){
		$w1 = '<img src="info-img/'.$form_rows['wed_img1'].'" style="width:100%">';
   }
   if(!empty($form_rows['wed_img2'])){
	$w2 = '<img src="info-img/'.$form_rows['wed_img2'].'" style="width:100%">';
}

if(!empty($form_rows['wed_img3'])){
	$w3 = '<img src="info-img/'.$form_rows['wed_img3'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img4'])){
	$w4 = '<img src="info-img/'.$form_rows['wed_img4'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img5'])){
	$w5 = '<img src="info-img/'.$form_rows['wed_img5'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img6'])){
	$w6 = '<img src="info-img/'.$form_rows['wed_img6'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img7'])){
	$w7 = '<img src="info-img/'.$form_rows['wed_img7'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img8'])){
	$w8 = '<img src="info-img/'.$form_rows['wed_img8'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img9'])){
	$w9 = '<img src="info-img/'.$form_rows['wed_img9'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img10'])){
	$w10 = '<img src="info-img/'.$form_rows['wed_img10'].'" style="width:100%">';
}

if(!empty($form_rows['wed_img11'])){
	$w11 = '<img src="info-img/'.$form_rows['wed_img11'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img12'])){
	$w12 = '<img src="info-img/'.$form_rows['wed_img12'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img13'])){
	$w13 = '<img src="info-img/'.$form_rows['wed_img13'].'" style="width:100%">';
}

if(!empty($form_rows['wed_img14'])){
	$w14 = '<img src="info-img/'.$form_rows['wed_img14'].'" style="width:100%">';
}
if(!empty($form_rows['wed_img15'])){
	$w15 = '<img src="info-img/'.$form_rows['wed_img15'].'" style="width:100%">';
}
}
if(!empty($form_rows['wed_img16'])){
	$w16 = '<img src="info-img/'.$form_rows['wed_img16'].'" style="width:100%">';
}


    $gFirstName = $form_rows['g_name'];
    $gFirstName = explode(' ' , $gFirstName);
    $gFirstName = $user_id.$gFirstName[0];

     $bFirstName = $form_rows['b_name'];
    $bFirstName = explode(' ' , $bFirstName);
    $bFirstName = $bFirstName[0];
 
	//create file
	$file = fopen("wedding/$gFirstName-weding-$bFirstName.html", "a");




if(fwrite($file,  '
<!DOCTYPE html>

<html lang="en">

<head>
    <title>'.$form_rows['g_name'].' '.$form_rows['b_name'].'</title>
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
                    <img src="info-img/'.$form_rows['slider_img1'].'" style="width:100%; border-radius:0px">
                </div>

                <div class="item">
                    <img src="info-img/'.$form_rows['slider_img2'].'" style="width:100%; border-radius:0px">
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
                            <p>'.$form_rows['m_date'].'</p>
                        </div>

                        <h1>'.$form_rows['g_name'].' <span>&</span> '.$form_rows['b_name'].'</h1>

                        <p class="getting">ARE GETTING MARRIED!</p>

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
                            <img src="info-img/'.$form_rows['g_img'].'">
                            <h3>'.$form_rows['g_name'].'</h3>
                            <p>( '.$form_rows['family_g_father_name'].' & '.$form_rows['family_g_mother_name'].' )</p>
                            <p class="major">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>

                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="userfield invite text-center">

                            <h3>INVITATION</h3>
                            <p>We inviting you and your family on</p>
                            <h4>'.$form_rows['m_day'].'</h4>
                            <p class="jan_n">'.$form_rows['m_date'].'</p>
                            <p>'.$form_rows['m_vnu'].'</p>

                        </div>


                        <img src="img/user.png" class="varia_img">
                    </div>
                    <div class="col-md-4">
                        <div class="userfield text-center">
                            <img src="info-img/'.$form_rows['b_img'].'">
                            <h3>'.$form_rows['b_name'].'</h3>
                            <p>( '.$form_rows['family_b_father_name'].' & '.$form_rows['family_b_mother_name'].' )</p>
                            <p class="major">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>

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
                        <p>We Are Waiting For...</p>
                        <h3>The <span>Adventure</span></h3>
                    </div>
                    <!-- Styles -->
                    <div class="col-md-8">
                        <!-- Display the countdown timer in an element -->
                        <p id="demo"></p>

                        <script>
                            // Set the date we"re counting down to
                            var countDownDate = new Date("may 21, 2022 9:00:00").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                                // Get today"s date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="demo"
                                document.getElementById("demo").innerHTML = days + "d  " + hours + "h " +
                                    minutes + "m " + seconds + "s ";

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
                    <h1>THE WEDDING EVENT</h1>
                    <img src="img/pot1.png" class="pot1">
                </div>
                <div class="col-md-12 event_lin">
                    <div class="col-md-4">
                        <div class="userfield invite text-center">

                            <h3>Marriage<span></span></h3>
                            <p> '.$form_rows['m_date'].' '.$form_rows['m_time'].' '.$time.'</p>
                            <h4 class="fs15 fw600 lh26">'.$form_rows['m_vnu'].'</h4>

                            <p class="fs15">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some <a href="javascript:void(0)"> Red More...</a></p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/1.png" class="invi_img">
                    </div>


                   
                  '. $rec .'
              
                  '. $Vindhu .'


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
						'.$w1.'
						'.$w2.'
						'.$w3.'
						'.$w4.'
						</div>
						<div class="column">
						'.$w5.'
						'.$w6.'
						'.$w7.'
						'.$w8.'
						</div>
						<div class="column">
						'.$w9.'
						'.$w10.'
						'.$w11.'
						'.$w12.'
							</div>
						<div class="column">
						'.$w13.'
						'.$w14.'
						'.$w15.'
						'.$w16.'
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
                    <h1>LOVABLE FAMILY</h1>
                    <img src="img/pot1.png" class="pot1">
                    
                </div>

                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="move_sign">
                        <img class="img-footer" src="info-img/'.$form_rows['g_img'].'" ">
                        <img class="img-footer" src="info-img/'.$form_rows['b_img'].'">
                        <div class="border"></div>
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
                               '.$GrideFatherInfo.'
                               '.$GrideMotherInfo.'

                              '.$BrideFatherInfo.'
                              '.$BrideMotherInfo.'
                            
                                </div>
                            

                            <div class="item">
                            '.$Family1Info.'
                            '.$Family2Info.'

                           '.$Family3Info.'
                           '.$Family4Info.'
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
                                        <h4>Location</h4>
										<p>'.$form_rows['m_vnu'].' </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-detail">
                                    <div class="det_img">
                                        <img src="img/mail.svg">
                                    </div>
                                    <div class="detail">
                                        <h4>Email</h4>
                                        <p>'.$form_rows['email'].'
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
                                        <h4>Phone</h4>
                                        <p>'.$form_rows['phone'].' </p>
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


' )){


	$loading = '<div class="alert alert-success col-md-6">
    <img src="http://elevengates.in/wp-content/uploads/2020/06/YCZH.gif" alt=""> <br> <strong class="text-center">Your Website is create. Wait few moments.</strong><spna></spna>
    </div>';
    echo '<meta http-equiv="refresh" content="3; url=user_home.php?site_is_ready=success" />';

	mysqli_query($con, "UPDATE tamplate_info SET `status` = 'Active'" );
	
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

						<?php if(isset($msg)) echo $msg;  ?>
					</div>
                </div>
                <!-- /Title -->
<?php if(isset($loading)) echo $loading;?>
             
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