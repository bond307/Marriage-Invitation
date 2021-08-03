<?php 
require("session.php");
include('config.php');
    if(isset($_POST["submit_info"]) ){
        $img_dir = "wedding/info-img/";

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
      $g_img_name = $_SESSION['isloginid'].'-'.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
      move_uploaded_file($g_img_target, $img_dir.$g_img_name);
      //end grooms img upload
       

         //bride's img
         $b_img_name = $_SESSION['isloginid'].'-'.$_FILES['b_img']['name'];
         $b_img_target = $_FILES['b_img']['tmp_name'];
         move_uploaded_file($b_img_target, $img_dir.$b_img_name);
         //end bride img upload
          


     //groom father img
      $grom_father_img_name = $_SESSION['isloginid'].'-'.$_FILES['grom_father_img']['name'];
      $grom_father_img_dir = $_FILES['grom_father_img']['tmp_name'];
      move_uploaded_file($grom_father_img_dir, $img_dir.$grom_father_img_name);
//end groom mother img upload
      $grom_mother_img_name = $_SESSION['isloginid'].'-'.$_FILES['bride_mother_img']['name'];
      $grom_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
      move_uploaded_file($grom_mother_img_dir, $img_dir.$grom_mother_img_name);
      //end grooms img upload
       

         //brideo father img
         $bride_father_img_name = $_SESSION['isloginid'].'-'.$_FILES['bride_father_img']['name'];
         $bride_father_img_dri = $_FILES['bride_father_img']['tmp_name'];
         move_uploaded_file($bride_father_img_dri, $img_dir.$bride_father_img_name);
   //end groom mother img upload
         $bride_mother_img_name = $_SESSION['isloginid'].'-'.$_FILES['bride_mother_img']['name'];
         $bride_mother_img_dir = $_FILES['bride_mother_img']['tmp_name'];
         move_uploaded_file($grom_mother_img_dir, $img_dir.$grom_mother_img_name);
         //end grooms img upload
          

         //groom's img
         $g_img_name = $_SESSION['isloginid'].'-'.$_FILES['g_img']['name'];
         $g_img_target = $_FILES['g_img']['tmp_name'];
         move_uploaded_file($g_img_target, $img_dir.$g_img_name);
         //end grooms img upload
          

            //groom's img
      $g_img_name = $_SESSION['isloginid'].'-'.$_FILES['g_img']['name'];
      $g_img_target = $_FILES['g_img']['tmp_name'];
      move_uploaded_file($g_img_target, $img_dir.$g_img_name);
      //end grooms img upload
       

      //upload slider images
        foreach($_FILES["slider_img"]["name"] as $slider_img_key=>$slider_img_value){
           $slider_img_name = $_SESSION['isloginid'].'-'.$slider_img_value;
           move_uploaded_file($_FILES["slider_img"]["tmp_name"][$slider_img_key], $img_dir.$slider_img_name);
        }

 //weeding images
 foreach($_FILES["wee_img"]["name"] as $wee_img_key=>$wee_img_value){
    $wee_img_name = $_SESSION['isloginid'].'-'.$wee_img_value;
    move_uploaded_file($_FILES["wee_img"]["tmp_name"][$wee_img_key], $img_dir.$wee_img_value);
 }

       
       $user_id = $_SESSION['isloginid'];
       if(isset($_GET['templat_key'] )){
			 echo $tmp_id = $_GET['templat_key'];
	   }else{
		   $tmp_msg = "<div class='alert alert-danger'><strong>Don not select any demo.</strong> Please select demo first....!</div>";
	   }
	  
	   $date = date("d-m-y");



	   //insert
	   $sql = mysqli_query($con, "INSERT INTO `tamplate_info`(`g_name`, `g_img`, `b_name`, `b_img`, `slider_img`, `m_date`, `m_time`, `m_day`, `m_ven`, `reception`, `rec_date`, `rec_time`, `rec_ven`, `lunc_date`, `lunc_time`, `lunc_ven`, `per_wee_img`, `family_g_father_name`, `family_g_father_img`, `family_g_mother_name`, `family_g_mother_img`, `family_b_father_name`, `family_b_father_img`, `family_b_mother_name`, `family_b_mother_img`, `email`, `phone`, `user_id`, `tem_id`, `status`) 
	   VALUES('$g_name',  '$g_img_name', '$b_name', '$b_img_name', '$slider_img_name', '$m_data', '$m_time', '$m_day', '$m_veu', 'yes', '$r_date', '$r_time', '$r_veu', '$l_date', '$l_time', '$l_veu', '$wee_img_name', '$grom_father_name', '$grom_father_img_name', '$grom_mother_name', '$grom_mother_img_name', '$bride_father_name', '$bride_father_img_name', '$bride_father_img_name', '$bride_mother_name', '$bride_mother_img_name', '$email', '$number', '$user_id', '$tmp_id', 'Active' ) ");
	   if($sql == true){
		   echo "success";
	   }else{
		   echo "sumthing is worng";
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
		</style>
               
        <div class="col-md-6 offset-md-3 mt-3">
			<?php 
				if(isset($tmp_msg) ){
					echo $tmp_msg;
				}
			?>
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
				<label for="">Slider Images: </label>
				<input type="file" name="slider_img[]" multiple>
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
				<label for="">Per Wedding Images: </label>
				<input type="file" name="wee_img[]" multiple>
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