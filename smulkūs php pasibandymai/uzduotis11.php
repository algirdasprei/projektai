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
  if(isset($_POST["ilgis"]) && isset($_POST["plotis"])) 
      { echo 'Staciakampio plotas: ' . ($_POST["ilgis"]*$_POST["plotis"]); }
 else { ?>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
        Staciakampio ilgis: <input type="text" name="ilgis">
        Staciakampio plotis: <input type="text" name="plotis">
        <input type="submit" name="submit">
    </form>
    <?php   
    }
    ?>
    
</body>
</html>
