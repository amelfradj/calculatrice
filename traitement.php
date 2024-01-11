<?php
      $valeur1=$_POST['nombre'];
      $op=$_POST['operation'];
      $valeur2=$_POST['nombre1'];
      
      
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
 
    <?php
    if (isset($op)){
    echo("Resultat du calcul ".$valeur1.$op.$valeur2." : ");//Elle concatène les valeurs de $valeur1, $op et $valeur2 pour former une chaîne de texte décrivant le calcul en cours.
    if ($op=="+") {// si la valeur de $op est égale à "+" alors on ajoute les deux valeurs de $
        echo $valeur1+$valeur2;//On ajoute les deux valeurs de $valeur1 et $valeur2
    } elseif ($op=="-") {//si la valeur de $op est égale à "-" alors on soustrait les valeurs de $valeur1 et $valeur2
        echo $valeur1-$valeur2;//On soustrait les deux valeurs de $valeur1 et $valeur
    } elseif ($op=="*") {//si la valeur de $op est égale à "*" alors on multiplie les deux
        echo $valeur1*$valeur2;//On multiplie les deux valeurs de $valeur1 et $valeur2
    } else {//si la valeur de $op est égale à "/" alors on divise les deux
        echo $valeur1/$valeur2;//On divise les deux valeurs de $valeur1 et $valeur2
    }
}
?>
    
        
       
    </main>
    
</body>
</html>