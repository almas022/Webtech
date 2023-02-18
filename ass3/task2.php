<!DOCTYPE html>
<html>
<body>

<?php
 $price=110;
 $vat=15;
 $price_with_vat=0;
 
    $price_with_vat = $price + ($vat*($price/100));
    
echo "Price after 15% vat added over the amount= " . $price_with_vat;
?>  

</body>
</html>
