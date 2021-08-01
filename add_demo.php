<?php
require("main.php");
require("admin_header.php");
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$price=$_POST['price'];
$url=$_POST['url'];
$actualprice="599";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $sql="INSERT INTO tbl_products(name,price,product_image,url,actual_price)
        VALUES('$name','$price','$target_file','$url','$actualprice')";
        $result=mysqli_query($con,$sql)or die (mysqli_error($con));
        echo "<div class='alert alert-danger'>Demo added successfully</div>";
    }
}
if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $table="tbl_products";
        $values=$obj->editalldata($table,$id);
    }
    if(isset($_POST['update']))
    {
        $id=$_GET["id"];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $url=$_POST['url'];
        $email=$_POST['email'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $table="tbl_products";
        $fields="name='".$name."',price='".$price."',product_image='".$target_file."',url='".$url."'";
        $value="id='$id'";
        $message=$obj->updateall($table,$fields,$value);
    }
    }
?>


        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close">
                        <span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.svg" alt="brand" />
            <img class="d-none" src="dist/img/logo-1.svg" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="name"><b>Demo Name:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="text" placeholder="Name of the demo" name="name" value="<?php if(isset($values)){echo $values['name'];}?>" required>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="price"><b>Demo Price:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="number" placeholder="Price of the demo" name="price" value="<?php if(isset($values)){echo $values['price'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="photo"><b>Add Demo:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" value="<?php if(isset($values)){echo $values['product_image'];}?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-2 form-group">
                                            <label for="url"><b>Demo Url:</b></label>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input class="form-control" type="text" placeholder="URL of the demo" name="url" value="<?php if(isset($values)){echo $values['url'];}?>" required>
                                        </div>
                                    </div>
                                    <?php
        if(isset($values))
        {
            echo '<button class="btn btn-primary btn-block" type="submit" name="update">Update demo</button>';
        }
        else
        {
        echo'<button class="btn btn-primary btn-block" type="submit" name="submit">Add demo</button>';
        }
        ?>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /Container -->
           
<?php
require("user_footer.php");
?>