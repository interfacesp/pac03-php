<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif </title>
</head>
<body>

<h2>Exercices Récapitulatifs</h2>

<?php
/**
 * Déclarer deux variables le  : nom et prénom. 
 */

$nom = "Mhenni";
$prenom = "Soumaya"; 

    /**
     * Affiche le contenu de la variable prénom
    */

echo "<h4>Prénoms</h4>";

echo $prenom."<br>"; 

    /**
       * Afficher le contenu de la variable nom 
    */
echo $nom. "<br>"; 

    /**
     * Afficher concaténation Nom et Prénom 
     */

echo $nom.$prenom."<br>";  
    /**
     * Déclarer une variable prix.
     * Déclaration une variable réduction de 30% 
     * Afficher le prix après application de la réduction 
     */
    echo "<h4>Prix</h4>";


$prix = 10;
$reduction=30;
echo "Prix avec reduction: "; 
echo  $prix-($prix * ($reduction/100)). "<br>";

echo "Autre solution"; 
$calculReduction = $prix * ($reduction/100);
echo $prix - $calculReduction; 

     /**
      * Déclarer une variable avec un nombre au hasard. 
      * Afficher "Nombre pair" si le nombre est pair
      * ou "Nombre impair" si le nombre est impair
      */

   echo "<h4>Nombre au hasard</h4>";

   $nombre =4;
   if($nombre % 2 == 0) {
      echo "$nombre est pair";
   }else {
      echo "$nombre est impair";
   }

    /**
     * Déclarer un tableau avec les prénoms de toute la classe
     */
    
echo "<h4>Tableau prénoms</h4>";

$eleves= array(
               "jennifer", 
               "gaelle",
               "catherine", 
               "yousra",
               "ikram",
               "chaima", 
               "vicky",
               "zahra",
               "soumaya",
               "chris", 
               "eleanor",
               "maya");

echo "<pre>";
print_r($eleves); 
echo "</pre>";
/**
 * Afficher le premier prénom de la liste
*/

echo "<h4>Premier prénom</h4>";
 
    echo $eleves[0];

    /**
     * Afficher le dernier prénom de la liste
     */
echo "<h4>Dernier prénom:</h4>"; 
   echo $eleves[11]."<br>";
   echo $eleves[count($eleves)-1]. "<br>";
   echo end($eleves). "<br>";

    /**
     * Afficher  la liste des prénoms avec une boucle for? 
     */

    echo "<h4>Liste prénoms - non ordonnée </h4>"; 

   $nombreEleves= count($eleves);

   echo "<ul>"; 
      for($i=0; $i < $nombreEleves; $i++) {
         // echo "<li>".$eleves[$i]."</li>";
         echo "<li>$eleves[$i]</li>";
      }
   echo "</ul>";

    /**
     * Afficher  la liste des prénoms avec une boucle foreach? 
    */

    echo "<h4>Liste prénoms -  ordonnée </h4>"; 

    echo "<ol>";  //liste ordonnée 

      foreach($eleves as $nomEleve) {
         echo "<li> $nomEleve </li>";
      }

    echo "</ol>";

    /**
     * Afficher la liste des prénoms avec boucle while 
     */

   
   echo "<h4>Liste prénoms - ordonnée -  while </h4>"; 

   echo "<ol>"; 

   $index=0;
   while ($index < count($eleves)) { // ou $i <= 11 ou $i <= count($eleves)-1
      echo "<li>$eleves[$index]</li>";
      $index++; // ou $index += 1 ou $index = $index + 1
   }

   echo "</ol>"; 


   /**
    * Recap 28/06
    */

    $nombrePersonnes= 15;
    
    /**
     * == égalité stricte
     * >= supérieur ou égal 
     * <= inférieur ou égal 
     * < strictement inférieur
     * > strictement supérieur
     */
    if($nombrePersonnes >= 10){
      echo "$nombrePersonnes est supérieur ou égal à 10"; 
    } else {
      echo "$nombrePersonnes est strictement inférieur à 10";  
    }

    

    $tableau = [
               10,
               15,
               20,
               25
    ]; 

    for($index = 0; $index <= 3; $index++){
         echo $tableau[$index]. "<br>";
    }  

    echo "<h4>Que les nombres >= 20 </h4>";
    for ($index =0 ; $index <= 3; $index++ ) {
         if($tableau[$index] >= 20){
            echo $tableau[$index]. "<br>";
         }
    }



/**
 * Récap 01/07 
 * 
 * Variables et types primitifs
 *    chaines, nombres, boolean
 * Opérateurs arithmétiques 
 * 
 */

 $unNom = "Php";
 $nombre=  10;
 $majeur = true; 
 $nombre2 = 12;
 $somme = $nombre + $nombre2; 

 if($majeur) {
   echo "Vous êtes majeur"; 
 }else {
   echo "Vous êtes mineur"; 
 }

 $langagesProgrammation = ["php","javascript", "python"];

 //Parcours avec boucle for
 for($curseur = 0; $curseur < count($langagesProgrammation); $curseur++ ){
      echo $langagesProgrammation[$curseur]; 
 }

 // Parcours avec boucle while
 $compteur=0; 
 while ($compteur < count($langagesProgrammation)) {
   echo $langagesProgrammation[$compteur]; 
   $compteur++;
 }

 //Foreach 

 foreach ($langagesProgrammation as $langage) {
   echo $langage; 
 }

echo $langagesProgrammation[1]; //affiche javascript
array_push($langagesProgrammation, "c#"); 
$langagesProgrammation[] = "C++"; 

 $fournisseur= [
      "nom" => "Dupont",
      "pays" => "Belgique"
 ];

 echo $fournisseur["nom"]; 
 $fournisseur["adresse"] = "Rue du Moulin"; 

 foreach ($fournisseur as $cle => $valeur){
   echo "$cle : $valeur <br>";
 }

/**
 * A venir
 * 
 * Formulaire - transfert de données page en page 
 * Fonctions 
 * Inclusion de fichiers - include
 * MySql - utilisation base de données 
 */


?>


    
</body>
</html>

