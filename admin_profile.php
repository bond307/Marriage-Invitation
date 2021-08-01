<?php
require("main.php");
require("admin_header.php");
?>
<?php
require("config.php");
if(isset($_POST['update']))
	{
		$id=$_SESSION["isloginid"];
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$table="register";
		$fields="name='".$name."',mobile_no='".$mobile."',email='".$email."'";
		$value="id='$id'";
		$message=$obj->updateall($table,$fields,$value);
		//header("LOCATION:user_home.php");
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
                                        <div class="col-md-2 form-group">
                                        	<label for="name"><b>Name:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?php if(isset($row)){echo $row['name'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                        	<label for="name"><b>mobile No:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="text" placeholder="mobile" name="mobile" value="<?php if(isset($row)){echo $row['mobile_no'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                        	<label for="name"><b>email:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="text" placeholder="email" name="email" value="<?php if(isset($row)){echo $row['email'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    	<div class="col-md-6 form-group">
                                    		<button class="btn btn-primary btn-block" type="submit" name="update">Update</button> 
                                    	</div>
                                    	<div class="col-md-6 form-group">
                                    		<a href="admin_home.php" class="btn btn-primary btn-block">Cancel</a>
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