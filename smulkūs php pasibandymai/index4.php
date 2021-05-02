<?php 

$cities=['Berlynas', 'Roma', 'Londonas'];
$cities[]='Tokijas';
print_r($cities);

$cities2=['Tokijas'=>13.6,'Vasingtonas'=>0.6,'Maskva'=>11.5];
$cities2['Londonas']=8.6;
//print_r($cities2);

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
    <ul><li><?php echo $cities[1]; ?></li></ul>
   
    <ul><?php echo 'Gyventoju skaicius: '. $cities2['Tokijas'] . ' mln.'; ?></ul>

</body>
</html>


