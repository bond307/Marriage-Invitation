<?php
require("session.php");
require("user_header.php");
?>
        <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="alert.css" />

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
window.location="../mymarriageinvitation/user.php"; // if no selection matches then redirected to home page
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
            </div>
			</div>
            <!-- /Container -->   
            <br>
            <br>
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
	