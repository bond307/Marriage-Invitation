<?php
require("session.php");
?>
<?php
require("main.php");
require("config.php");
if(isset($_POST['purchase']))
  {
$user_id=$_SESSION["isloginid"];
$user_name=$_SESSION["islogin"];$name=$_POST['name'];
  $pname=$_POST['pname'];
  $purl=$_POST['purl'];
  $price=$_POST['price'];
  $invoice_no=$_POST['invoice_no'];
  $userlink ="";
$table="payment_details";
$fields="user_permission='0',demo_name='$name',demo='$pname',demo_url='$purl',amount='$price',payment_status='0',invoice_number='$invoice_no',userlink='$userlink'";
$value="user_id='$user_id'";
$obj->updateall($table,$fields,$value);
$table="invitation_details";
$fields="permission='1'";
$value="user_id='$user_id'";
$obj->updateallinvitation($table,$fields,$value);
      header("LOCATION:pay.php?checkout=automatic");   
  }
?>
<?php
require("user_header.php");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Zawag - Wedding HTML5 Template</title>
    
     <link rel="stylesheet" href="assets/css/style.css">

	<style type="text/css">

		* {
			padding: 0;
			margin: 0;
		}
		label {
			font-weight: 600;
			font-size: 16px;
		}

		#logo2 {
			text-align: center;
			margin-bottom: 30px;
		}

		#logo2 h1 {
			color: #252525;
			font-size: 48px;
			font-family: "Poppins", sans-serif;
			font-weight: 300;
			padding-bottom: 35px;
			margin: 50px 0 25px;
			position: relative;
			text-transform: capitalize;
		}


		#logo2 h1 span {
			color: #f36c6e;
		}

		#logo2 h1:after {
			content: '';
			position: absolute;
			width: 110px;
			height: 1px;
			background: #252525;
			bottom: 0px;
			left: 50%;
			margin-left: -55px;
		}

		#logo2 h2 {
			color: #252525;
			font-size: 28px;
			font-weight: 300;
			padding-bottom: 0px;
			margin-bottom: 25px;
			position: relative;
			text-transform: capitalize;
		}

		#logo2 p {
			color: #f17678;
			font-size: 24px;
		}

		.versions {
			max-width: 1600px;
			min-height: 550px;
			margin: 0 auto;
		}

		.version-choose {
			position: relative;
			width: 33%;
			float: left;
			text-align: center;
		}

		.version-choose img {
			max-width: 100%;
			margin-bottom: 20px;
			margin-top: 40px;
		}

		.version-choose p {
			color: #252525;
			font-size: 18px;
			font-family: "Poppins", sans-serif;
			margin-bottom: 40px;
		}

		.version-choose a {
			display: inline-block;
			text-decoration: none !important;
			color: #fff;
			font-size: 14px;
			font-family: "Poppins", sans-serif;
			background: #252525;
			padding: 15px 46px;
			margin-bottom: 50px;
			text-transform: uppercase;
			transition: all 0.17s ease-in-out;
			-moz-transition: all 0.17s ease-in-out;
			-webkit-transition: all 0.17s ease-in-out;
			-o-transition: all 0.17s ease-in-out;
		}

		.version-choose a:hover {
			opacity: 0.7;
		}

		@media screen and (max-width: 1000px) {
			#logo {
				margin-bottom: 60px;
			}

			.version-choose {
				float: none;
				text-align: center !important;
				margin-bottom: 40px;
				width: 100%;
			}
		}

		.demo a {
			display: inline-block;
			text-decoration: none !important;
			color: #fff;
			font-size: 14px;
			font-family: "Poppins", sans-serif;
			background: #fff;
			padding: 15px 20px;
			margin-bottom: 0px;
			text-transform: uppercase;
			transition: all 0.17s ease-in-out;
			-moz-transition: all 0.17s ease-in-out;
			-webkit-transition: all 0.17s ease-in-out;
			-o-transition: all 0.17s ease-in-out;
		}




		.buy {
			text-align: center;
		}

		.buy a {
			display: inline-block;
			text-decoration: none !important;
			color: #fff;
			font-size: 14px;
			font-family: "Poppins", sans-serif;
			border-radius: 50px;
			background-color: #fd1c56;
			font-weight: 500;
			padding: 15px 46px;
			margin-bottom: 25px;
			text-transform: uppercase;
			transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-webkit-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
		}

		.buy a:hover {
			opacity: 0.7;
		}
    #overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
	</style>
	
