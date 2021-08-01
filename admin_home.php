<?php
require("session.php");
require("admin_header.php");
require("config.php");
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
						<h2 class="hk-pg-title font-weight-600 mb-10">Dashboard</h2>
					</div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-7">
								
								<div class="hk-row">						<?php
			$sql="select * from payment_details where user_permission =1";
			$result=mysqli_query($con,$sql);
			$totalmember=mysqli_num_rows($result);
				$sql1="select * from payment_details where user_permission =2";
				$result1=mysqli_query($con,$sql1);
				$totalmember1=mysqli_num_rows($result1);
			$sql2="select * from payment_details where user_permission =3";
			$result2=mysqli_query($con,$sql2);
			$totalmember2=mysqli_num_rows($result2);
				$sql3="select * from payment_details where user_permission =4";
				$result3=mysqli_query($con,$sql3);
				$totalmember3=mysqli_num_rows($result3);
			
								?>
									<div class="col-md-6 col-sm-6">
									<a href="new_user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">New Users</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill"><?php echo $totalmember;?></span>
													</div>
													
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5"><?php echo $totalmember;?></span>
													<small class="d-block">New invitation requirements</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-6 col-sm-6">
									 <a href="pending_user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Processing Users</span>
													</div>
													<div>
														<span class="badge badge-danger badge-pill"><?php echo $totalmember1;?></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5"><?php echo $totalmember1;?></span>
													<small class="d-block">Invitation in process</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-6 col-sm-6">
									  <a href="completed_user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Completed Users</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill"><?php echo $totalmember2;?></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5"><?php echo $totalmember2;?></span>
													<small class="d-block">Ivitation is ready but not send</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-6 col-sm-6">
									<a href="delivered_user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Delivered users</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"><?php echo $totalmember3;?></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5"><?php echo $totalmember3;?></span>
													<small class="d-block">Orders fulfilled</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-6 col-sm-6">
									<a href="add_demo.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Add invitation demos</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/1.png"></span>
													<small class="d-block">Add invitation demos here</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-6 col-sm-6">
									<a href="update_demo.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Update invitation demos</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/1.png"></span>
													<small class="d-block">Edit/update invitation demos</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									<div class="col-md-3 col-sm-3">
									</div>
									<div class="col-md-6 col-sm-6">
									<a href="user_invitation_details.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">User and invitation details</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill"></span>
													</div>
													
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/6.png"></span>
													<small class="d-block">New invitation requirements</small>
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