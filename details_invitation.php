<?php
require("session.php");
require("admin_header.php");
?>
<?php
include("config.php");
if(isset($_GET['id']))
    {
        $id=$_GET['id'];
}
?>
<style>
    #disablecolor{
        color: #741599;
        font-weight: bold;
    }
</style>
<div class="hk-pg-wrapper">
    <div class="container mt-xl-50 mt-sm-30 mt-15">
      <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                               <?php
                  $sql1="SELECT * FROM invitation_details WHERE user_id='$id'";
                      $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
                      while($row=mysqli_fetch_array($result1))
                      {
                        ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="Groom name"><b>Groom name:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Groom name" name="gname" value="<?php if(isset($row)){echo $row['groom_name'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="Bride name"><b>Bride name:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Bride name" name="bname" value="<?php if(isset($row)){echo $row['bride_name'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="groom father name"><b>Groom father name</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Enter groom father name" name="gfname" value="<?php if(isset($row)){echo $row['groom_f_name'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="bride father name"><b>Bride father name:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Enter bride father name" name="bfname" value="<?php if(isset($row)){echo $row['bride_f_name'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="groom mother name"><b>Groom mother name:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Enter groom mother name" name="gmname" value="<?php if(isset($row)){echo $row['groom_m_name'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="bride mother name"><b>Bride mother name:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" id="disablecolor" type="text" placeholder="Enter bride mother name" name="bmname" value="<?php if(isset($row)){echo $row['bride_m_name'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="groom address"><b>Groom address:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <textarea class="form-control" id="disablecolor"  placeholder="Enter groom address" name="gaddress" disabled><?php if(isset($row)){echo $row['groom_address'];}?></textarea> 
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="bride address"><b>Bride address:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <textarea class="form-control"  id="disablecolor" placeholder="Enter bride address" name="baddress"disabled><?php if(isset($row)){echo $row['bride_address'];}?></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="photo"><b>photo:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <?php
                                $photo=explode(',', $row['photo']);
                                foreach ($photo as $r) {
                                    ?>
                                    <img src="uploads/<?php if(isset($r)){echo  $r;}?>" alt="photo" height="160" width="190">
                                    <?php
                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mdate"><b>Marriage Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="date"  name="mdate" value="<?php if(isset($row)){echo $row['mdate'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rdate"><b>Reception Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" id="disablecolor" type="date" name="rdate" value="<?php if(isset($row)){echo $row['rdate'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mtime"><b>Marriage Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="time" name="mtime" value="<?php if(isset($row)){echo $row['mtime'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rtime"><b>Reception Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" id="disablecolor" type="time" name="rtime" value="<?php if(isset($row)){echo $row['rtime'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="marriage venue"><b>Marriage venue:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" placeholder="Enter marriage venue" name="mvenue" value="<?php if(isset($row)){echo $row['mvenue'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="reception venue"><b>Reception venue:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" id="disablecolor" type="text" placeholder="Enter reception venue" name="rvenue" value="<?php if(isset($row)){echo $row['rvenue'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mlocation"><b>Marriage Location:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <img src="<?php if(isset($row)){echo $row['mlocation'];}?>" alt="Marriage Location" height="160" width="150">
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rlocation"><b>Reception Location:</b></label>
                                        </div>
                                         <div class="col-md-4 form-group">
                                                <img src="<?php if(isset($row)){echo $row['rlocation'];}?>" alt="Reception Location" height="160" width="150">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="Lunch at"><b>Lunch At:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="text" name="lunch" placeholder="Lunch/dinner place" value="<?php if(isset($row)){echo $row['lunch'];}?>" disabled>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="time"><b>Lunch Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" id="disablecolor" type="time" name="time" value="<?php if(isset($row)){echo $row['timess'];}?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="Best compliment"><b>Best Compliment from:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <textarea class="form-control" id="disablecolor" placeholder="If you want your relatives names also please enter with details" name="relatives" disabled><?php if(isset($row)){echo $row['relatives'];}?></textarea> 
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="other requirement"><b>Other requirement:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <textarea class="form-control" id="disablecolor" placeholder="If any other requirement from you?" name="requirements" disabled><?php if(isset($row)){echo $row['requirements'];}?></textarea> 
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