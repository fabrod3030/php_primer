<?php 
$title = "Array";
include 'includes/header.php' 
?>
<h1><?php echo $title ?></h1>

<?php 
     $num = array(1,2,3,4,5,6,7,8,9);

     echo $num[0];

     

    //new var size with
    //count method , passing
    //the num array as a param
    //echo the num array with 
    //the new size var
     $size = count($num);
     echo "<p>Array Numbers is : $size</p>";
   
     for($count = 0; $count < $size; $count++){
         echo "<p>$num[$count]</p>";
     }
   
?>


    
<?php require 'includes/footer.php'?>