<?php
$x = 10;
$y = 7;
?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>  
    <p><?php $z=$x+$y; echo "$x + $y = $z"; ?></p>
    <p><?php echo $x . ' - ' . $y. ' = ' . $z=$x-$y; ?></p>
    <p><?php $z=$x*$y; echo "$x * $y = $z"; ?></p>
    <p><?php $z=$x/$y; echo "$x / $y = $z"; ?></p>
    <p><?php $z=$x%$y; echo "$x % $y = $z"; ?></p>   
</body>
</html>
