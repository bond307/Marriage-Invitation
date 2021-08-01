<?php
require("main.php");
require("user_header.php");
?>
<?php
require("config.php");
if(isset($_POST['update']))
	{
		$id=$_SESSION["isloginid"];
		$password=sha1($_POST['npassword']);
        $cpassword=sha1($_POST['cpassword']);
		$table="register";
		$fields="password='".$password."',confirm_password='".$cpassword."'";
		$value="id='$id'";
        if($password==$cpassword)
        {
		$message=$obj->updateall($table,$fields,$value);
        }
        else
        {
          $msg="<div class='alert alert-danger'>password mismatching</div>";
        }
		
	}
?>
<div class="hk-pg-wrapper">
    <div class="container mt-xl-50 mt-sm-30 mt-15">
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
    	<div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                            	 <?php
                            	 $id=$_SESSION["isloginid"];
									$sql="SELECT * FROM register WHERE id='$id'";
									    $result=mysqli_query($con,$sql)or die (mysqli_error($con));
									    while($row=mysqli_fetch_array($result))
									    {
									      ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        	<label for="newpassword"><b>New password:</b></label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input class="form-control" type="password" placeholder="New password" name="npassword" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        	<label for="confirmpassword"><b>Confirm password:</b></label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input class="form-control" type="text" placeholder="Confirm password" name="cpassword" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        </div>
                                    	<div class="col-md-6 form-group">
                                    		<button class="btn btn-primary btn-block" type="submit" name="update">Change password</button> 
                                    	</div>
                                        <div class="col-md-3 form-group">
                                        </div>
                                	</div>
                                </form>
                                <?php
}
?>
                            </div>
                        </div>
    </div>
</div>
<?php
require("user_footer.php");
?>