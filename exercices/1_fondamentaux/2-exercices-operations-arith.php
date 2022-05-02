<?php

/**
 * Exercice 1 
 * 
 * Sachant qu'à Interface3, il y a des formations différentes. 
 * Quelques exemples de formations avec leur nombre de stagiaires (nombre fictif) 
 *  
 *   WEB : 18
 *   WAD : 15
 *   Unity: 15
 *   ASR : 20 
 * 
 *   Calculer et afficher le total de stagiaires pour ces formations 
 */

    echo "<h4>Exercice 1 - Opérations Arith</h4>"; 

    $web = 18; 
    $wad = 15; 
    $unity = 15;
    $asr = 20; 
    $totalEleves = $web + $wad + $unity + $asr; 

    echo " <p>Nombre d'élèves chez les web: ". $web . "</p>";
    echo " <p>Nombre d'élèves chez les wad: ". $wad . "</p>";
    echo " <p>Nombre d'élèves chez les unity: ". $unity . "</p>";
    echo " <p>Nombre d'élèves chez les asr: ". $asr . "</p>";

    echo "<p> Total d'élèves :". $totalEleves." </p>";


 /**
 * Exercice 2 
 * 
 *  Vous fêtez un anniversaire. 
 *  Pour allumer les bougies du gâteau, vous utilisez 3 allumettes d'une boîte de 50. 
 *  
 *  1. Calculer et afficher le nombre qu'il reste. 
 *  
 *  2. Et si votre boîte d'allumettes en contenait 120 ?
 *     Utilisez la puissance de flexbililité des variables 
 * 
 */
echo "<h4>Exercice 2 </h4>";
 // 1ère version
$allumettesTotal= 50-3; 
echo "<p>Il y a $allumettesTotal dans la boite </p>";
//autre possibilité:
echo "<p>Il y a ". $allumettesTotal." dans la boite</p>";
$boite = 120; 
$nbAllumettesPrises= 3; 

echo "<p>Il reste ".($boite-$nbAllumettesPrises)."</p>";
// La soustraction ne marche pas mais l'évaluation des variables fonctionne.
echo "Il reste  $boite-$nbAllumettesPrises"; 

//version avec que Variables

$totalBoite= 50; //120
$nbAllPrises = 3; 

echo "<p>Il reste". ($totalBoite - $nbAllPrises). " </p>"; 


 /**
 * Exercice 3
 * 
 *  Interface3 dispose de 10 salles de cours. 
 *  Combien faudrait-il de stagiaires par classe, s'il y 210 stagiaires inscrites?  
 *  
 *  Calculer et afficher ce nombre
 * 
 */

 echo "<h4>Exercice 3 </h4>"; 

 $nombreSalles = 10;
 $nombreStagiaires= 210;
 $resultatDivision = $nombreStagiaires / $nombreSalles;
 
 echo  "<p>Nombre de stagiaires par classe: ". $resultatDivision."</p>";

 /**
 * Exercice 4
 * 
 *  Vous êtes sorties entre  copines (5 au total), avaient mangé des pizzas, pour 12,56 EUR chacune. 
 *  Combien sera l'addition ? 
 *  Calculez et afficher ce nombre 
 */

  echo "<h4>Exercice 4</h4>";
  $prixPizza = 12.56;
  $nbCopines = 5;

  $totalAddition = $prixPizza * $nbCopines; 

  echo "<p>Grazie (merci) de payer le total de  ". $totalAddition ." EUR </p>";
 

 /**
 * Exercice 5
 * 
 *  Calculer et afficher le reste de la division de 25 par 3. 
 *  Indice : utilisez l'opération modulo 
 * 
 * 
 * 
 */

echo "<h4>Exercice 5</h4>"; 

$nombre1= 25;
$nombre2= 3; 
echo "<p> Le reste de la division de $nombre1 par $nombre2 = ". ($nombre1 % $nombre2). "</p>";

 



 


    

?>