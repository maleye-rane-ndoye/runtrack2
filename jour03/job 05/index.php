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
$str = 'On n’est pas le meilleur quand on le croit mais quand on le sait';

$voyelles = [];
$consonnes = [];
$long = 0;
$i=0;
while (isset($str[$i]) == true) {   
   $long = $long + 1;
   $i = $i +1;
}
for ($i = 0; $i < $long; $i++) {

   if ($str[$i] == 'a') {           
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'e') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'i') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'u') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'A') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'E') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'I') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'U') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'o') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'O') {
         $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'y') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'Y') {
      $voyelles[] = $str[$i];
   }

   else {
   if ($str[$i] != " ") {           
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != ".") {
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != ",") {
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != "\'") {
      $consonnes[] = $str[$i];
   }
   }
}


?>
<table style="border: 3mm ridge #191970	;">   
   <thead>
      <tr>
         <th>Voyelles</th>
         <th>Consonnes</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
         <?php
         $m = 0;
            foreach($voyelles as $voyelle){
               $m = $m +1;                    
               echo $voyelle . ' ';
            }
         ?>
         </td>
         <td>
         <?php
            $n =0;
            foreach($consonnes as $consonne){
               $n =$n +1;                       
               echo $consonne . ' ';
            }
         ?>
         </td>
      </tr>
      <tr>
         <td><?php  echo $m; ?></td>
         <td><?php  echo $n; ?></td>
      </tr>
   </tbody>
</table>

</body>
</html>