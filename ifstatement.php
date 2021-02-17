<?php 
$title = "If statements";
include 'includes/header.php' 
?>
<h1><?php echo $title ?></h1>
    <?php 
    echo "<h2>If statement</h2>";
    $grade = 30;
    if($grade >= 50){
        echo"<h3 style='color: green'> You have passed</h3>";
    }
    else{
        echo"<h3 style='color: red'> You have failed!</h3>";
    }
    $grade = "B";
    if($grade == "A"){
      echo "<h2>You are a super star</h2>";
    }
    elseif($grade == "B"){
        echo "<h2>You did well!</h2>";
    }
    else{
        echo "<h2>Better luck next time!</h2>";
    }
    ?>

<?php require 'includes/footer.php'?>