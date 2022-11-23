<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $nm_premier = [];
   $n = null;
   for ($i=2 ; $i < 1000; $i++) {
      echo "pour le nombre $i<br>";
         for ($j=2 ; $j < 1000; $j++) {
         if ($i % $j == 0) {
            echo 'c\'est pas un nombre premier<br>';
            break;
         } elseif ($i == $j) {
            echo "$i est un nombre premier<br>";
            break;
         }
          else {
            $n = $i;
            $nm_premier[] = $n;} 
            print_r($nm_premier);}
   }
 ?>
</body>
</html>