<?php
	require "config.php";
	$checkid=$_GET['mailid'];
	//echo $checkid;
	$sql="SELECT email FROM register WHERE email='$checkid'";
	$result1=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result1);
	if($count>0)
		{
			echo "<div class='alert alert-danger'>Email ID already exists</div>";
		}
		else
		{
		
		}
?>