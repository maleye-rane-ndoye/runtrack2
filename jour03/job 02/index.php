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
$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

$len = 0;
$i=0;
while (isset($str[$i]) == true) {   
   $len = $len + 1;
   $i = $i +1;
}

for ($i =0; $i < $len; $i++) {
   if ($i % 2 == 0) {                 
      echo $str[$i];
   }
}

?>
</body>
</html>