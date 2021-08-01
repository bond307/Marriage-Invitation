<?php
require("main.php");
require("user_header.php");
?>
<?php
require("config.php");

?>
<style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8C9EFF;
    background-repeat: no-repeat
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px
}

.icon-content {
    padding-bottom: 20px
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
<?php
$id=$_SESSION["isloginid"];
            $sql1="SELECT * FROM payment_details WHERE user_id='$id'";
            $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
            $row=mysqli_fetch_array($result1);
?>
</style>
<div class="hk-pg-wrapper">
    <div class="container mt-xl-50 mt-sm-30 mt-15">
<div class="container px-1 px-md-4 py-5 mx-auto">
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
			<?php
                if($row['payment_status']==1)
					
                {
                    ?>
                <h5>ORDER ID: <span class="text-primary font-weight-bold">#<?php echo "1".$id."1";?></span></h5>
				<?php
				}
				else
				{
					?>
					<h5>ORDER ID: <span class="text-primary font-weight-bold">#<?php echo "Order not placed";?></span></h5>
					<?php
				}
				?>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Order will be delivered<span> within two days, once ORDER placed</span></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <?php
                    $id=$_SESSION["isloginid"];
                    $sql="SELECT * FROM payment_details WHERE user_id='$id'";
                    $result=mysqli_query($con,$sql)or die (mysqli_error($con));
                    while($row=mysqli_fetch_array($result))
                    {
                        if($row['user_permission']==1)
                        {
                            ?>
                            <li class="active step0"></li>
                            <li class="step0"></li>
                            <li class="step0"></li>
                            <li class="step0"></li>
                            <?php
                        }
                    if($row['user_permission']==2)
                        {
                            ?>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="step0"></li>
                            <li class="step0"></li
                            <?php
                        }
                     if($row['user_permission']==3)
                        {
                            ?>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="step0"></li>
                            <?php
                        }
                        if($row['user_permission']==4)
                        {
                            ?>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Placed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Processed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Completed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Delivered</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php
require("user_footer.php");
?>