<!--<script src='/google_analytics_auto.js'></script>-->
</head>
<?php
    $value2='';
    $query = "SELECT invoice_number from payment_details order by invoice_number DESC LIMIT 1";
    $stmt = mysqli_query($con, $query)or die(mysqli_error($con));
    if(mysqli_num_rows($stmt) > 0) {
        echo mysqli_num_rows($stmt);
        if ($row6 = mysqli_fetch_assoc($stmt)) {
            $value2 = $row6['invoice_number'];
            $value2 = $value2 + 1;//Incrementing numeric part
            $value = $value2; 
        }
    } 
    else {
        $value2 = "20201001";
        $value = $value2;
    }

    ?>
		<div class="container">
				<div class="container">
					<div class=" col-lg-12 col-md-12 col-sm-12 versions">
						<div class="row">
          <?php
		  $i=0;
$sql="SELECT * FROM tbl_products";
    $result=mysqli_query($con,$sql)or die (mysqli_error($con));
    while($row=mysqli_fetch_array($result))
    {
		$i++;
      ?>
          
<div class="col-lg-4 col-md-4 col-sm-6 col-12 version-choose">
<div class="demo"><a "<?php echo $row['product_image'] ; ?>"><img
			src="<?php echo $row['product_image'] ; ?>" alt="wedding Invitation"></a></div>
<p><?php echo $row['name'] ; ?></p>
<p><?php echo "₹"; echo  $row['price'] ; ?> </p>
<p style="text-decoration: line-through;color:red"><?php echo "₹"; echo  $row['actual_price'] ; ?></p>
<form method="post" action="">
	<input type="hidden" name="name" value="<?php echo $row['name'] ;?>">
	<input type="hidden" name="pname" value="<?php echo $row['product_image'] ;?>">
	<input type="hidden" name="purl" value="<?php echo $row['url'] ;?>">
	<input type="hidden" name="price" value="<?php echo $row['price'] ;?>">
	<input type="hidden" name="invoice_no" value="<?php echo $value?>">
	<a target="_blank" href="<?php echo $row['url'] ; ?>" class="nile-bottom layout-2">View Demo</a>
	<?php
	
			$user_id=$_SESSION['isloginid'];
            $sql1="SELECT * FROM payment_details WHERE user_id='$user_id'";
            $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
            $rows=mysqli_fetch_array($result1);
									
			?>
			<?php
			if($rows['payment_status']==1) 
			{
				?>
			<a class="nile-bottom layout-2">Sorry! One user- One Order Only</a>
    								
			<?php
			}
			else
			{
				?>
			<a class="nile-bottom layout-2" href="template.information.php?templat_key=<?php echo $row['product_key']?>">Create Page</a>
				<!----<button type="button"  data-toggle="modal" data-target="#staticBackdrop" class="nile-bottom layout-2" style="font-weight: normal;text-transform: uppercase;" name="purchase">
				Submit Info
			    </button>---->
				<?php
			}
			?>
                </form>
                   <!-- <div id="overlay" onclick="off()">
                        <iframe src="payment.php" height="410" width="350" style="padding-top: 200px;"></iframe> 
                    </div>-->
							</div>
<?php
}
?>

						</div>
					</div>
			</div>
		</div>
 </div>  
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
<br>
<br>
<br>
<?php
require("user_footer.php");
?>



