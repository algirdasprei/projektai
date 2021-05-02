<?php 
$temp=[4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
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
    
<p><?php $suma=0;
   foreach($temp as $t) {
        $suma=$suma+$t;
    }; 
       echo 'Vidutine temperatura: ' . $vidtemp=round($suma/count($temp)) . ' laipsniu C.'; ?></p>
<p>Penkios didziausios temperaturos: <?php 
      rsort($temp);
      foreach(array_slice($temp,0,5) as $td) {
        echo $td . ' '; } ?></p>
    <p>Penkios maziausios temperaturos: <?php 
       rsort($temp);
       foreach(array_slice($temp,-5,5) as $tm) {
         echo $tm . ' '; } ?></p>   
</body>
</html>
