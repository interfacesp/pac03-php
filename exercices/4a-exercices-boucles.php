<?php

/**
 *  Exercice 1
 * 
 * Sel et Miel dispose de 10 Places numérotées de 1 à 10. 
 * A l'aide d'une boucle
 *  
 * Afficher la liste des tables :
 * - Place 1 
 * - Place 2
 * - ...
 * - Place 10 
 * 
 * 
 * Utilisez les boucles: while et for
 *  
 *   while (...) {
 *      affiche numéro 
 *    }
 * 
 *   for(...) {}

 */

echo "<h4>Exercice boucles - Affichage 10 places - boucle while</h4>"; 
$numeroTable= 1; 
 while ($numeroTable <= 10){
    echo "Place ". $numeroTable. "<br/>";
    $numeroTable = $numeroTable + 1; 
 }

echo "<h4>Exercice boucles - Affichage 10 places - boucle for</h4>"; 
for ($numeroTable= 1 ; $numeroTable <= 10 ; $numeroTable = $numeroTable + 1) { 
  echo "Place ".$numeroTable. " <br/>"; 
}


 
 



/**
 * Exerice 1.a 
 *  Implémenter un comptage jusqu'à 10, à l'aide d'une boucle
 *    while
 *    for 
 *
 */


echo "<h4>Exercice boucles - Comptage juque 10 - boucle for</h4>"; 
for ($i= 1; $i <= 10 ; $i= $i + 1) { 
  echo $i; 
}

echo "<h4>Exercice boucles - Comptage juque 10 - boucle while</h4>"; 
$indice = 1;  
while ($indice <= 10) {
  echo $indice;
  $indice = $indice + 1;  
}




/**
* Exercice 1.b
*   Afficher les numéros d'étage d'un immeuble de 20 étages.
*   en utilisant une boucle 
*       - for 
*       - while 
*/

 
echo "<h4> Exercice boucles - Immeuble -  boucle for </h4>"; 

for ($etage =1; $etage <=20; $etage++) { 
  echo "Etage $etage <br/>";
}

echo "<h4>Exercice boucles - Immeuble -  boucle while </h4>"; 

$etage = 1;
while ($etage <= 20) {
  echo "Etage $etage <br/>";
  $etage = $etage + 1; 
}

?>
