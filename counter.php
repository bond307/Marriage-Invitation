
<link rel="stylesheet" type="text/css" href="alert.css" />
<?php
$handle = fopen("counter.txt", "r"); 
if(!$handle) {
 echo "could not open the file"; 
 } 
 else 
 { 
 $counter =(int )fread($handle,20); 
 fclose($handle); 
 $counter++; 
 echo "<div class='flag note'>
                <div class='flag__image note__icon'>
                  <i class='fa fa-heart'></i>
                </div>
                <div class='flag__body note__text'>
                  Number of visitors to this website so far: " . $counter ."
                </div>
              </div>";
 $handle = fopen("counter.txt", "w" ); 
 fwrite($handle,$counter); 
 fclose ($handle); 
 }
 ?>
 
 
 