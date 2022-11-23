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
         function gethello(){
            return "Hello la plateforme !";
         }
    gethello();                 //ceci montre que la valeur est retournez et que rien ne s'affiche.
    $call = gethello();        //ici on fait un appele de la fonction en la recuperant dans une variable
    echo $call;               // ici on affiche la valeur de la fontion
    ?>
</body>
</html>