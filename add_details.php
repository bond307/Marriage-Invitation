
<?php
require("session.php");
require("user_header.php");
?>
<link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="alert.css" />
<?php
include("config.php");
if(isset($_POST['submit']))
{
$user_id=$_SESSION["isloginid"];
$gname=$_POST['gname'];
$gfname=$_POST['gfname'];
$gmname=$_POST['gmname'];
$bname=$_POST['bname'];
$bfname=$_POST['bfname'];
$bmname=$_POST['bmname'];
$gaddress=$_POST['gaddress'];
$baddress=$_POST['baddress'];
$mdate=$_POST['mdate'];
$mtime=$_POST['mtime'];
$mvenue=$_POST['mvenue'];
$rdate=$_POST['rdate'];
$rtime=$_POST['rtime'];
$rvenue=$_POST['rvenue'];
$lunch=$_POST['lunch'];
$timess=$_POST['time'];
$relatives=$_POST['relatives'];
$requirements=$_POST['requirements'];
$permission="0";
$addinvi="10";
$img="notaccess";
         $sql="INSERT INTO invitation_details(user_id,groom_name,groom_f_name,groom_m_name,bride_name,bride_f_name,bride_m_name,photo,groom_address,bride_address,mdate,mtime,mvenue,rdate,rtime,rvenue,lunch,timess,relatives,requirements,permission)
        VALUES('$user_id','$gname','$gfname','$gmname','$bname','$bfname','$bmname','$img','$gaddress','$baddress','$mdate','$mtime','$mvenue','$rdate','$rtime','$rvenue','$lunch','$timess','$relatives','$requirements','$permission')";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		$sql="UPDATE register SET addinvi='$addinvi' WHERE id='$id'";
        $result=mysqli_query($con,$sql)or die (mysqli_error($con));
	
        if($result)
        {
            $message="<div class='flag note'>
                <div class='flag__image note__icon'>
                  <i class='fa fa-heart'></i>
                </div>
                <div class='flag__body note__text'>
                  Your invitation details added successfully.Please select the Demo and Pay.
                </div>
                <a href='#' class='note__close'>
                  <i class='fa fa-times'></i>
                </a>
              </div>";
			  
        }
        else{
            $message="<div class='alert alert-danger'>Error in add invitation</div>";

        }
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
              
               <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">															
                                <?php
                                if(isset($message))
                                {
                                 echo $message;
                                }
                                ?>
								<?php
	$id=$_SESSION['isloginid'];
            $sql="SELECT * FROM register Where id='$id'";
            $result=mysqli_query($con,$sql)or die (mysqli_error($con));
            while($row=mysqli_fetch_array($result))
	
if($row['addinvi']==1)
{
	                            ?>
                               <html>
<head>
<title>Demo of page redirection after selection of a drop down listbox menu</title>
<script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "IM_011":
window.location="../add_details.php";
break;

case "IM_010":
window.location="../add_invitationdetails.php";
break;

/// Can be extended to other different selections of SubCategory //////
default:
window.location="../user.php"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
////////////////// 
</script>
</head>
<body>

<SELECT id="s1" NAME="section" onChange="SelectRedirect();">
<Option value="">Select Demo Model</option>
<Option value="IM_011">IM 011 (English,Telugu ₹199 )</option>
<Option value="IM_010">IM 010 (English,Telugu ₹299 )</option>
</SELECT>

</body>
</html>
					<?php
}
else
{
	                ?>
	                <div class='alert alert-danger'>Invitation details already submitted</div>
	                <?php 
}
                    ?>
	
    <?php
	$id=$_SESSION['isloginid'];
            $sql="SELECT * FROM register Where id='$id'";
            $result=mysqli_query($con,$sql)or die (mysqli_error($con));
            while($row=mysqli_fetch_array($result))
	
if($row['addinvi']==1)
{
	?>	
	 <div class='alert alert-danger'>You are selected the Demo Model(IM 011) Price ₹199</div>
	 
								 <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Groom(Varudu) name" name="gname" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Bride(Vadhuvu) name" name="bname" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter Varudu's father name" name="gfname" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter vadhuvu's father name" name="bfname" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter Varudu's mother name" name="gmname" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter vadhuvu's mother name" name="bmname" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Enter Varudu's address" name="gaddress" required></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="Enter Vadhuvu's address" name="baddress" required></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mdate"><b>Marriage Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="date"  name="mdate" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rdate"><b>Reception Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="date" name="rdate" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mtime"><b>Marriage Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="mtime" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rtime"><b>Reception Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="time" name="rtime" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter marriage venue" name="mvenue" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter reception venue" name="rvenue" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" name="lunch" placeholder="Lunch/dinner place" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="time"><b>Lunch/Dinner Time  (Onwards):</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="time" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Other details(Qualification, etc)" name="relatives"></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="If any other requirement from you?" name="requirements"></textarea> 
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit" name="submit">Add invitation</button> 
                               </form>
                            </div>
                        </div>
                    </div>
            </div>
			</div>
            <!-- /Container -->   
            
	<?php
}
else
{
	?>
	                            
	<?php 
}
    ?>
<br>
<br>
		
<?php
require("user_footer.php");
?>
<script type="text/javascript">
        $( document ).ready(function() {
        $(".note__close").click(function() {
          $(this).parent()
          .animate({ opacity: 0 }, 250, function() {
            $(this)
            .animate({ marginBottom: 0 }, 250)
            .children()
            .animate({ padding: 0 }, 250)
            .wrapInner("<div />")
            .children()
            .slideUp(250, function() {
              $(this).closest(".note").remove();
            });
          });
        });
        });
    </script>