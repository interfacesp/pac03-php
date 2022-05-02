<?php

/**
 * Exercice Fonctions - 1
 * 
 * Construire un tableau de caractères 
 * 
 * Par exemple: ['k','a','y','a','k']
 * 
 * Déterminez si le tableau de caractères est un palindrome  
 * Si c'est un palindrome, affichez un message "kayak un palindrome"  
 * Sinon "kayak n'est pas un palindrome"
 */

 echo "<h4>Exercices Fonctions  - Palindrome  - kayak</h4>"; 
// déclaration et construction tableau 

 $tableauKayak = ['k', 'a','y','a', 'k'];

 // on appelle une fonction PHP, intégrée, qui renverse les valeurs
 $inverse_tab = array_reverse($tableauKayak); 

echo "<pre>";
 print_r($tableauKayak);
echo "</pre>";

 //comparaison du tableau départ 

 if($tableauKayak == $inverse_tab){
    echo "c'est un palindrome"; 
 }else {
   echo "ce n'est pas un palindrome";
 }

 echo "<h4>Exercices Fonctions  - Palindrome  - bateau</h4>"; 

 $bateau = ['b', 'a','t','e', 'a', 'u'];
 $inverseBateau= array_reverse($bateau);

 echo "<pre>";
 print_r($bateau);
echo "</pre>";

 if($bateau == $inverseBateau){
    echo  "c'est un palindrome";
 }else {
    echo "ce n'est pas un palindrome";
 }


 echo "<h4>Utilisation de chaînes de caractères - Palindrome </h4>"; 

$radar= 'radar';
$inverseRadar = strrev($radar); 

if($radar == $inverseRadar){
  echo $radar. " est un palindrome <br/>";
}
 

/** 
 *  Exercice Fonctions 2
 * 
 * Soit un tableau associatif suivant
 *    
 * Si la clé 'type' existe, il affiche son contenu. 
 * Si elle n'existe pas, il la crée et lui ajoute une la valeur de "crêpe"
 */

echo "<h4> Exercice Fonctions - Existence clé dans tableau associatif </h4>"; 


$crepe =
         [
            'nom' => 'sarrasin',
            'prix' => 10,
            'vegan' => true,
            'glutenFree' => true,
            
         ];

//fonction array_key_exists: détermine s'il existe une clé, dans un tableau associatif

if(array_key_exists('type', $crepe)){
   echo $crepe['type'];
}else {
   $crepe['type'] = "type: crêpe";
}

/**
* Exercice Fonctions  3
* 
* Ecrire une fonction qui calcule la TVA -  calculeTva($prixHTVA, $pourcentageTVA);
* 
*  
* */  

echo "<h4> Calcul TVA </h4>"; 

echo "Soit un prix TVA de 10 EUR et une TVA de 6%, le prix TVAC est de ". calculeTva(10, 0.06). "<br/>";
function calculeTva($prixHTVA, $pourcentageTVA){
    return $prixHTVA + ($prixHTVA * $pourcentageTVA);
}

 

/**
 * Même exercice que pour les passions (voir fichier 4b-exercices-tableaux.php)
 * 
 *    1. Créer un tableau avec 3 éléments qui vous passionnent 
* 
*     2. Demandez à une de vos voisines leur élements. Créez ensuite un tableau associatif
*     où la clé est leur nom, la valeur est le tableau d'éléments qui leur plaisent
*     3. Utilisez la fonction php - array_keys() - pour obtenir la liste des clés du tableau associatif
*     Aidez vous de la documentation officielle(php.net) pour voir comment l'appeler
*     4. Parcourez le résultat de la fonction - array_keys() - pour afficher les passions correspondant à chaque
*        clé. 
 */


   
?>
