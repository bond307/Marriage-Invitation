<?php 


           
function weedingImageShown(){
    require("../session.php");

$con=mysqli_connect("localhost", "root", "", "wedding_invi");

$user_id=$_SESSION['isloginid'];
    $InfoSQL = mysqli_query($con, "SELECT * FROM tamplate_info WHERE user_id = '$user_id' ");
$form_rows = mysqli_fetch_assoc($InfoSQL);
    $wedingImg = $form_rows['wee_imgs'];

    $wedingImg = explode(',' , $wedingImg);
    foreach($wedingImg as $value){
        echo ' <div class="column"><img src="info-img/'.$value.'"></div>';
   }
    
}