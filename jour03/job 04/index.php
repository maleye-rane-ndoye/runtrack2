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
$str = 'Dans l\'espace, personne ne vous entend crier';
$len = 0;
$i=0;
while (isset($str[$i]) == true) {   
   $len = $len + 1;
   $i = $i +1;
}
echo "Le nombre total de la chaine est: $len<br>";
$j =0;
for ($i = 0; $i < $len; $i++) {
   if ($str[$i] == " ") {          
      $j = $j +1;
   }
   elseif ($str[$i] == ".") {
      $j = $j +1;
   }
   elseif ($str[$i] == ",") {
      $j = $j +1;
   }
   elseif ($str[$i] == "\'") {
      $j = $j +1;
   }
}
echo 'Le nombre de caractères présents dans cette chaîne est: '. ($len - $j);  
?>
</body>
</html>