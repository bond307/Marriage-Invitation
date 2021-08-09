<?php 
require("session.php");
require("config.php");
if(isset($_GET['templat_key'] )){
	$tmp_id = $_GET['templat_key'];
}else{
 $tmp_msg = "<div class='alert alert-danger'><strong>Don not select any demo.</strong> Please select demo first....!</div>";
}
    if(isset($_POST["submit_info"]) ){
        $img_dir = "wedding/info-img/";
		$rand = rand(0000, 9999);
		$tmp_id = $_GET['templat_key'];
		echo $rec = $_POST['rec'];
       $g_name = mysqli_real_escape_string($con, $_POST["g_name"]);
	   $b_name = mysqli_real_escape_string($con, $_POST["b_name"]);
	   $m_data = mysqli_real_escape_string($con, $_POST["m_data"]);
	   $m_time = mysqli_real_escape_string($con, $_POST["m_time"]);
	   $m_day = mysqli_real_escape_string($con, $_POST["m_day"]);
	   $m_veu = mysqli_real_escape_string($con, $_POST["m_veu"]);
     
	   $r_date = mysqli_real_escape_string($con, $_POST["r_date"]);
	   $r_time = mysqli_real_escape_string($con, $_POST["r_time"]);
	   $r_veu = mysqli_real_escape_string($con, $_POST["r_veu"]);
	   $l_date = mysqli_real_escape_string($con, $_POST["l_date"]);
	   $l_time = mysqli_real_escape_string($con, $_POST["l_time"]);
	   $l_veu = mysqli_real_escape_string($con, $_POST["l_veu"]);
	   $grom_father_name = mysqli_real_escape_string($con, $_POST["grom_father_name"]);
	   $grom_mother_name = mysqli_real_escape_string($con, $_POST["grom_mother_name"]);
	   $bride_father_name = mysqli_real_escape_string($con, $_POST["bride_father_name"]);
	   $bride_mother_name = mysqli_real_escape_string($con, $_POST["bride_mother_name"]);
	   $email = mysqli_real_escape_string($con, $_POST["email"]);
	   $number = mysqli_real_escape_string($con, $_POST["number"]);

	   $fname1 = mysqli_real_escape_string($con, $_POST["family1_name"]);
	   $fname2 = mysqli_real_escape_string($con, $_POST["family2_name"]);
	   $fname3 = mysqli_real_escape_string($con, $_POST["family3_name"]);
	   $fname4 = mysqli_real_escape_string($con, $_POST["family4_name"]);
	   

       //groom's img
	    $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
   
      //end grooms img upload
       

         //bride's img
          $b_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['b_img']['name'];
         $b_img_target = $_FILES['b_img']['tmp_name'];
        
         //end bride img upload
          


     //groom father img
	 if(!empty($_FILES['grom_father_img']['name'])){
	  $grom_father_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['grom_father_img']['name'];
      $grom_father_img_dir = $_FILES['grom_father_img']['tmp_name'];
	  move_uploaded_file($grom_father_img_dir, $img_dir.$grom_father_img_name); 
	 }else{
		 $grom_father_img_name = "";
	 }
//end groom mother img upload
if(!empty($_FILES['bride_mother_img']['name'])){
 $grom_mother_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['bride_mother_img']['name'];
      $grom_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
	  move_uploaded_file($grom_mother_img_dir, $img_dir.$grom_mother_img_name); 
}else{
	$grom_mother_img_name = "";
}
      //end grooms img upload
       

         //brideo father img
		 if(!empty($_FILES['bride_father_img']['name'])){
		   $bride_father_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['bride_father_img']['name'];
         $bride_father_img_dri = $_FILES['bride_father_img']['tmp_name'];
		 move_uploaded_file($bride_father_img_dri, $img_dir.$bride_father_img_name); 
		 }else{
			 $bride_father_img_name = "";
		 }
        
   //end groom mother img upload
   if(!empty($_FILES['bride_mother_img']['name'])){
         $bride_mother_img_name = $_SESSION['isloginid'].'-'.$_FILES['bride_mother_img']['name'];
         $bride_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
		 move_uploaded_file($bride_mother_img_dir, $img_dir.$bride_mother_img_name); 
   }else{
	$bride_mother_img_name = "";
   }
         //end grooms img upload
          

         //groom's img
          $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
         $g_img_target = $_FILES['g_img']['tmp_name'];
        
         //end grooms img upload
          

            //groom's img
			 $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
      
      //end grooms img upload
       

     //slider imgs
	 if(!empty($_FILES['slider_img1']['name'])){
	 $slider_img1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['slider_img1']['name'];
	 $slider_img1_target = $_FILES['slider_img1']['tmp_name'];
	 }else{
		$slider_img1 = " ";
	 }
	 //2
	 if(!empty($_FILES['slider_img2']['name'])){
	 $slider_img2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['slider_img2']['name'];
	 $slider_img2_target = $_FILES['slider_img2']['tmp_name'];
	 }else{
		 $slider_img2 = "";
	 }
	 //Family photo 
	 if(!empty($_FILES['family1_img']['name'])){
		$fImg1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family1_img']['name'];
		move_uploaded_file( $_FILES['family1_img']['tmp_name'], $img_dir.$fImg1);
		$fImgName1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family1_img']['name'];

	 }else{
		$fImgName1 = " ";
	 }

	  //Family photo 
	  if(!empty($_FILES['family2_img']['name'])){
		$fImg2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family2_img']['name'];
		move_uploaded_file( $_FILES['family2_img']['tmp_name'], $img_dir.$fImg2);
		$fImgName2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family2_img']['name'];

	 }else{
		$fImgName2 = "";
	 }

	  //Family photo 
	  if(!empty($_FILES['family3_img']['name'])){
		$fImg3 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family3_img']['name'];
		move_uploaded_file( $_FILES['family3_img']['tmp_name'], $img_dir.$fImg3);
		$fImgName3 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family3_img']['name'];

	 }else{
		$fImgName3 = "";
	 }

	 //Family photo 
	 if(!empty($_FILES['family4_img']['name'])){
		$fImg4 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family4_img']['name'];
		move_uploaded_file( $_FILES['family4_img']['tmp_name'], $img_dir.$fImg4);
		$fImgName4 = $_SESSION['isloginid'].'-'.$rand.$_FILES['family4_img']['name'];

	 }else{
		$fImgName4 = "";
	 }

	 //Family photo 
	 if(!empty($_FILES['weed_img1']['name'])){
		$weed1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img1']['name'];
		move_uploaded_file( $_FILES['weed_img1']['tmp_name'], $img_dir.$weed1);
		$w1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img1']['name'];

	 }else{
		$w1 = " ";
	 }

	
	 if(!empty($_FILES['weed_img2']['name'])){
		$weed2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img2']['name'];
	 move_uploaded_file( $_FILES['weed_img2']['tmp_name'], $img_dir.$weed2);
	 $w2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img2']['name'];
	 }else{
		$w2 = "";
	 }

	 if(!empty($_FILES['weed_img3']['name'])){
		$weed3 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img3']['name'];
	 move_uploaded_file( $_FILES['weed_img3']['tmp_name'], $img_dir.$weed3);
	 $w3 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img3']['name'];
	 }else{
		$w3 = "";
	 }

	 if(!empty($_FILES['weed_img4']['name'])){
		$weed4 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img4']['name'];
	 move_uploaded_file( $_FILES['weed_img4']['tmp_name'], $img_dir.$weed4);
	 $w4 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img4']['name'];
	 }else{
		$w4 = "";
	 }

	 if(!empty($_FILES['weed_img5']['name'])){
		$weed5 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img5']['name'];
	 move_uploaded_file( $_FILES['weed_img5']['tmp_name'], $img_dir.$weed5);
	 $w5 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img5']['name'];
	 }else{
		$w5 = "";
	 }

	 if(!empty($_FILES['weed_img6']['name'])){
		$weed6 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img6']['name'];
	 move_uploaded_file( $_FILES['weed_img6']['tmp_name'], $img_dir.$weed6);
	 $w6 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img6']['name'];
	 }else{
		$w6 = "";
	 }

	 if(!empty($_FILES['weed_img7']['name'])){
		$weed7 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img7']['name'];
	 move_uploaded_file( $_FILES['weed_img7']['tmp_name'], $img_dir.$weed7);
	 $w7 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img7']['name'];
	 }else{
		$w7 = "";
	 }

	 if(!empty($_FILES['weed_img8']['name'])){
		$weed8 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img8']['name'];
	 move_uploaded_file( $_FILES['weed_img8']['tmp_name'], $img_dir.$weed8);
	 $w8 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img8']['name'];
	 }else{
		$w8 = "";
	 }

	 if(!empty($_FILES['weed_img9']['name'])){
		$weed9 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img9']['name'];
	 move_uploaded_file( $_FILES['weed_img9']['tmp_name'], $img_dir.$weed9);
	 $w9 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img9']['name'];
	 }else{
		$w9 = "";
	 }

	 if(!empty($_FILES['weed_img10']['name'])){
		$weed10 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img10']['name'];
	 move_uploaded_file( $_FILES['weed_img10']['tmp_name'], $img_dir.$weed10);
	 $w10 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img10']['name'];
	 }else{
		$w10 = "";
	 }

	 if(!empty($_FILES['weed_img11']['name'])){
		$weed11 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img11']['name'];
	 move_uploaded_file( $_FILES['weed_img11']['tmp_name'], $img_dir.$weed11);
	 $w11 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img11']['name'];
	 }else{
		$w11 = "";
	 }

	 if(!empty($_FILES['weed_img12']['name'])){
		$weed12 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img12']['name'];
	 move_uploaded_file( $_FILES['weed_img12']['tmp_name'], $img_dir.$weed12);
	 $w12 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img12']['name'];
	 }else{
		$w12 = "";
	 }

	 if(!empty($_FILES['weed_img13']['name'])){
		$weed13 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img13']['name'];
	 move_uploaded_file( $_FILES['weed_img13']['tmp_name'], $img_dir.$weed13);
	 $w13 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img13']['name'];
	 }else{
		$w13 = "";
	 }

	 if(!empty($_FILES['weed_img14']['name'])){
		$weed14 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img14']['name'];
	 move_uploaded_file( $_FILES['weed_img14']['tmp_name'], $img_dir.$weed14);
	 $w14 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img14']['name'];
	 }else{
		$w14 = "";
	 }

	 if(!empty($_FILES['weed_img15']['name'])){
		$weed15 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img15']['name'];
	 move_uploaded_file( $_FILES['weed_img15']['tmp_name'], $img_dir.$weed15);
	 $w15 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img15']['name'];
	 }else{
		$w15 = "";
	 }

	 
	 if(!empty($_FILES['weed_img16']['name'])){
		$weed16 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img16']['name'];
		move_uploaded_file( $_FILES['weed_img16']['tmp_name'], $img_dir.$weed16);
		$w16 = $_SESSION['isloginid'].'-'.$rand.$_FILES['weed_img16']['name'];
		}else{
			$w16 = "";
		 }
   


	
  $user_id = $_SESSION['isloginid'];

     if(!empty($g_name) && !empty($g_img_name) && !empty($b_name) && !empty($b_img_name) && !empty($slider_img1) && !empty($slider_img2) && !empty($m_data) && !empty($m_time) && !empty($m_day) && !empty($m_veu) && !empty($rec) && !empty($l_date) && !empty($grom_father_img_name) && !empty($grom_mother_name) && !empty($grom_father_name) && !empty($email) && !empty($number) && !empty($user_id) && !empty($tmp_id)  ){


	    $sql = "INSERT INTO `tamplate_info`(  `g_name`, `g_img`, `b_name`, `b_img`, `slider_img1`, `slider_img2`, `m_date`, `m_time`, `m_day`, `m_vnu`, `reception`, `rec_date`, `rec_time`, `rec_ven`, `lunc_date`, `lunc_time`, `lunc_ven`, `wed_img1`, `wed_img2`, `wed_img3`, `wed_img4`, `wed_img5`, `wed_img6`, `wed_img7`, `wed_img8`, `wed_img9`, `wed_img10`, `wed_img11`, `wed_img12`, `wed_img13`, `wed_img14`, `wed_img15`, `wed_img16`, `family_g_father_name`, `family_g_father_img`, `family_g_mother_name`, `family_g_mother_img`, `family_b_father_name`, `family_b_father_img`, `family_b_mother_name`, `family_b_mother_img`, `family1_name`, `family1_img`, `family2_name`, `family2_img`, `family3_name`, `family3_img`, `family4_name`, `family4_img`, `email`, `phone`, `user_id`, `tem_id`, `status`) VALUES ( '$g_name', '$g_img_name', '$b_name', '$b_img_name', '$slider_img1', '$slider_img2', '$m_data', '$m_time', '$m_day', '$m_veu', '$rec', '$r_date', '$r_time', '$r_veu', '$l_date', '$l_time', '$l_veu', '$w1', '$w2', '$w3', '$w4', '$w5', '$w6', '$w7', '$w8', '$w9', '$w10', '$w11', '$w12', '$w13', '$w14', '$w15', '$w16', '$grom_father_name', '$grom_father_img_name', '$grom_mother_name', '$grom_mother_img_name', '$bride_father_name', '$bride_father_img_name', '$bride_mother_name', '$bride_mother_img_name','$fname1', '$fImg1', '$fname2', '$fImg2', '$fname3', '$fImg3', '$fname4', '$fImg4', '$email', '$number', '$user_id', '$tmp_id', 'Pending' )";

	   //insert
	   $result = mysqli_query($con, $sql);

	   if($result == true){
			move_uploaded_file($g_img_target, $img_dir.$g_img_name); 
			move_uploaded_file($b_img_target, $img_dir.$b_img_name);
			move_uploaded_file($b_img_target, $img_dir.$b_img_name);
			move_uploaded_file($g_img_target, $img_dir.$g_img_name);
			move_uploaded_file($g_img_target, $img_dir.$g_img_name);
			move_uploaded_file($slider_img1_target, $img_dir.$slider_img1);
			move_uploaded_file($slider_img2_target, $img_dir.$slider_img2);
			 header("Location: demo.php?create-page=success ");
	   }else{
		   echo "worng";
	   }

	}else{
		$msg = "<div class='alert alert-danger'><strong>Error....</strong> Please Fill the all filde....!</div>";

	}
	  
    }//
