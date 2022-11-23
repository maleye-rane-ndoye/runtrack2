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
        
        $nombre=[200, 204, 173, 98, 171, 404, 459];
            foreach ($nombre as $var){ 
                if($var%2==0)
                echo $var.' est pair'.'<br/>';
                else
                echo $var.' est impair'.'<br/>';
            }




    
    
    ?>

</body>
</html>