<?php
require("session.php");
require("user_header.php");
?>
<?php
$user_id=$_SESSION['isloginid'];
            $sql3="SELECT * FROM invitation_details WHERE user_id='$user_id'";
            $result3=mysqli_query($con,$sql3)or die (mysqli_error($con));
            $row=mysqli_fetch_array($result3);
			?>
			<?php
			if($row['photo']=="notaccess")
			{
			?>
<?php
include("config.php");
$id=$_SESSION["isloginid"];
if(isset($_POST['update']))
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
         $uimg="notaccess";
        $sql="UPDATE invitation_details SET user_id='$user_id',groom_name='$gname',groom_f_name='$gfname',groom_m_name='$gmname',bride_name='$bname',bride_f_name='$bfname',bride_m_name='$bmname',photo='$uimg',groom_address='$gaddress',bride_address='$baddress',mdate='$mdate',mtime='$mtime',mvenue='$mvenue',rdate='$rdate',rtime='$rtime',rvenue='$rvenue',lunch='$lunch',timess='$timess',relatives='$relatives',requirements='$requirements'
        WHERE user_id='$id'";
        $result=mysqli_query($con,$sql)or die (mysqli_error($con));
      
        if($result)
        {
            $message="<p style='color:#3fcc68;'>Invitation details updated successfully.</p>";
        }
        else{
            $message="<div class='alert alert-danger'>Invitation details not updated</div>";

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
                  $sql1="SELECT * FROM invitation_details WHERE user_id='$id'";
                      $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
                      while($row=mysqli_fetch_array($result1))
                      {
                        ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Groom name" name="gname" value="<?php if(isset($row)){echo $row['groom_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Bride name" name="bname" value="<?php if(isset($row)){echo $row['bride_name'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter groom father name" name="gfname" value="<?php if(isset($row)){echo $row['groom_f_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter bride father name" name="bfname" value="<?php if(isset($row)){echo $row['bride_f_name'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter groom mother name" name="gmname" value="<?php if(isset($row)){echo $row['groom_m_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter bride mother name" name="bmname" value="<?php if(isset($row)){echo $row['bride_m_name'];}?>" required >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Enter groom address" name="gaddress" required><?php if(isset($row)){echo $row['groom_address'];}?></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="Enter bride address" name="baddress"required><?php if(isset($row)){echo $row['bride_address'];}?></textarea> 
                                        </div>
                                    </div>
                    
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mdate"><b>Marriage Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="date"  name="mdate" value="<?php if(isset($row)){echo $row['mdate'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rdate"><b>Reception Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="date" name="rdate" value="<?php if(isset($row)){echo $row['rdate'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mtime"><b>Marriage Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="mtime" value="<?php if(isset($row)){echo $row['mtime'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rtime"><b>Reception Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="time" name="rtime" value="<?php if(isset($row)){echo $row['rtime'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter marriage venue" name="mvenue" value="<?php if(isset($row)){echo $row['mvenue'];}?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter reception venue" name="rvenue" value="<?php if(isset($row)){echo $row['rvenue'];}?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" name="lunch" placeholder="Lunch/dinner place" value="<?php if(isset($row)){echo $row['lunch'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="time"><b>Lunch/Dinner Time (Onwards):</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="time" value="<?php if(isset($row)){echo $row['timess'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Other details(Qualification, etc)" name="relatives"><?php if(isset($row)){echo $row['relatives'];}?></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="If any other requirement from you?" name="requirements"><?php if(isset($row)){echo $row['requirements'];}?></textarea> 
                                        </div>
                                    </div>
                                    <?php
									$user_id=$_SESSION['isloginid'];
            $sql2="SELECT * FROM payment_details WHERE user_id='$user_id'";
            $result2=mysqli_query($con,$sql2)or die (mysqli_error($con));
            $row=mysqli_fetch_array($result2);
			?>
									<?php
                if(($row['user_permission']==0) OR ($row['user_permission']==1))
					
                {
                    ?>
                    <button class="btn btn-primary btn-block" type="submit" name="update">Update invitation</button> 
                    <?php
                }
				else
                {
                    ?>
                    <div class='alert alert-danger'>Sorry! Order already processed</div>
					
                    <?php
                }
				?>
                                </form>
								<br>
								<br>
								<br>
								<br>
<br>
<?php
require("user_footer.php");
?>
                                <?php
}
?>
<?php
}
else
{
?>
<?php
include("config.php");
$id=$_SESSION["isloginid"];
if(isset($_POST['update']))
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
$utargetDir= "uploads/";
$uallowTypes = array('jpg','png','jpeg','gif'); 
$ustatusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
$ufileNames = array_filter($_FILES['fileToUpload']['name']);
    if(!empty($ufileNames))
    { 
        foreach($_FILES['fileToUpload']['name'] as $key=>$val)
        { 
            // File upload path 
			$ufileName = basename($_FILES['fileToUpload']['name'][$key]);
           $utargetFilePath = $utargetDir.$ufileName; 
             
            // Check whether file type is valid 
            $ufileType = pathinfo($utargetFilePath, PATHINFO_EXTENSION); 
            if(in_array($ufileType, $uallowTypes))
            { 
                // Upload file to server 
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $utargetFilePath);
                    // Image db insert sql 
					
                 /*}else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                    } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
            echo $insertValuesSQL;*/
           // echo $fileName;
            }
}	
}
         $uimg=implode(",",$ufileNames);
        $sql="UPDATE invitation_details SET user_id='$user_id',groom_name='$gname',groom_f_name='$gfname',groom_m_name='$gmname',bride_name='$bname',bride_f_name='$bfname',bride_m_name='$bmname',photo='$uimg',groom_address='$gaddress',bride_address='$baddress',mdate='$mdate',mtime='$mtime',mvenue='$mvenue',rdate='$rdate',rtime='$rtime',rvenue='$rvenue',lunch='$lunch',timess='$timess',relatives='$relatives',requirements='$requirements'
        WHERE user_id='$id'";
        $result=mysqli_query($con,$sql)or die (mysqli_error($con));
      
        if($result)
        {
            $message="<p style='color:#3fcc68;'>Invitation details updated successfully.</p>";
        }
        else{
            $message="<div class='alert alert-danger'>Invitation details not updated</div>";

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
                  $sql1="SELECT * FROM invitation_details WHERE user_id='$id'";
                      $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
                      while($row=mysqli_fetch_array($result1))
                      {
                        ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Groom name" name="gname" value="<?php if(isset($row)){echo $row['groom_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Bride name" name="bname" value="<?php if(isset($row)){echo $row['bride_name'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter groom father name" name="gfname" value="<?php if(isset($row)){echo $row['groom_f_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter bride father name" name="bfname" value="<?php if(isset($row)){echo $row['bride_f_name'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter groom mother name" name="gmname" value="<?php if(isset($row)){echo $row['groom_m_name'];}?>" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter bride mother name" name="bmname" value="<?php if(isset($row)){echo $row['bride_m_name'];}?>" required >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Enter groom address" name="gaddress" required><?php if(isset($row)){echo $row['groom_address'];}?></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="Enter bride address" name="baddress"required><?php if(isset($row)){echo $row['bride_address'];}?></textarea> 
                                        </div>
                                    </div>
									<div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="photo"><b>Add Photos Groom,Bride (single,combined):</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="file" name="fileToUpload[]" id="fileToUpload" value="<?php if(isset($row)){echo $row['photo'];}?>" multiple required>
                                        </div>
                                    </div>
									<div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="photo"><b>preview:</b></label>
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
                                            <input class="form-control" type="date"  name="mdate" value="<?php if(isset($row)){echo $row['mdate'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rdate"><b>Reception Date:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="date" name="rdate" value="<?php if(isset($row)){echo $row['rdate'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="mtime"><b>Marriage Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="mtime" value="<?php if(isset($row)){echo $row['mtime'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="rtime"><b>Reception Time:</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                                <input class="form-control" type="time" name="rtime" value="<?php if(isset($row)){echo $row['rtime'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" placeholder="Enter marriage venue" name="mvenue" value="<?php if(isset($row)){echo $row['mvenue'];}?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <input class="form-control" type="text" placeholder="Enter reception venue" name="rvenue" value="<?php if(isset($row)){echo $row['rvenue'];}?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" type="text" name="lunch" placeholder="Lunch/dinner place" value="<?php if(isset($row)){echo $row['lunch'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="time"><b>Lunch/Dinner Time (Onwards):</b></label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <input class="form-control" type="time" name="time" value="<?php if(isset($row)){echo $row['timess'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <textarea class="form-control"  placeholder="Other details(Qualification, etc)" name="relatives"><?php if(isset($row)){echo $row['relatives'];}?></textarea> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                                <textarea class="form-control"  placeholder="If any other requirement from you?" name="requirements"><?php if(isset($row)){echo $row['requirements'];}?></textarea> 
                                        </div>
                                    </div>
                                    <?php
									$user_id=$_SESSION['isloginid'];
            $sql2="SELECT * FROM payment_details WHERE user_id='$user_id'";
            $result2=mysqli_query($con,$sql2)or die (mysqli_error($con));
            $row=mysqli_fetch_array($result2);
			?>
									<?php
                if(($row['user_permission']==0) OR ($row['user_permission']==1))
					
                {
                    ?>
                    <button class="btn btn-primary btn-block" type="submit" name="update">Update invitation</button> 
                    <?php
                }
				else
                {
                    ?>
                    <div class='alert alert-danger'>Sorry! Order already processed</div>
					
                    <?php
                }
				?>
                                </form>
                                <?php
}
?>
<br>
<br>
<br>
<br>
<?php
require("user_footer.php");
?>
<?php
}
?>	

