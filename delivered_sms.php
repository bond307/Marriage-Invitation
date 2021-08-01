<?php
require("main.php");
require("config.php");
if(isset($_POST['deliver']))
{
    $id=$_POST["id"];
    $demourl=$_POST["tempurl"];
    $url=$demourl;
    $sql1="UPDATE payment_details SET userlink='$url' WHERE user_id='$id'";
    $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
     $sql="SELECT id,name,mobile_no FROM register WHERE id='$id'";
     $result=mysqli_query($con,$sql)or die (mysqli_error($con));
     $row=mysqli_fetch_array($result);
     $name=$row['name'];
}
     ?>
     <?php
        require("admin_header.php");
     ?>
<div class="hk-pg-wrapper">
    <div class="container mt-xl-50 mt-sm-30 mt-15">
            <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
            <form method="POST" action="sms.php">
            <div class="form-row">
             <div class="col-md-12 form-group">
                <input type="hidden" name ="id" value="<?php if(isset($row)){echo $row['id'];} ?>">
                <textarea class="form-control"  placeholder="Enter Message to be send" name="userMessage" rows="3" required><?php echo"Hai ".$name."! Your Request for Marriage Invitation was Ready. Here the link www.mymarriageinvitation.com/".$url." Thank you for using mymarriageinvitation .com With regards: www.mymarriageinvitation.com";?></textarea>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12 form-group">
            <input type="text" class="form-control" placeholder="Phone" name="userMobile" value="<?php if(isset($row)){echo $row['mobile_no'];}?>">
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Send Link">
            </div>
            </div>
            </form>
                            </div>

                        </div>
            </div>
    </div>
</div>
  <?php
     require("user_footer.php");
?>