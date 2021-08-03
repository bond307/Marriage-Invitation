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

       //groom's img
	    $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
      move_uploaded_file($g_img_target, $img_dir.$g_img_name);
      //end grooms img upload
       

         //bride's img
          $b_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['b_img']['name'];
         $b_img_target = $_FILES['b_img']['tmp_name'];
         move_uploaded_file($b_img_target, $img_dir.$b_img_name);
         //end bride img upload
          


     //groom father img
	  $grom_father_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['grom_father_img']['name'];
      $grom_father_img_dir = $_FILES['grom_father_img']['tmp_name'];
      move_uploaded_file($grom_father_img_dir, $img_dir.$grom_father_img_name);
//end groom mother img upload
 $grom_mother_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['bride_mother_img']['name'];
      $grom_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
      move_uploaded_file($grom_mother_img_dir, $img_dir.$grom_mother_img_name);
      //end grooms img upload
       

         //brideo father img
		   $bride_father_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['bride_father_img']['name'];
         $bride_father_img_dri = $_FILES['bride_father_img']['tmp_name'];
         move_uploaded_file($bride_father_img_dri, $img_dir.$bride_father_img_name);
   //end groom mother img upload
    $bride_mother_img_name = $_SESSION['isloginid'].'-'.$_FILES['bride_mother_img']['name'];
         $bride_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
         move_uploaded_file($grom_mother_img_dir, $img_dir.$grom_mother_img_name);
         //end grooms img upload
          

         //groom's img
          $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
         $g_img_target = $_FILES['g_img']['tmp_name'];
         move_uploaded_file($g_img_target, $img_dir.$g_img_name);
         //end grooms img upload
          

            //groom's img
			 $g_img_name = $_SESSION['isloginid'].'-'.$rand.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
      move_uploaded_file($g_img_target, $img_dir.$g_img_name);
      //end grooms img upload
       

     //slider imgs
	 $slider_img1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['slider_img1']['name'];
	 $slider_img1_target = $_FILES['slider_img1']['tmp_name'];
	 move_uploaded_file($slider_img1_target, $img_dir.$slider_img1);
	 //2
	 $slider_img2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['slider_img2']['name'];
	 $slider_img2_target = $_FILES['slider_img2']['tmp_name'];
	 move_uploaded_file($slider_img2_target, $img_dir.$slider_img2);


	 //weeding imgs
	 $wee_img1 = $_SESSION['isloginid'].'-'.$rand.$_FILES['wee_img1']['name'];
	 $wee_img1_target = $_FILES['wee_img1']['tmp_name'];
	 move_uploaded_file($wee_img1_target, $img_dir.$wee_img1);

	 //2
	$wee_img2 = $_SESSION['isloginid'].'-'.$rand.$_FILES['wee_img2']['name'];
	 $wee_img2_target = $_FILES['wee_img2']['tmp_name'];
	 move_uploaded_file($wee_img2_target, $img_dir.$wee_img2);
	 //3
	 $wee_img3 = $_SESSION['isloginid'].'-'.$rand.$_FILES['wee_img3']['name'];
	 $wee_img3_target = $_FILES['wee_img3']['tmp_name'];
	 move_uploaded_file($wee_img3_target, $img_dir.$wee_img3);
	 //4
	 $wee_img4 = $_SESSION['isloginid'].'-'.$rand.$_FILES['wee_img4']['name'];
	 $wee_img4_target = $_FILES['wee_img4']['tmp_name'];
	 move_uploaded_file($wee_img4_target, $img_dir.$wee_img4);
	 //5
	  $wee_img5 = $_SESSION['isloginid'].'-'.$rand.$_FILES['wee_img5']['name'];
	 $wee_img5_target = $_FILES['wee_img5']['tmp_name'];
	 move_uploaded_file($wee_img5_target, $img_dir.$wee_img5);




       
  $user_id = $_SESSION['isloginid'];

     if(!empty($g_name) && !empty($g_img_name) && !empty($b_name) && !empty($b_img_name) && !empty($slider_img1) && !empty($slider_img2) && !empty($m_data) && !empty($m_time) && !empty($m_day) && !empty($m_veu) && !empty($rec) && !empty($r_date) && !empty($r_time) && !empty($l_date) && !empty($grom_father_img_name) && !empty($grom_mother_name) && !empty($wee_img4) && !empty($grom_father_name) && !empty($wee_img1) && !empty($wee_img2) && !empty($wee_img3) && !empty($wee_img4) && !empty($wee_img5) && !empty($email) && !empty($number) && !empty($user_id) && !empty($tmp_id)){


	    $sql = "INSERT INTO `tamplate_info`( `g_name`, `g_img`, `b_name`, `b_img`, `slider_img1`, `slider_img2`, `m_date`, `m_time`, `m_day`, `m_vnu`, `reception`, `rec_date`, `rec_time`, `rec_ven`, `lunc_date`, `lunc_time`, `lunc_ven`, `wee_img1`, `wee_img2`, `wee_img3`, `wee_img4`, `wee_img5`, `family_g_father_name`, `family_g_father_img`, `family_g_mother_name`, `family_g_mother_img`, `family_b_father_name`, `family_b_father_img`, `family_b_mother_name`, `family_b_mother_img`, `email`, `phone`, `user_id`, `tem_id`, `status`) VALUES ( '$g_name', '$g_img_name', '$b_name', '$b_img_name', '$slider_img1', '$slider_img2', '$m_data', '$m_time', '$m_day', '$m_veu', '$rec', '$r_date', '$r_time', '$r_veu', '$l_date', '$l_time', '$l_veu', '$wee_img1', '$wee_img2','$wee_img3','$wee_img4', '$wee_img5', '$grom_father_name', '$grom_father_img_name', '$grom_mother_name', '$grom_mother_img_name', '$bride_father_name', '$bride_father_img_name', '$bride_mother_name', '$bride_mother_img_name', '$email', '$number', '$user_id', '$tmp_id', 'Active' )";

	   //insert
	   $result = mysqli_query($con, $sql);

	   if($result == true){
			header("LOCATION:demo.php?form_fill_up=success&&user={$user_id}");   
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
		</style>
               
        <div class="col-md-6 offset-md-3 mt-3">
			<?php if(isset($tmp_msg))echo $tmp_msg;
			if(isset($msg))echo $msg;?>
			
            <div class="card card-body">
                <form action="" method="post" enctype= multipart/form-data> 
                <div class="form-group">
				<label for="">Groom's Name: </label>
				<input type="text" name="g_name" class="form-control">
			</div>


			<div class="form-group">
				<label for="">Groom's Photo: </label>
				<input type="file" name="g_img" >
			</div>


			<div class="form-group">
				<label for="">Bride's Name: </label>
				<input type="text" name="b_name" class="form-control">
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
				<input type="date" name="m_data" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Marriage Time: </label>
				<input type="time" name="m_time" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Marriage Day: </label>
				<select class="form-control" name="m_day">
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
				<input type="text" name="m_veu" class="form-control" >
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
						<input type="date" name="r_date" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Reception Time: </label>
						<input type="time" name="r_time" class="form-control">
					</div>
				 
					<div class="form-group">
						<label for="">Reception venue: </label>
						<input type="text" name="r_veu" class="form-control" >
					</div>
				</div>

			</div>


			<div class="form-group">
				<label for="">Lunch/Dinner Date: </label>
				<input type="date" name="l_date" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Lunch/Dinner Time: </label>
				<input type="time" name="l_time" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="">Lunch/Dinner venue: </label>
				<input type="text" name="l_veu" class="form-control" >
			</div>



            <div class="form-group">
				<label for="">Upload Five Wedding Images: </label>
				<div class="row">
					<div class="col-md-4">
						<input syle="margin:3px 0px;width: 100%;" type="file" name="wee_img1">
					</div>
					<div class="col-md-4">
						<input  syle="margin:3px 0px; width: 100%;" type="file" name="wee_img2">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px;width: 100%;" type="file" name="wee_img3">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px; width: 100%;" type="file" name="wee_img4">
					</div>
					<div class="col-md-4">
						<input syle="margin:3px 0px; width: 100%;" type="file" name="wee_img5">
					</div>
				</div>
				<small>(Five Images Only)</small>
			</div>



		<div class="">
			<h3>Family's</h3>
			<div class="form-group">
				<label for="">Groom's Fother's Name: </label>
				<input type="text" name="grom_father_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Groom's Fother's  Images: </label>
				<input type="file" name="grom_father_img">
			</div>
			<div class="form-group">
				<label for="">Groom's Mother's Name: </label>
				<input type="text" name="grom_mother_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Groom's Mother's  Images: </label>
				<input type="file" name="grom_mother_img">
			</div>
			<b href="" class="mb-1" id="btn-more-family" onclick="btn_more_family()"> <i class="fa fa-plus"></i> More Family</b>
		
		<div id="more-family">
		<div class="form-group">
				<label for="">Bride's Father's Name: </label>
				<input type="text" name="bride_father_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Bride's Father's  Images: </label>
				<input type="file" name="bride_father_img">
			</div>
			<div class="form-group">
				<label for="">Bride's Mothers's Name: </label>
				<input type="text" name="bride_mother_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Bride's Mothers's  Images: </label>
				<input type="file" name="bride_mother_img">
			</div>
			<b  class="mb-1" id="btn-less-family" onclick="btn_less_family()"> <i class="fa fa-minus"></i> Less Family</b>
		</div>

		</div>


			
			<div class="form-group">
				<label for="">Email: </label>
				<input type="eamil" name="email" class="form-control" >
			</div>
			<div class="form-group">
				<label for="">Phone Number: </label>
				<input type="text" name="number" class="form-control" >
			</div>
			<button type="submit" name="submit_info" class="btn btn-primary">Submit</button>
                </form>
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
	
</script>