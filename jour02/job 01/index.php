<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
    for($x=0;$x<=1337;$x++){
        if ($x==42){
            echo "la valeur de x  est : <b><u>$x<u/></b> <br/>";
        }
        else{
            echo 'la valeur de x est :'.$x.'<br />';}
        
        }
    
    ?>
</body>
</html>
