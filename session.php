<?php
session_start();
?>
<?php
			if(!isset($_SESSION["islogin"]))
			{
				header('location: login.php');
			}
			
			?>