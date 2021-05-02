<?php 
$cities4=['Tokijas','Vašingtonas','Maskva','Londonas'];
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
    <ul><?php for($i=0; $i<count($cities4); $i++) {
              echo "<li>$cities4[$i]</li>";
        }
        ?>
    </ul>
    
    <ul><?php foreach($cities4 as $city) {
              echo $city . '</br>';
        }
        ?>
    </ul>
</body>
</html>
