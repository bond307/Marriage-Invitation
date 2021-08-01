<?php
session_start();
include("config.php");
?>
<?php
class general
{
	function insertall($table,$fields,$value)
	{
		global $con;
		$sql="INSERT INTO $table($fields)VALUES($value)";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		if($result)
		{
			$message="<div class='alert alert-danger'>Inserted successfully</div>";
		}
		else{
			$message="<div class='alert alert-danger'>Error occured in the registeration process
			</div>";
		    }
		return $message;
	}
	function login()
	{
		global $con;
		$username = $_POST['uname'];
		$password=sha1($_POST['psw']);
		$sql = "SELECT * FROM register WHERE (mobile_no = '$username' OR email='$username') AND password = '$password' ";
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
		$numrows = mysqli_num_rows($result);
		$permission=$row['permission'];
			if($numrows == 1 AND $permission=='2')
			   {
			   		$_SESSION['isloginid']=$row['id'];
				 	$_SESSION['islogin']=$row['name'];
				 	$_SESSION['email']=$row['email'];
					$_SESSION['mobile']=$row['mobile_no'];
				  	header('location: user_home.php');
			   } 
			else if($numrows == 1 AND $permission=='1')
			{
				$_SESSION['isloginid']=$row['id'];
				$_SESSION['islogin']=$row['name'];
				header('location: admin_home.php');
			}
			else
			   {
			    $mesage= "Incorrect Username/Password";
			   }
		}
		$mesage= "<div class='alert alert-danger'>
		Incorrect Username/Password</div>";
		return $mesage;
	}
	function viewalldata($table)
	{
		global $con;
		$sql="SELECT * FROM $table WHERE user_permission=1";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			if ($row["payment_status"]==1) 
			{
				$pstatus="Paid";
			}
			else
			{
				$pstatus="Not Paid";
			}
			?>
			<tr><td class="title tablesaw-swipe-cellpersist"><?php echo $row["user_name"];?></td><td class="tablesaw-priority-3"><?php echo $row["demo_name"];?></td><td class="tablesaw-priority-1"><?php echo $pstatus;?></td>
				<td>
					<form action="" method="POST" onsubmit="return confirm('Do you want to proceed with these details');">
                                                     <input type="hidden" value="<?php echo $row['user_id']; ?>" name ="id">
                                                     <input type="submit" class="btn btn-gradient-secondary" name="<?php if($row['user_permission']==1)
                                                     	{echo 'process';
                                                     ?>" 
                                                     value="<?php echo 'Process';
                                               			} 
                                               			elseif($row['user_permission']==2)
                                                     	{echo 'unprocess';
                                                     ?>" 
                                                     value="<?php echo 'Unprocess';
                                               			} 
                                                 	?>"
                                                 	>
                                                     </form>
			<?php
		}
		if(isset($_POST['unprocess'])){
			$sql1="update payment_details set user_permission=1 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>successfully move the invitation in processing mod
			</div>";
			return $message;
			}
			if(isset($_POST['process'])){
			$sql1="update payment_details set user_permission=2 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$sql7="update invitation_details set permission=2 where user_id='".$_POST['id']."'";
			$result7=mysqli_query($con,$sql7)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>successfully move the invitation in processing mod
			</div>";
			return $message;
			}
	}
	function viewallpendingdata($table)
	{
		global $con;
		$sql="SELECT * FROM $table WHERE user_permission=2";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			if ($row["payment_status"]==1) 
			{
				$pstatus="Paid";
			}
			else
			{
				$pstatus="Not Paid";
			}
			?>
			<tr><td class="title tablesaw-swipe-cellpersist"><?php echo $row["user_name"];?></td><td class="tablesaw-priority-3"><?php echo $row["demo_name"];?></td><td class="tablesaw-priority-1"><?php echo $pstatus;?></td>
				<td>
					<form action="" method="POST" onsubmit="return confirm('Do you want to proceed with these details');">
                                                     <input type="hidden" value="<?php echo $row['user_id']; ?>" name ="id">
                                                     <input type="submit" class="btn btn-gradient-secondary" name="<?php if($row['user_permission']==2)
                                                     	{echo 'ready';
                                                     ?>" 
                                                     value="<?php echo 'Ready';
                                               			} 
                                               			elseif($row['user_permission']==3)
                                                     	{echo 'process';
                                                     ?>" 
                                                     value="<?php echo 'Process';
                                               			} 
                                                 	?>"
                                                 	>
                                                     </form>
			<?php
		}
		if(isset($_POST['process'])){
			$sql1="update payment_details set user_permission=2 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>successfully move the invitation in completed mod
			</div>";
			return $message;
			}
			if(isset($_POST['ready'])){
			$sql1="update payment_details set user_permission=3 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>successfully move the invitation in completed mod
			</div>";
			return $message;
			}
	}
	function viewallreadydata($table)
	{
		global $con;
		$sql="SELECT * FROM $table WHERE user_permission=3";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			if ($row["payment_status"]==1) 
			{
				$pstatus="Paid";
			}
			else
			{
				$pstatus="Not Paid";
			}
			?>
			<tr><td><?php echo $row["user_name"];?></td><td><?php echo $row["demo_name"];?></td><td><?php echo $pstatus;?></td>
				<td>
					<form action="delivered_sms.php" method="POST" onsubmit="return confirm('Do you want to proceed with these details');">
                                                     <input type="hidden" value="<?php echo $row['user_id']; ?>" name ="id">
                                                     <input type="hidden" value="<?php echo $row['demo_url']; ?>" name ="demourl">
                                                     <input type="text" class="" value="" name="tempurl" placeholder="Enter user invitation link">
                                                     <input type="submit" class="btn btn-gradient-secondary" name="<?php if($row['user_permission']==3)
                                                     	{echo 'deliver';
                                                     ?>" 
                                                     value="<?php echo 'Deliver';
                                               			} 
                                               			elseif($row['user_permission']==4)
                                                     	{echo 'ready';
                                                     ?>" 
                                                     value="<?php echo 'Ready';
                                               			} 
                                                 	?>"
                                                 	>
                                                     </form>
			<?php
		}
		if(isset($_POST['ready'])){
			$sql1="update payment_details set user_permission=3 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>Invitation ready to deliver
			</div>";
			return $message;
			}
			/*if(isset($_POST['deliver'])){
			$sql1="update payment_details set user_permission=4 where user_id='".$_POST['id']."'";
			$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
			$message="<div class='alert alert-danger'>Orginal invitation link delivered successfully 
			</div>";
			return $message;
			}*/
	}
	function viewalldeliverddata($table)
	{
		global $con;
		$sql="SELECT * FROM $table WHERE user_permission=4";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			if ($row["payment_status"]==1) 
			{
				$pstatus="Paid";
			}
			else
			{
				$pstatus="Not Paid";
			}
			?>
			<tr><td><?php echo $row["user_name"];?></td><td><?php echo $row["demo_name"];?></td><td><?php echo $pstatus;?></td>
				<td>Delivered successfully</td>		
			<?php
		}
		
	}
	function viewdemodata($table)
	{
		global $con;
		$sql="SELECT * FROM $table";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			?>
			<tr><td><?php echo $row["name"];?></td><td><img src="<?php echo $row["product_image"];?>" alt="images" height="65" width="100"></td><td><?php echo $row["price"];?></td>
				<td><a href="add_demo.php?id=<?php echo $row['id'];?>"><input type="submit" name="edit" class="btn btn-gradient-secondary" value="Edit"></a></td><td><a href="delete.php?iddelete=<?php echo $row['id'];?>"><input type="submit" name="delete" class="btn btn-gradient-warning" value="Delete"></a></td>		
			<?php
		}
		
	}
	function invitationdata($table)
	{
		global $con;
		$sql="SELECT * FROM $table";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			$nameuser=$row['user_name'];
			?>
			<tr><td><?php echo $row["user_name"];?></td>
				<?php
				$sql1="SELECT name,mobile_no FROM register WHERE name='$nameuser'";
				$result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
				while($row1=mysqli_fetch_array($result1))
				{
					$number=$row1["mobile_no"];
				}
				?>
				<td><?php echo $number;?></td>
				<td><?php echo $row["demo_name"];?></td>
				<td><a href="details_invitation.php?id=<?php echo $row['user_id'];?>"><input type="submit" name="invitation" class="btn btn-gradient-secondary" value="Invitation details"></a></td><td><?php echo $row['demo_url'];?></td>		
			<?php
		}
		
	}
	function editalldata($table,$id)
	{
		global $con;
		$sql="SELECT * FROM $table WHERE id='$id'";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		$row=mysqli_fetch_array($result);
		return $row;
	}
	function updateall($table,$fields,$value)
	{
		global $con;
		$sql="UPDATE $table SET $fields WHERE $value";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		if($result)
		{
			$message= "<div class='alert alert-danger'>Record updated successfully</div>";
		}
		else{
			$message= "<div class='alert alert-danger'>Error in updation</div>";
		    }
		    return $message;
	}
	function updateallinvitation($table,$fields,$value)
	{
		global $con;
		$sql="UPDATE $table SET $fields WHERE $value";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		if($result)
		{
		    return;
		}
	}
	function deleteall($table,$iddelete)
	{
		global $con;
		$sql="DELETE FROM $table WHERE id='$iddelete'";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		if($result)
		{
			header("LOCATION:update_demo.php");
		}
		else{
			echo "Error in deletion";
		    }
	}
	function deleteallpay($table,$iddelete)
	{
		global $con;
		$sql="DELETE FROM $table WHERE id='$iddelete'";
		$result=mysqli_query($con,$sql)or die (mysqli_error($con));
		if($result)
		{
			header("LOCATION:pay.php?checkout=automatic");
		}
		else{
			echo "Error in deletion";
		    }
	}
}
$obj=new general();
?>