<?php 
$title = "For loop";
include 'includes/header.php' 
?>
<h1><?php echo $title ?></h1>
<?php 
           for($count = 0; $count < 10; $count++){
               echo" <br/> The count is:  $count";
           }
   
   
?>


    
<?php require 'includes/footer.php'?>