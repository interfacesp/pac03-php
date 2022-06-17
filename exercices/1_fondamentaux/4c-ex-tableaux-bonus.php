<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux - Exercices Bonus</title>
</head>
<body>

<h3>Exercies Tableaux - Bonus</h3>

    <h4>Mes Passions</h4>

    <?php
        /**
         * Afficher le contenu du tableau à l'aide d'une boucle for
         */

        $mesPassions = ["sport", "cuisine", "mots-croisés"];

        for($index = 0; $index < count($mesPassions); $index++) {
            echo "<p>$mesPassions[$index]</p>";
        }
    ?>

    <h4>Mes Passions 2</h4>

    <?php
        /**
         * 1. Ajouter 3 nouvelles passions dans le tableau précédent (exemple: kayak,foot,peinture) 
         * 2. Afficher le contenu avec une boucle for
         */

         array_push($mesPassions,"kayak", "foot", "peinture");
        //  $mesPassions[] = "kayak";
        //  $mesPassions[] = "foot";
        //  $mesPassions[] = "peinture"; 

         for($curseur = 0; $curseur < count($mesPassions); $curseur++){
            echo " $mesPassions[$curseur] <br> ";
         }
    ?>


    <h4>Mes Passions 3</h4>

    <?php

        /**
         * Afficher le premier et dernier élément du tableau des mes passions 
         */

        echo $mesPassions[0]; // le premier
        echo $mesPassions[count($mesPassions)-1]; // le dernier
    ?>

    <h4>Mes Passions 4 - Spécial Indice </h4>

    <?php
        /** 
         * Afficher le contenu à l'aide d'une boucle, vous choisirez la mieux adaptée, selon vous. 
         * 
         *  Le tableau devrait contenir: ["sport", "cuisine", "mots-croisés", "kayak", "foot", "peinture"];
         *  Si vous afficher une passion, vous devez afficher la précédente. 
         *  Exemple: 
         *  sport -
         *  cuisine précédé par sport 
         *  mots-croisés précédé par cuisine
         *  kayak précédé par mots-croisés
         * 
         * 
         *  ainsi de suite, jusqu'à la fin du tableau 
         * 
         */

         $activites=["sports","cuisine","mots-croises","kayak","foot","peinture"];
         
         $nombreActi = count($activites);
         /**
          * C'est bien! Mais il faut qu'il y ait au moins 2 éléments dans le tableau
          * pour qu'on affiche quelque chose
          */
         for($index =1; $index < $nombreActi; $index++){
            echo $activites[$index]." est précédé par ".$activites[$index-1]."<br>";
         }



    ?>
    
    
</body>
</html>