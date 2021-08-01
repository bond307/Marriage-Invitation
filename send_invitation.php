<?php
require("main.php");
require("user_header.php");
?>
<?php
require("config.php");
if(isset($_POST['add']))
	{
        $user_id=$_SESSION['isloginid'];
		$name=$_POST['name'];
        $phone=$_POST['phone'];
		$table="send";
		$fields="user_id,name,phone";
		$value="'$user_id','$name','$phone'";
        $message=$obj->insertall($table,$fields,$value);
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
                                <form action="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        	<label for="name"><b>Name:</b></label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input class="form-control" type="text" placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        	<label for="phone"><b>Phone:</b></label>
                                        </div>
                                        <div class="col-md-9 form-group">
                                            <input class="form-control" type="text" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-md-3 form-group">
                                        </div>
                                    	<div class="col-md-6 form-group">
                                    		<button class="btn btn-primary btn-block" type="submit" name="add">Add</button> 
                                    	</div>
                                        <div class="col-md-3 form-group">
                                        </div>
                                	</div>
                                </form>           
  <table class="table table-striped">
    <form action="mutiple_sms.php" method="post">
    <thead>
      <tr>
        <th>Select</th>
        <th>Name</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $user_id=$_SESSION['isloginid'];
            $sql="SELECT * FROM send Where user_id='$user_id'";
            $result=mysqli_query($con,$sql)or die (mysqli_error($con));
            while($row=mysqli_fetch_array($result))
            {
        ?>
      <tr>
        <td><input type="checkbox" name="techno[]" value="<?php echo $row['phone'];?>" required></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["phone"];?></td>
      </tr>
      <?php
            }
        ?>
        <tr> 
        <?php 
            $receipt=$_SESSION['islogin'];
            $sql1="SELECT * FROM payment_details WHERE user_id='$user_id'";
            $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
            $row=mysqli_fetch_array($result1);
            $message=$row["userlink"];
            $link=$message;
            $textMessage="Marriage Invitation: Hai ..! We invite you to share in our joy and request your presence at the wedding. Bless us with your sweet presence. www.mymarriageinvitation.com/".$link." With Love: ".$receipt.". With Regards: www.mymarriageinvitation.com";
        ?>
            <td><label for="Message"><b>Message will be send:</b></label></td>
            <td colspan="2"> <textarea class="form-control"  placeholder="Enter Message to be send" name="message" rows="5" col="5" style="color: #c924c9;font-weight: bold;" readonly><?php if(isset($textMessage)){echo$textMessage;}?></textarea></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
			<?php
		    date_default_timezone_set("Asia/kolkata");
			$sat = date("H:i:s");
                ?>
				<?php
                if($row['user_permission']==4 && ($sat >="09:00:10" && $sat <="20:44:50"))
					
                {
                    ?>
                    <input type="submit" class="btn btn-gradient-danger" value="send invitation link" name="sub"></td> 
                    <?php
                }
				elseif($row['user_permission']==4)
                {
                    ?>
                    <div class='alert alert-danger'>Order delivered.But messages will be send between 9 Am - 8:45 Pm only</div>
					
                    <?php
                }
                elseif($row['user_permission']==3)
                {
                ?>
                
                    <div class='alert alert-danger'>Invitation completed ready to deliver</div>
                <?php
            }
			elseif($row['user_permission']==2)
                {
                ?>
                
                    <div class='alert alert-danger'>Invitation under process</div>
                <?php
            }
			elseif($row['user_permission']==1)
                {
                ?>
                
                    <div class='alert alert-danger'>Order Placed</div>
                <?php
            }
			else
                {
                ?>
                
                    <div class='alert alert-danger'>Order not yet placed</div>
                <?php
            }
                ?> 
				
        </tr>
    </tbody>
</form>
  </table>
                            </div>
                        </div>
    </div>
</div>
<?php
require("user_footer.php");
?>