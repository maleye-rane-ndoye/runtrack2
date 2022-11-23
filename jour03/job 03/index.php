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

$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';

$len = 0;
$i=0;
while (isset($str[$i]) == true) {  
   $len = $len + 1;
   $i = $i +1;
}
for ($i = 0; $i < $len; $i++) {
   if ($str[$i] == 'a') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'e') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'i') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'u') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'A') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'E') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'I') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'U') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'o') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'O') {
         $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'y') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'Y') {
      echo "$str[$i]";
   }
}
    ?>
</body>
</html>