<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack-php-jour01-job2</title>
</head>
<body>
<h1>les commentaires en php</h1>

<p>commentaires monolignes: <br> on utilise // ou # pour faire des commentaires monolignes </p>
    <?php
          $var1 = "la Plateforme"; //premeier variable 
          $var2 = "Hello";  //deuxieme variable
          $var3 = "!"; #troisieme variable
        echo "$var2 $var1 $var3" #concatenation des variables
    ?>

<p>commentaires multilignes: <br> on utilise /* */ pour inserer des commentaires multilignes </p>
    <?php
          $var1 = "la Plateforme"; /* trois variables dans une operation de concatenation qui va afficher "hello la plateforme !" */
          $var2 = "Hello";
          $var3 = "!";
          echo "$var2 $var1 $var3"
    ?>
</body>
</html>