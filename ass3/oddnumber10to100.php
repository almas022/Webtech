<!DOCTYPE html>
<html>
<body>
<?php

    $odd="<br /> Odd Numbers Are : ";

    for($i=10;$i<=100;$i++)
    {
        if($i%2==0)
        {
            $even.=$i."<br>";
        }
        else $odd.=$i."<br>"; 
    }   
    
    echo "The numbers  between(10 to 100): ".$odd;

?>
</body>
</html>
