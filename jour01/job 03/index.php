<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>Runtrack-php-jour01-job3</title>
</head>
<body>
    <h1> Tableau Associatif: key = value </h1>
    <?php
      $type = array("Boolean","Entier","Chaine","Decimal");
      $nom = array( "Homme","Age","Prenom","Taille");
      $valeur = array(true,30,"Mily",1.87);

      
    ?> 
  <table class="tableau-style">
      <thead>
        <tr>
          <th>TYPE</th>
          <th>NOM</th>
          <th>VALEUR</th>
        </tr>
      </thead>
  
      <tbody>
      <br><br><br>
            <tr>
                <td> <?php echo " $type[0]"?> </td>
                <td><?php echo " $nom[0]"?></td>
                <td><?php echo " $valeur[0]"?></td>
            </tr>
            <tr>

                <td> <?php echo " $type[1]"?> </td>
                <td><?php echo " $nom[1]"?></td>
                <td><?php echo " $valeur[1]"?></td>
            </tr> 
        
            <tr>
                <td> <?php echo " $type[2]"?> </td>
                <td><?php echo " $nom[2]"?></td>
                <td><?php echo " $valeur[2]"?></td>
           </tr>
           
            <tr>
                <td> <?php echo " $type[3]"?> </td>
                <td><?php echo " $nom[3]"?></td>
                <td><?php echo " $valeur[3]m"?></td>
            </tr> 
      </tbody> 
  
    </table>
</body>
</html>
    
     
  
      
  



