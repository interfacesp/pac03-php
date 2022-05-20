<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    
    <h3>Comptage jusque 100</h3>

    <p>
        Avec une boucle while, écrivez un comptage automatique jusque 100,
        à partir de 1.
    </p>

    <?php
        $index= 1; 
        while ($index <= 100) {
            echo $index. "<br/>";
            $index++; 
        }
    ?>

    <h3>Table de muliplication de 3</h3>

    <p>
        Avec une boucle for, afficher la table de multiplication de 3
    </p>

    <?php

        $multiplicateur= 3; 
        for ($i = 0; $i <= 10; $i++) {
            $resultat = $i * $multiplicateur; 
            echo "$i x $multiplicateur = ". $resultat. " <br/>";
        }

    ?> 
    

    <h3>Table de muliplication de 6</h3>

    <p>
        Avec une boucle for, afficher la table de multiplication de 6
    </p>
    
    <?php
        $multiplicateur = 6; 
        for ($i=0; $i <= 10 ; $i++) { 
            echo "$i x $multiplicateur = ". $i * $multiplicateur. " <br/>"; 
        }
    ?>

    <h3>Boucle et incrémentation </h3>

    <p>
         Déclarer une variable avec le nom de votre choix et initialisé à  la valeur 0. 
         Tant que cette variable n'atteint pas 30, il faut :

         <ul>
             <li>L'afficher</li>
             <li>Incrémenter sa valeur de 3</li>
         </ul>
        Si la valeur de la variable est égale à 15, 
        il faut la mettre en évidence avec une balise HTML adaptée.
    </p>

    <?php

        $nombre = 0; 
        while ($nombre < 30) {

            if($nombre == 15){
                echo "<strong>$nombre</strong> <br/>";
            }else {
                echo $nombre. "<br/>";
            }
            $nombre = $nombre + 3; 

        }

    ?>

</body>
</html>