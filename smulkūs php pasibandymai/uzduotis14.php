
<?php 
$year=2019;
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
       
  <?php if($year < date('Y')) {
     ?><p><?php echo '©' . $year . '-' . date('Y')?></p><?php ; } 
     else{ 
       ?><p><?php  echo '©' . date('Y')?></p><?php ; 
         } ?>
   
</body>
</html>

