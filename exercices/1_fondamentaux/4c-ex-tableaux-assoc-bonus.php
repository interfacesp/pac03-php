<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices - Bonus - Tableaux associatifs </title>
</head>
<body>

<?php

    /**
     * Déclarer un tableau association: calendrier. 
     * Les clés seront les noms des mois de l'années
     * Les valeurs seront le nombre de jours dans cette année.
     * Une clé spéciale "année" contiendra l'année
     *  
     */

        $calendrier = array("janvier" => 31,
                            "fevrier" => 28, 
                             "mars" => 31,
                             "avril" => 30,
                             "mai" => 31,
                             "juin" => 30,
                             "aout"=>  31,
                             "septembre"=>30,
                             "octobre"=>31,
                             "novembre"=>30, 
                             "decembre"=>31,
                             "annee"=>2022 );

        $calendrier2 = [ "janvier" => 31,
                        "fevrier" => 28, 
                        "mars" => 31,
                        "avril" => 30,
                        "mai" => 31,
                        "juin" => 30,
                        "aout"=>  31,
                        "septembre"=>30,
                        "octobre"=>31,
                        "novembre"=>30, 
                        "decembre"=>31,
                        "annee"=>2022 
                    ];
 
                            
     /**
      * Afficher le nombre de jours du mois d'octobre 
      */
        echo "Le mois d'octobre a ".$calendrier['octobre']." jours <br>";

      /**
       * Afficher le nombre de jours du mois de février 
       */

        echo "Le mois de février a ". $calendrier['fevrier']. " jours <br>";
      /**
       * 
       *  Afficher le contenu du calendrier (exemple "mars: 31") avec boucle foreach 
       * (indice: regardez documentation PHP pour vous inspirer de comment parcourir )
       * */ 

       

?>

    
</body>
</html>