?>


<?php

require("user_header.php");

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
		<style type="text/css">
			label {
				font-weight: 600;
				font-size: 16px;
			}
			.mb-1{
				
				color: var(--pink);
			}
			small{
				color: var(--red);
			}
			input{
				width:100%;
				margin:4px 0px;
			}
			.hk-footer-wrap{
				position: relative;
			}
		</style>
               
        <div class="col-md-6 offset-md-3 mt-3">
			<?php if(isset($tmp_msg))echo $tmp_msg;
			if(isset($msg))echo $msg;?>
			
            <div class="card card-body">
                <form action="" method="post" enctype= multipart/form-data> 
                <div class="form-group">
				<label for="">Groom's Name: </label>
				<input type="text" name="g_name" class="form-control" value="<?php if(isset($g_name)) echo $g_name;?>">
			</div>


			<div class="form-group">
				<label for="">Groom's Photo: </label>
				<input type="file" name="g_img" >
			</div>


			<div class="form-group">
				<label for="">Bride's Name: </label>
				<input type="text" name="b_name" class="form-control" value="<?php if(isset($b_name)) echo $b_name;?>">
			</div>


			<div class="form-group">
				<label for="">Bride's Photo: </label>
				<input type="file" name="b_img" >
			</div>


			<div class="form-group">
				<label for="">Upload Slider Images: </label>
				<div class="row">
					<div class="col-md-6">
						<input type="file" name="slider_img1">
					</div>
					<div class="col-md-6">
						<input type="file" name="slider_img2">
					</div>
				</div>
				
				<small>(Tow Images Only)</small>
			</div>

			<div class="form-group">
				<label for="">Marriage Date: </label>
				<input type="date"  data-date-format="DD MMMM YYYY" name="m_data" class="form-control" value="<?php if(isset($m_data)) echo $m_data;?>">
			</div>
			<div class="form-group">
				<label for="">Marriage Time: </label>
				<input type="time" name="m_time" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Marriage Day: </label>
				<select class="form-control" name="m_day">
				<?php if(isset($m_day)) 
				echo '<option value="'.$m_day.'" selected>'.$m_day.'</option>';
				
				?>
					<option value="Saturday">Saturday</option>
					<option value="Sunday">Sunday</option>
					<option value="Monday">Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>

				</select>
			</div>
			<div class="form-group">
				<label for="">Marriage venue: </label>
				<input type="text" name="m_veu" class="form-control" value="<?php if(isset($m_veu)) echo $m_veu;?>">
			</div>

			<div class="form-group">
				<label for="">Reception:</label>
				  
					<label onclick="yes()" for="yes">Yes 
						<input type="radio"  id="yes" name="rec" value="Yes">
					</label>
					  
					 
					<label onclick="no()" for="no">No
						<input type="radio" id="no" name="rec" value="No">
					</label>


					<!----- if click Yes ------> 
				  <div id="reception-input">
					<div class="form-group">
						<label for="">Reception Date: </label>
						<input type="date"  data-date-format="DD MMMM YYYY" name="r_date" class="form-control" value="<?php if(isset($r_date)) echo $r_date;?>">
					</div>
					<div class="form-group">
						<label for="">Reception Time: </label>
						<input type="time" name="r_time" class="form-control" value="<?php if(isset($r_time)) echo $r_time;?>">
					</div>
				 
					<div class="form-group">
						<label for="">Reception venue: </label>
						<input type="text" name="r_veu" class="form-control"  value="<?php if(isset($r_veu)) echo $r_veu;?>">
					</div>
				</div>

			</div>


			<div class="form-group">
				<label for="">Lunch/Dinner Date: </label>
				<input type="date"  data-date-format="DD MMMM YYYY" name="l_date" class="form-control"  value="<?php if(isset($r_time)) echo $l_date;?>">
			</div>
			<div class="form-group">
				<label for="">Lunch/Dinner Time: </label>
				<input type="time" name="l_time" class="form-control"  value="<?php if(isset($l_time)) echo $l_time;?>">
			</div>
			
			<div class="form-group">
				<label for="">Lunch/Dinner venue: </label>
				<input type="text" name="l_veu" class="form-control"  value="<?php if(isset($r_veu)) echo $r_veu;?>">
			</div>



            <div class="form-group">
				<label for="">Upload Upto Five Wedding Photo: </label>
				<div class="row">
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img1">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img2">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img3">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img4">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img5">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img6">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img7">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img8">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img9">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img10">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img11">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img12">
					</div>
				</div>
				<b href="" class="mb-1" id="add_more_phone" onclick="add_more_phone()"> <i class="fa fa-plus"></i> Add More Photo</b>

				<div class="row" id="more-photo">
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img13">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img14">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img15">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;" type="file" name="weed_img16">
					</div>
				</div>
				<b href="" class="mb-1" id="no_add_more_phone" onclick="no_add_more_phone()"> <i class="fa fa-plus"></i> No, Don't Need</b>

				<br><br><small>(Upto Five Images)</small>
			</div>



		<div class="">
			<h3>Family's</h3>
			<div class="form-group">
				<label for="">Groom's Fother's Name: </label>
				<input type="text" name="grom_father_name" class="form-control"  value="<?php if(isset($grom_father_name)) echo $grom_father_name;?>">
			</div>
			<div class="form-group">
				<label for="">Groom's Fother's  Images: </label>
				<input type="file" name="grom_father_img">
			</div>
			<div class="form-group">
				<label for="">Groom's Mother's Name: </label>
				<input type="text" name="grom_mother_name" class="form-control" value="<?php if(isset($grom_mother_name)) echo $grom_mother_name;?>">
			</div>
			<div class="form-group">
				<label for="">Groom's Mother's  Images: </label>
				<input type="file" name="grom_mother_img">
			</div>
			<div class="form-group">
				<label for="">Bride Fother's Name: </label>
				<input type="text" name="bride_father_name" class="form-control" value="<?php if(isset($bride_father_name)) echo $bride_father_name;?>">
			</div>
			<div class="form-group">
				<label for="">Bride  Fother's Images: </label>
				<input type="file" name="bride_father_img" >
			</div>
			<div class="form-group">
				<label for="">Bride  Mother's Nayon: </label>
				<input type="text" name="bride_mother_name" class="form-control" value="<?php if(isset($bride_mother_name)) echo $bride_mother_name;?>">
			</div>
			<div class="form-group">
				<label for="">Bride  Mother's Images: </label>
				<input type="file" name="bride_mother_img">
			</div>
			
		</div>
			<b href="" class="mb-1" id="btn-more-family" onclick="btn_more_family()"> <i class="fa fa-plus"></i> More Family</b>
		
		<div id="more-family">
		<div class="form-group">
				<label for="">Family Mamber's Name-1: </label>
				<input type="text" name="family1_name" class="form-control" value="<?php if(isset($bride_father_name)) echo $bride_father_name;?>">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's  Images-1: </label>
				<input type="file" name="family1_img" >
			</div>
			<div class="form-group">
				<label for="">Family Mamber's Name-2: </label>
				<input type="text" name="family2_name" class="form-control" value="<?php if(isset($bride_mother_name)) echo $bride_mother_name;?>">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's  Images-2: </label>
				<input type="file" name="family2_img">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's Name-3: </label>
				<input type="text" name="family3_name" class="form-control" value="<?php if(isset($bride_mother_name)) echo $bride_mother_name;?>">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's  Images-3: </label>
				<input type="file" name="family3_img">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's Name-4: </label>
				<input type="text" name="family4_name" class="form-control" value="<?php if(isset($bride_mother_name)) echo $bride_mother_name;?>">
			</div>
			<div class="form-group">
				<label for="">Family Mamber's  Images-4: </label>
				<input type="file" name="family4_img">
			</div>
			<b  class="mb-1" id="btn-less-family" onclick="btn_less_family()"> <i class="fa fa-minus"></i> Less Family</b>
		</div>

			
			<div class="form-group">
				<label for="">Email: </label>
				<input type="eamil" name="email" class="form-control" value="<?php if(isset($email)) echo $email;?>">
			</div>
			<div class="form-group">
				<label for="">Phone Number: </label>
				<input type="text" name="number" class="form-control" value="<?php if(isset($number)) echo $number;?>">
			</div>
			<button type="submit" name="submit_info" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>



		</div>





                <!-- /Row -->
            </div>
            <!-- /Container -->
           
<?php
require("user_footer.php");
?>

<script>
	document.getElementById("reception-input").style.display = "none";
	//check radio
	function yes(){
		document.getElementById("reception-input").style.display = "block";
        
	}
	function no(){
		document.getElementById("reception-input").style.display = "none";
        
	}


	document.getElementById("more-family").style.display = "none";

	function btn_more_family(){
		document.getElementById("more-family").style.display = "block";
		document.getElementById("btn-more-family").style.display = "none";
	}


function btn_less_family(){
	document.getElementById("more-family").style.display = "none";
	document.getElementById("btn-more-family").style.display = "block";
}
	

	//more photo
	document.getElementById("more-photo").style.display = "none";
	document.getElementById("no_add_more_phone").style.display = "none";
	function add_more_phone(){
		document.getElementById("more-photo").style.display = "block";
		document.getElementById("add_more_phone").style.display = "none";
		document.getElementById("no_add_more_phone").style.display = "block";
	}

	//more photo
	
	function no_add_more_phone(){
		document.getElementById("more-photo").style.display = "none";
		document.getElementById("add_more_phone").style.display = "block";
		document.getElementById("no_add_more_phone").style.display = "none";
	}
</script>