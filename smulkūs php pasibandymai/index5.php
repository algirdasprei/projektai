<?php 

$cities3=[
    'Tokijas'=>[13.6, 1868, 'Japonija'],
    'Vasingtonas'=>[0.6, 1790, 'JAV'],
    'Maskva'=>[11.5, 1147, 'Rusija']
];

//$cities3['Londonas'][0]=8.6;
//$cities3['Londonas'][1]=43;
//$cities3['Londonas'][2]='Anglija';

$cities3['Londonas']=[8.6, 43, 'Anglija'];
    
//print_r($cities3);

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
    <ul>
        <li><?php echo 'Gyventoju skaicius: ' . $cities3['Londonas'][0] . ' mln.'; ?></li>
        <li><?php echo 'Įkurtas: ' . $cities3['Londonas'][1] . ' m.'; ?></li>
        <li><?php echo 'Šalis: ' . $cities3['Londonas'][2] . '.'; ?></li>
    </ul>    
</body>
</html>
