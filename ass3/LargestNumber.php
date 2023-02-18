<!DOCTYPE html>
<html>
<body>
<?php
      $num1=100;
      $num2=200;
      $num3=300;
      
      if($num1>$num2 && $num1>$num3){
        echo "The largest number from three given numbers=". $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo "The largest number from three given numbers= ". $num3;
      }
?>
</body>
</html>
