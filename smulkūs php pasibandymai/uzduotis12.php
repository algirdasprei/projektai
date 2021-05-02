<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
   
    <?php 
    
    if(isset($_POST["vardas"]) && isset($_POST["pavarde"])) {
        echo 'Jusu vardas: ' . $_POST["vardas"] . '<br>Jusu pavarde: ' . $_POST["pavarde"] ; }
    else { ?>
      <form action="<?php $_PHP_SELF ?>" method="POST">
          Vardas: <input type="text" name="vardas">
          Pavarde: <input type="text" name="pavarde">
          <input type="submit">
      </form>
        <?php
    }
    ?>
    
    
    
    
</body>
</html>
