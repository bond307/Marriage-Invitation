<?php
require("main.php");
?>
<?php
require("admin_header.php");
?>
<div class="hk-pg-wrapper">      
<div class="container mt-xl-50 mt-sm-30 mt-15">
	<div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">New Invitation requested users</h5>
                        <div class="container mt-xl-50 mt-sm-30 mt-15">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table  id="datable_1"  class="table tablesaw table-hover w-100 display mb-30 tablesaw-sortable 
                                                tablesaw-columntoggle" data-tablesaw-mode="columntoggle" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" 
                                                data-tablesaw-minimap="" data-tablesaw-mode-switch="" style="" >
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Demo Name</th>
                                                    <th>Payment Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
													$table="payment_details";
													$message=$obj->viewalldata($table)				
												?>
					                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
</div>
</div>
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
                      
<?php
require("user_footer.php");
?>