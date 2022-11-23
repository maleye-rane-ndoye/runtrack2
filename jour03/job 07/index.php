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
$str = 'Certaines choses changent, et d\'autres ne changeront jamais.';
$len = 0;
$i=0;
while (isset($str[$i]) == true) {   
   $len = $len + 1;
   $i = $i +1;
} echo "$str <br>";
$strm = [];             
for ($i = 0; $i < $len; $i++) {
    $strm[$i] = $str[($i +1)];
 } 
 $strm[$len] = $str[0];
 foreach($strm as $strmp) {
   echo $strmp;                  
 }
?>
</body>
</html>